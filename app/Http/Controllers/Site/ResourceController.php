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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $resource)
    {
 
        if (self::isAdmin() || $resource->is_public) {
            $data = [
                'document' => $resource,
                'sources' => $resource->sources,
            ];
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
