<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        return view('pages/welcome');
    }


    public function getAbout(){
        $first = 'Christian Neil';
        $last = 'Tude';

        $fullname = $first . " " . $last;
        $email = 'tudechristian3@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages/about')->withData($data);
    }
    public function getContact(){
        return view('pages/contact');
    }
    public function getShow(){
        return view('posts/show');
    }

}



?>