<?php

namespace App\Http\Controllers\show;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Request\Show\SearchRequst;

class StudentController extends BaseController
{
    /**
     * @param $title
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * @return 
     */
    public function index(){
        $this->setPageTitle('Students', 'All Students');
        $students = Student::all();
        return view('Show.pages.Students.index', compact('students'));
    }

    /**
     * @param Student $student
     * @return Application|Factory|View
     */
    public function show(Student $student){
        $this->setPageTitle($student->name, 'Show student');
        $student->load('phones');
        return view('Show.pages.Students.show', compact('student'));
    }
}
