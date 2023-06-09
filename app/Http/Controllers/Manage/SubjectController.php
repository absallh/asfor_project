<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Subject\StoreSubjectRequest;
use App\Http\Requests\Subject\UpdateSubjectRequest;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Classe;
use App\Models\Employee;
use App\Models\User;
use \Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubjectController extends BaseController
{
    /**
     * Access the index page for the students to see all students
     * @return Application|Factory|View
     */
    public function index(){
        $this->setPageTitle('Subjects', 'All Subjects');
        $subjects = Subject::all();
        $subjects->load(['classe', 'students'=>function ($query) {
                                        $query->whereNull('subject_student.leave_at');
                                    }]);
        $classes = Classe::all();
        $teachers = Employee::where('emp_type','Teacher')->get();
        return view('Manage.pages.Subject.index', compact('subjects', 'classes', 'teachers'));
    }

    /**
     * @param Subject $subject
     * @return Application|Factory|View
     */
    public function show(Subject $subject){
        $this->setPageTitle($subject->name, 'Show Subject');
        $classe = Classe::where('id','like',"%$subject->class_id%")->first();
        $subject->load(['students'=>function ($query) {
                                                    $query->whereNull('subject_student.leave_at');
                                                }]);
        //dd($class);
        return view('Manage.pages.Subject.show', compact('subject', 'classe'));
    }

    /**
     * @param Subject $subject
     * @return Application|Factory|View
     */
    public function assignStudents(Subject $subject){
        // dd(Student);
        $subject->load(['students'=>function ($query) {
            $query->whereNull('subject_student.leave_at');
        }]);
        $this->setPageTitle($subject->name, 'Assign Students');
        $students = Student::WhereNotIn('id', $subject->students->pluck('id'))->get();
        return view('Manage.pages.Subject.assign-student', compact('students', 'subject'));
    }

    /**
     * Save students
     * @param Subject $subject
     * @param Request $request
     * @return RedirectResponse
     */
    public function attachAssignedStudents(Subject $subject, Request $request): RedirectResponse
    {
        // dd($request->join_date);
        $subject->students()->attach($request->get('students'));
        $subject->students()->updateExistingPivot($request->get('students'), ['join_date'=>date('Y-m-d H:i:s', strtotime($request->join_date))], false);
        alert('Good Job', 'Students Assigned Successfully', 'success');
        // Redirect Back
        return redirect()->route('subject.index');
    }

    /**
     * Remove students from the course
     * @param Subject $subject
     * @param Student $student
     * @return RedirectResponse
     */
    public function detachAssignedStudent(Subject $subject, Student $student): RedirectResponse
    {
        $subject->students()->updateExistingPivot($student, ['leave_at'=>Carbon::today()], false);
        alert('Good Job', $student->name . ' Removed Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }

    /**
     * @param StoreSubjectRequest $request
     * @return RedirectResponse
     */
    public function store(StoreSubjectRequest $request): RedirectResponse
    {
        //dd($request);
        try {
            Subject::create($request->validated());
        }
        catch (Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Course Created Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }

    /**
     * @param UpdateSubjectRequest $request
     * @param Subject $subject
     * @return RedirectResponse
     */
    public function update(UpdateSubjectRequest $request, Subject $subject): RedirectResponse
    {
        try {
            $subject->update($request->validated());
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Course Updated Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }

    /**
     * @param Subject $subject
     * @return RedirectResponse
     */
    public function destroy(Subject $subject): RedirectResponse
    {
        try {
            $subject->delete();
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Course removed Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }
}
