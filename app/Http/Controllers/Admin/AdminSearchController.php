<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Category;
class AdminSearchController extends Controller
{
	public function search(Request $request){
		$data = [
            'tree' => TreeHelper::getTree(),
        ];
        $orderArr = self::getOrder($request->order);
        switch (variable) {
        	case 'value':
        		# code...
        		break;
        	
        	default:
        		# code...
        		break;
        }
		if ($request->keyword ) {
			switch ($request->searchFor) {
				case 'documents':
					$data['results'] = Document::orderBy($orderArr[0], $orderArr[1])
					->where('title_ru', 'like', '%' . $request->keywords . '%')
					->orWhere('title_en', 'like', '%' . $request->keywords . '%')
					->paginate(15);
					break;
				case 'category':
					
					$data['results'] = Category::orderBy($orderArr[0], $orderArr[1])
					->where('title_ru', 'like', '%' . $request->keywords . '%')
					->orWhere('title_en', 'like', '%' . $request->keywords . '%')
					->paginate(15);

					break;

				default:
	        		# code...
	        		break;
			}
		}
		return ('admin.search');
	}	

	#private function
	private function getOrder($order){
		$field = 'created_at';
		$direction = 'desc';

		if ($order) {
			$orderArr = explode(":", $order);

			switch ($orderArr[0]) {
				case 'popularity':
					$field = 'views';
				break;
			}

			if ($orderArr[1] == 'asc') {
				$direction = 'asc';
			}

		}

		return [$field, $direction];
	}
}
