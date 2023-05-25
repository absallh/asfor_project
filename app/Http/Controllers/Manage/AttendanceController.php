<?php

namespace App\Http\Controllers\Manage;

use Carbon\Carbon;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\Attendance\StoreAttendanceRequest;

class AttendanceController extends BaseController
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        $this->setPageTitle("Attendances" , 'All Attendances');
        $attendances = Attendance::with(['classe', 'subject', 'teacher'])->WhereSubject(request()->get('subject_filter'))->WhereDateIs(request()->get('date_filter'))->withCount('students')->get();
        $subjects = Subject::all();
        //$attendances->load('subject');
        return view('Manage.pages.Attendance.index', compact('attendances', 'subjects'));
    }

    /**
     * @param StoreAttendanceRequest $request
     * @return Application|Factory|View
     */
    public function store(StoreAttendanceRequest $request){
        // date('Y-m-d', strtodate($request->date));
        // dd($request);
        $attendanceFirst = Attendance::where('subject_id',$request->subject_id)->where('date', date('Y-m-d', strtotime($request->date)))->exists();
        // dd($attendanceFirst);
        if($attendanceFirst){
            alert('Oops', " Try again ", 'error');
            return redirect()->back();
        }
        $attendance = Attendance::create($request->validated() + [
            'user_id' => Auth::id(),
            ]);
        $subject = Subject::findorfail($request->get('subject_id'));
        $subject->load('students');
        $this->setPageTitle($attendance->idm , 'Attendance');
        alert('Good Job', 'You can start your attendance now!!', 'success');
        return view('Manage.pages.Attendance.take-attendance', compact('attendance', 'subject'));
    }

    /**
     * @param Attendance $attendance
     * @return Application|Factory|View
     */
    public function edit(Attendance $attendance){
        $this->setPageTitle($attendance->id , 'Attendance');
        $attendance->load('students', 'subject');
        return view('Manage.pages.Attendance.edit', compact('attendance'));
    }

    /**
     * @param Attendance $attendance
     * @param Request $request
     * @return RedirectResponse
     */
    public function attachStudents(Attendance $attendance, Request $request): RedirectResponse
    {
        if ($request->get('status') == null) {
            $attendance->delete();
            alert('Oops', "You didn't take any attendance. Try again and fill all entries please", 'error');
        }
        else{
            foreach ($request->get('status') as $student_id => $status) {
                $student = Student::findorfail($student_id);
                if ($status == "on") {
                    $value = 1;
                } elseif($status == "off") {
                    $value = 0;
                }
                else{
                    $value = null;
                }

                if($student->leave_count < 3 && $status == "off"){
                    $student->leave_count += 1;
                }else if($student->leave_count >= 3 && $status == "off"){
                    $student->leave_at = $attendance->date;
                    $student->subjects()->updateExistingPivot($attendance->subject, ['leave_at'=>$attendance->date], false);
                }
                else{
                    $student->leave_count = 0;
                }
                $student->save();
                $attendance->students()->attach($student->id, ['status' => $value]);
            }
            alert('Good Job', 'Attendance taken successfully', 'success');
        }
        return  back();
    }

    /**
     * @param Attendance $attendance
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateAttendanceData(Attendance $attendance, Request $request): RedirectResponse
    {
        $attendance->students()->detach();
        $this->attachStudents($attendance, $request);
        alert('Good Job', 'Attendance Data updated successfully', 'success');
        return  back();
    }

    /**
     * @param Attendance $attendance
     * @return RedirectResponse
     */
    public function destroy(Attendance $attendance): RedirectResponse
    {
        try {
            $attendance->delete();
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        alert('Good Job', 'Attendance removed successfully', 'success');
        return  back();
    }
}
