<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ContactsController extends Controller
{
    public function index(){
    	Mapper::map(53.8989739, 27.5519058,['zoom' => 15]);
        $data = [
            'contact' => Contact::first(),
        ];
    	return view('site.contact', $data);
    }    
    public function sendEmail(Request $request){
    	//add mail logic
/*    	Mail::send('emails.userEmail', ['request' => $request], function ($m) use($request){
			$m->from('info@naveksoft.com', $name = 'yauhen');
			$m->to('info@naveksoft.com', $name = 'info@naveksoft.com');
			$m->subject($request->subject);
	    });*/
    	return redirect('/contacts')->with('status', 'layout.email_success')->with('type', 'alert-success');
    }
}
