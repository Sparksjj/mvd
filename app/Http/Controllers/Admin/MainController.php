<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Category;
use App\Helpers\StrHelper;
use App\Helpers\ControlHelper;
use App\Helpers\TreeHelper;
use Route;

class MainController extends Controller
{
	public function index(){
        $data = [
            'latest_categories' => Category::orderBy('created_at', 'desc')->take(10)->get(),
            'latest_documents' => Document::orderBy('created_at', 'desc')->take(10)->get(),
            'tree' => TreeHelper::getTree(),
        ];
		return view('admin.main', $data);
	}
    public function uploadImage(Request $request)
    {
        $file = $request->file('fileToUpload');

        $image_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();

        $file->move('./images/staticPage/', $image_name);

        $url_img = '/images/staticPage/' . $image_name;
        return $url_img;
    }
}
