<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Student\StoreStudentRequest;
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
        $this->setPageTitle('Teachers', 'All Teachers');
        $teachers = Employee::where('emp_type','Teacher')->get();
        //$teachers->load('subjects');
        return view('Manage.pages.Teacher.index', compact('teachers'));
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
