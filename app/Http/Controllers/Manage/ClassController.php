<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Http\Requests\Student\StorePhoneRequest;
use App\Models\Classe;
use App\Models\Phone;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClassController extends BaseController
{
    /**
     * Access the index page for the students to see all students
     * @return Application|Factory|View
     */
    public function index(){
        $this->setPageTitle('Classes', 'All Classes');
        $classes = Classe::all();
        return view('Manage.pages.Class.index', compact('classes'));
    }

    public function assign_subject(Classe $classe){
        $this->setPageTitle('Classes', 'All Classes');
        $classes = Classe::all();
        return view('Manage.pages.Class.index', compact('classes'));
    }

    /**
     * @param Subject $subject
     * @return Application|Factory|View
     */
    public function show(Classe $class){
        $this->setPageTitle($class->id, 'Show Class');
        return view('Manage.pages.Class.show', compact('class'));
    }
    
    /**
     * @param Student $student
     * @return RedirectResponse
     */
    public function destroy(Classe $class): RedirectResponse
    {
        try {
            $class->delete();
        }
        catch (\Exception $exception){
            alert('Oops', 'Please try again', 'error');
        }
        // Show Sweet Alert Notification
        alert('Good Job', 'Class removed Successfully', 'success');
        // Redirect Back
        return redirect()->back();
    }

}