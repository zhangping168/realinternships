<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UploadResume as UploadResume;

use Auth;

class UploadResumeController extends Controller
{
    //

    public function __construct(){
    	$this->middleware('auth');
    }

	public function index()
	{
		return view('uploadResume.index');
	}

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'resume'=>'required|mimes:pdf,txt,rtf,doc.dot|max:1999'
    	]);

    	if($request->hasFile('resume')){
    		$full_filename = $request->file('resume')->getClientOriginalName();

    		$filename = pathinfo($full_filename,PATHINFO_FILENAME);
    		$ext = $request->file('resume')->getClientOriginalExtension();

    		$filenameToStore = $filename.'_'.time().'.'.$ext;

    		$path = $request->file('resume')->storeAs('public/resumes', $filenameToStore);

    		$resume = new UploadResume;
    		//$resume->user_id= Auth::id();
    		//$resume->resume = $path;

    		$record = $resume->firstOrCreate(['user_id'=>Auth::id(),'resume'=>$path]);

    		if($record->wasRecentlyCreated){
    			$request->session()->flash('message.level','success');
    			$request->session()->flash('message.content','Resume has been uploaded successfully!');
    		}else{
    			$request->session()->flash('message.level','danger');
    			$request->session()->flash('message.content','Upload was failed, please try again.');
    		}

    		return back();
    	}else{
    		return false;
    	}


    }
}
