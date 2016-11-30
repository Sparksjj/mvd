<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
class AboutController extends Controller
{

    public function index(){
    	Mapper::map(53.8989461, 27.5486561,['zoom' => 14]);
    	return view('site.about');
    }
}
