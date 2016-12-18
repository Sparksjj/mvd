<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreeController extends Controller
{
    public function index(){
    	return view('site.3d');
    }
}
