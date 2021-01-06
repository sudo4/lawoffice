<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hom;
use App\Models\Directory;
use App\Models\Contact;
use App\Models\Team;
use App\Models\about;
use App\Models\Galery;

class LawController extends Controller
{
    public function index(){
        $home = Hom::all();
        $galery = Galery::all();
        return view('index', compact('home', 'galery'));
    }
    public function about(){
        $about = About::all();
        return view('abouts', compact('about'));
    }
    
    public function directory(){
        $directory = Directory::all();
        return view('directories', compact('directory'));
    }

    public function team(){
        $team = Team::all();
        return view('teams', compact('team'));
    }

    public function gallery(){
        $galery = Galery::all();
        return view('galleries', compact('galery'));
    }
    public function contact(){
        $team = Team::all();
        return view('contacts', compact('team'));
    }
}
