<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function create(){
        return view('events/form');
    }

    public function list(){
        return view('events/list');
    }

    public function layoutmaster(){
        return view('layout/master-layout');
    }
    //
}
