<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ContactsController extends Controller
{
    public function index(){
    	Mapper::map(53.381128999999990000, -1.470085000000040000);
    	return view('site.contact');
    }
}
