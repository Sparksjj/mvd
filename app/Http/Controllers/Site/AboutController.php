<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
class AboutController extends Controller
{

    public function index(){
    	return view('site.about');
    }
}
