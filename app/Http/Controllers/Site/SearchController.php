<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Category;

class SearchController extends Controller
{
    public function index(Request $request){
		/*$this->validate($request,[
            'keywords' => 'required',
        ]);*/
		$data = [
            'key' => $request->keywords,
        ];
        $orderArr = self::getOrder($request->order);

        $categories = Category::
				where('title_ru', 'like', '%' . $request->keywords . '%')
				->orWhere('title_en', 'like', '%' . $request->keywords . '%')->get();
				
		
		if(count($categories)>0){
			foreach ($categories as $index => $value) {
				if ($index == 0) {
					$result = $value->documents();
				}else{
					$result = $value->documents()->union($result);
				}
			}
			$result = $result->get();
			foreach ($result as $key => $value) {
				$addId[]= $value->id;
			}
		}else{
			$addId = [];
		}

        $data ['documents'] = Document::orderBy($orderArr[0], $orderArr[1])
        		->whereIn('id', $addId)
				->orWhere('title_ru', 'like', '%' . $request->keywords . '%')
				->orWhere('title_en', 'like', '%' . $request->keywords . '%')
				->paginate(20);
        return view( 'site.resource.search', $data );
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
