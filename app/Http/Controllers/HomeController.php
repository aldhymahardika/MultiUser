<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function berita()
    {
        $berita = Upload::all();
        return view('berita', ['berita' => $berita]);
    }
}
