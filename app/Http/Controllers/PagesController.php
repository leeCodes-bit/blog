<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title = 'Welcome!!!';
        return view('pages.home')->with('title', $title);
    }
    public function blog(){
        $data =  array(
            'title' => 'Blog',
            'services' => ['web design', 'photography', 'SEO']
        );
        return view('pages.blog') ->with($data);
    }
    public function login(){
        return view('pages.login');
    }
    public function signup(){
        return view('pages.signup');
    }
    public function contact(){
        return view('pages.contact');
    }
}
