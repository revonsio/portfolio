<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }

    function showTugasphp() {
        //source untuk data / proses bisnis yg di olah
        return view('tugasphp') ;
    }

    function resultphp(Request $request) {
        //source untuk data / proses bisnis yg di olah
        return view('result') ;
    }

}
