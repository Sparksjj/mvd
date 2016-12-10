<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
class AboutController extends Controller
{

    public function index(){
    	$data = [
    		'about' => About::first(),
    	];
    	return view('site.about', $data);
    }
}
