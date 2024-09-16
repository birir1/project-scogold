<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        return view("frontend.index");
    }

    public function about(){
        return view("frontend.about");
    }

    public function service(){
        return view("frontend.service");
    }

    public function mountain(){
        return view("frontend.mountain");
    }

    public function ti(){
        return view("frontend.ti");
    }

    public function destinations(){
        return view("frontend.destinations");
    }

    public function visa(){
        return view("frontend.visa");
    }

    public function beachdestinations(){
        return view("frontend.beachdestinations");
    }

    public function ticket(){
        return view("frontend.Ticket");
    }

    public function bookings(){
        return view("frontend.bookings");
    }

    public function FAQs(){
        return view("frontend.FAQs");
    }

    public function testimonials(){
        return view("frontend.testimonials");
    }

    public function travelblog(){
        return view("frontend.travelblog");
    }

    public function tips(){
        return view("frontend.tips");
    }
}