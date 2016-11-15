<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainPageController extends Controller
{
    public function index(){
    	return view('site.main');
    }
}
