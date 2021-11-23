<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iniedmin extends Controller
{
    public function viewtemplate(){
        return view('layout.template');
    }

    public function viewbio(){
        return view('biodata');
    }
}
