<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use App\Group;
use Auth;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (self::isAdmin()) {
            $data = [
                'documents' => Document::orderBy('created_at', 'desc')->paginate(20),
            ];
        }else{
            $data = [
                'documents' => Document::orderBy('created_at', 'desc')->where('is_public', true)->paginate(20),
            ];
        }
        return view( 'site.resource.index', $data );
    }

    public function show(Document $resource)
    {
        $size = explode('x', $resource->size);
        $resource->get_data = substr($resource->get_data, 0, 10);
        $resource->fzk_data = substr($resource->fzk_data, 0, 10);
        if (self::isAdmin() || $resource->is_public) {
            $data = [
                'document' => $resource,
                'join_documents' => $resource->join_documents,
                'sources' => $resource->sources,
                'height' => 0,
                'width' => 0,
                'length' => 0,
                'created_at' => substr(strval($resource->created_at), 0, 10),
            ];
            
            if ($resource->size) {
                $data['height'] = $size[0];
                $data['width'] = $size[1];
                $data['length'] = $size[2];
            }
        }else{
            return view('site.noSuccess');
        }
        return view('site.resource.show', $data );
    }
    #private function
    private function isAdmin(){
        if (Auth::user()) {
            $haveGroups = Auth::user()->groups;
        }else{
            $haveGroups = [Group::where('id', 1)->first()];
        }
        
        $havSucsess = false;

        foreach ($haveGroups as $value) {
            if ($value->id == 2) {
                $havSucsess = true;
            }
        }
        return $havSucsess;
    }
}
