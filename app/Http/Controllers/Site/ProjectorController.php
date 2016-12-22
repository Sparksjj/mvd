<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Projector;
use Lang;
use Video;

class ProjectorController extends Controller
{
    public function index()
    {
        $data = [
            'projectors'=> Projector::orderBy('title_' . Lang::getLocale(), 'asc')->paginate(15),
        ];
        return view('site.projector.index', $data);
    }

    public function show(Projector $projector)
    {
        $data = [
            'projector'=>$projector,
            'videos'=>$projector->videos()->orderBy('position', 'asc')->get(),
        ];
        return view('site.projector.show', $data);
    }
}
