<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index(){


    }

    public function show(){
        return view('layouts.projects');
    }

    public function page3(){
        return view('page3');
}
}
