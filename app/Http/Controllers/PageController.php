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

    public function tentang_blog()
    {
        return view("tentang_blog", [
            "title" => "Tentang Blog",
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

    public function tentang()
    {
        return view("tentang", [
            "title" => "Tentang",
        ]);
    }

    public function login()
    {
        return view("login", [
            "title" => "Login",
        ]);
    }
}
