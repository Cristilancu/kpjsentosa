<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\feedback;

class feedbackController extends Controller
{
    //
    public function index(){
    	$feedbacks = feedback::paginate(10);
    	return view('admin.feedback.index', compact('feedbacks'));
    }
}

