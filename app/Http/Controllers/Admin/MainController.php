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
            'latest_categories' => Category::orderBy('created_at', 'asc')->take(10)->get(),
            'latest_documents' => Document::orderBy('created_at', 'asc')->take(10)->get(),
            'tree' => TreeHelper::getTree(),
        ];
		return view('admin.main', $data);
	}
}
