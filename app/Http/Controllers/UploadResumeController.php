<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadResumeController extends Controller
{
    //

	public function index()
	{
		return view('uploadResume.index');
	}

    public function store(Request $request)
    {
    	dd('dd');
    }
}
