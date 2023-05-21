<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Http\Requests\Student\StorePhoneRequest;
use App\Models\Student;
use App\Models\Phone;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    /**
     * Access the index page for the students to see all students
     * @return Application|Factory|View
     */
    public function index(){
        $this->setPageTitle('Students', 'All Students');
        $students = Student::all();
        return view('Manage.pages.Students.index', compact('students'));
    }

    /**
     * @param Student $student
     * @return Application|Factory|View
     */
    public function show(Student $student){
        $this->setPageTitle($student->name, 'Show student');
        $student->load('phones');
        return view('Manage.pages.Students.show', compact('student'));
    }

    /**
     * @param Student $student
     * @return Application|Factory|View
     */
    public function addPhone(Student $student){
        $this->setPageTitle($student->name, 'Add Phone');
        return view('Manage.pages.Students.addPhone', compact('student'));
    }

    /**
     * @param Student $student
     * @return Application|Factory|View
     */
    public function updatePhone(Student $student, Phone $phone){
        $this->setPageTitle($student->name, 'Update Phone');
        return view('Manage.pages.Students.updatePhone', compact('student', 'phone'));
    }

    /**
     * @param StorePhoneRequest $request
     * @return RedirectResponse
     */
    public function storePhone(Student $student, StorePhoneRequest $request): RedirectResponse
    {
        try {
            Phone::create($request->validated());
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Student Created Successfully', 'success');
        // Redirect Back
        return redirect()->route('student.show', ['student' => $student->id]);
    }

    /**
     * @param StorePhoneRequest $request
     * @param Student $student
     * @return RedirectResponse
     */
    public function editPhone(StorePhoneRequest $request, Student $student, Phone $phone): RedirectResponse
    {
        //dd($request);
        try {
            //$request->all();
            $phone->update($request->all());
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Student Updated Successfully', 'success');
        // Redirect Back
        return redirect()->route('student.show', ['student' => $student->id]);
    }

    /**
     * @param Student $student
     * @return RedirectResponse
     */
    public function destroyStudentPhone(Student $student, Phone $phone): RedirectResponse
    {
        try {
            $phone->delete();
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Phone removed Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }

    /**
     * @param StoreStudentRequest $request
     * @return RedirectResponse
     */
    public function store(StoreStudentRequest $request): RedirectResponse
    {
        $student = null;
        try {
            $student = Student::create($request->validated());
        }
        catch (Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        //alert('Good Job', 'Student Created Successfully', 'success');
        // Redirect Back
        return redirect()->route('student.addPhone', ['student'=>$student->id]);
    }

    /**
     * @param UpdateStudentRequest $request
     * @param Student $student
     * @return RedirectResponse
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        // dd($request);
        try {
            //$request->all();
            $student->update($request->all());
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Student Updated Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }

    /**
     * @param Student $student
     * @return RedirectResponse
     */
    public function destroy(Student $student): RedirectResponse
    {
        try {
            $student->delete();
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Student removed Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }
}
