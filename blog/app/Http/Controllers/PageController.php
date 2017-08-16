<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        /* return('pages/welcome'); */
        return view('pages.welcome');
        
    }

    public function getAbout()
    {   
        $first = 'Dilek';
        $last = 'Uzulmez';

        $full = $first . " " . $last;
        $email = "dilekuzulmez@gmail.com";

        $data= [];
        $data['email'] = $email;
        $data['full'] = $full;

     /*   return view('pages.about')->with('fullname', $full); */
        return view('pages.about', compact('data'));
     
    }

    public function getContact()
    {   
        return view('pages.contact');
    }
}