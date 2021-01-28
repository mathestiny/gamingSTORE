<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenue chez GamingSTORE';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function products(){
        $title = 'A propos de nous';
        return view('pages.products')->with('title', $title);
    }
    public function about(){
        $title = 'A propos de nous';
        return view('pages.about')->with('title', $title);
    }
    public function profil(){
        $title = 'A propos de nous';
        return view('pages.profil')->with('title', $title);
    }
    
    public function games(){
        $title = 'A propos de nous';
        return view('pages.games')->with('title', $title);
    }
    
}
