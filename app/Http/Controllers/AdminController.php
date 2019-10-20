<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
     public function berita()
    {
        $berita = Upload::all();
        return view('berita', ['berita' => $berita]);
    }

    public function tambah(){
        return view('berita_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'kategori' => 'required',
            'ringkasan_berita' => 'required',
            'full_berita' => 'required'
        ]);
 
        Upload::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'ringkasan_berita' => $request->ringkasan_berita,
            'full_berita' =>$request->full_berita
        ]);
 
        return redirect('/berita');
    }    
}
