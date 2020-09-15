<?php


namespace App\Controllers;


class Controller
{
    public function page1(){
        $title = "page 1";
        view('page', compact('title'));
    }
    public function page2(){
        $title = "page 2";
        view('page', compact('title'));
    }
    public function page3(){
        $title = "page 3";
        view('page', compact('title'));
    }
}