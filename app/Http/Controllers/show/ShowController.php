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

class ShowController extends BaseController
{
    /**
     * Access the dashboard page
     * @return Application|Factory|View
     */
    public function index(){
        $this->setPageTitle('Search', 'search');
        return view('show.pages.Singles.search');
    }

    /**
     * @param $title
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * @return 
     */
    protected function search(Request $req)
    {
        $model; $result; $viewName;
        if ($req->model_name == 'Student'){
            $this->setPageTitle('Student Search', 'Student Search');
            $model = Student::class;
            $result = $model::where('id','like',"%$req->search_key%")->get();
            $viewName = 'show.pages.Students.index';
        }

        return view($viewName, compact('result'));
    }
}
