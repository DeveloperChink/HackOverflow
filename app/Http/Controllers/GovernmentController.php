<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    public function index(){
            return view('home');
    }

    public function show(){
        return view('layouts.projects');
    }

    public function page3(){
            return view('page3');
    }

    public function bidding(){
        return view('layouts.bidding');
    }

    public function bidOpportunity(){
        return view('bid-opportunities');
    }

    public function bidDetails(){
        return view('bid');
    }


}