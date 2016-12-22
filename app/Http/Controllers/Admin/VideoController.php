<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projector;
use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($projector)
    {
        $projector = Projector::where('id', $projector)->first();
        $data = [
            'videos' => $projector->videos()->orderBy('position', 'desc')->paginate(15),
            'projector' => $projector,
        ];
        return view('admin.projector.video.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($projector)
    {
        $projector = Projector::where('id', $projector)->first();
        $data = [
            'videos' => $projector->videos()->orderBy('position', 'asc')->get(),
            'projector' => $projector,
        ];
        return view('admin.projector.video.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $projector)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
            'video' => 'required',        
            ]);

        $projector = Projector::where('id', $projector)->first();
        $all_videos = $projector->videos;

        $v = new Video();

        $file = $request->file('video');

        $image_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
        $file->move('./documents/video/projector/', $image_name);
        $v->path = '/documents/video/projector/'.$image_name;

        $v->title_ru = $request->title_ru;
        $v->title_en = $request->title_en;

        $v->position = $request->position;

        if ($request->position <= count($all_videos)) {
            $videos = $projector->videos()->orderBy('position', 'asc')->where('position', '>', $request->position-1)->get();
            foreach ($videos as $key => $v) {
                $v->position = $request->position+1+$key;
                $v->save();
            }
        }

        Projector::where('id', $projector->id)->first()->videos()->save($v);

        return redirect(route('projector.video.index', $projector));
    }

    public function edit($projector, Video $video)
    {

        $projector = Projector::where('id', $projector)->first();

        $data = [
            'video' => $video,
            'videos' => $projector->videos()->orderBy('position', 'asc')->get(),
            'projector' => $projector,
        ];
        
        return view('admin.projector.video.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $projector, Video $video)
    {
        $this->validate($request,[
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
            'position' => 'required',
        ]);
        $projector = Projector::where('id', $projector)->first();
        $video->title_ru = $request->title_ru;
        $video->title_en = $request->title_en;

        if ($request->position < $video->position) {
            $videos = $projector->videos()->orderBy('position', 'asc')->whereBetween('position', [$request->position, $video->position])->get();
            foreach ($videos as $key => $v) {
                $v->position = $v->position+1;
                $v->save();
            }
        }else if($request->position > $video->position){
            $videos = $projector->videos()->orderBy('position', 'asc')->whereBetween('position', [$video->position, $request->position])->get();
            foreach ($videos as $key => $v) {
                $v->position = $v->position-1;
                $v->save();
            }            
        }

        $file = $request->file('video');

        if ($file) {
            $image_name = md5($file->getClientOriginalName() . rand(0, 9999)) . '.' . $file->getClientOriginalExtension();
            $file->move('./documents/video/projector/', $image_name);
            $video->path = '/documents/video/projector/'.$image_name;
        }

        $video->position = $request->position;
        $projector->videos()->save($video);

        return redirect(route('projector.video.index', $projector));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($projector, Video $video)
    {
        $projector = Projector::where('id', $projector)->first();
        $all_videos = $projector->videos;

        if ($video->position < count($all_videos)) {
            $videos = $projector->videos()->orderBy('position', 'asc')->whereBetween('position', [$video->position, count($all_videos)])->get();
            foreach ($videos as $key => $v) {
                $v->position = $v->position-1;
                $v->save();
            }
        }

        $video->delete();

        return redirect(route('projector.video.index', $projector));
    }
}
