<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home", [
            "title" => "Beranda",
        ]);
    }

    public function blog()
    {
        return view("blog", [
            "title" => "Blog",
        ]);
    }

    public function berita()
    {
        return view("berita", [
            "title" => "Berita",
        ]);
    }

    public function pendaftaran()
    {
        return view("pendaftaran", [
            "title" => "Pendaftaran",
        ]);
    }

    public function prosedur()
    {
        return view("prosedur", [
            "title" => "Prosedur",
        ]);
    }
}
