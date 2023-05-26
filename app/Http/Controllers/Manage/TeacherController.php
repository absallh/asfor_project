<?php
namespace App\Http\Controllers\Manage;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Http\Requests\Student\StorePhoneRequest;
use App\Models\Employee;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
class TeacherController extends BaseController
{
    /**
     * Access the index page for the students to see all students
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Teachers', 'All Teachers');
        $teachers = Employee::where('emp_type','Teacher')->get();
        //$teachers->load('subjects');
        return view('Manage.pages.Teacher.index', compact('teachers'));
    }
    public function addTeacher(){
        //dd('add teacher');
        $this->setPageTitle('Teachers', 'Add Teachers');
        $teachers = Employee::where('emp_type','Teacher')->get();
        //$teachers->load('subjects');
        return view('Manage.pages.Teacher.addTeacher', compact('teachers'));
    }
    /**
     * @param StoreStudentRequest $request
     * @return RedirectResponse
     */
    public function create(StoreTeacherRequest $request): RedirectResponse
    {
        try {
            $teacher = Employee::create($request->validated());
        } catch (Exception $exception) {
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Teacher Created Successfully', 'success');
        // Redirect Back
        return redirect()->route('teacher.index');
    }
    public function show(Employee $teacher)
    {
        $this->setPageTitle('Teacher', $teacher->name);
        //$teachers->load('subjects');
        return view('Manage.pages.Teacher.show', compact('teacher'));
    }
    public function updateTeacher(Employee $teacher){
        $this->setPageTitle('Update Teacher', $teacher->name);
        //$teachers->load('subjects');
        return view('Manage.pages.Teacher.UpdateTeacher', compact('teacher'));
    }
    public function update(StoreTeacherRequest $request, Employee $teacher){
        try {
            $teacher->update($request->all());
        } catch (\Exception $exception) {
            alert('Oops', 'Please try again', 'error');
        }
        alert('Good Job', 'Teacher Updated Successfully', 'success');
        return redirect()->route('teacher.index');
    }
    /**
     * @param Student $student
     * @return RedirectResponse
     */
    public function destroy(Employee $teacher): RedirectResponse
    {
        try {
            $teacher->delete();
        } catch (\Exception $exception) {
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Teacher removed Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }
}
