<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'upload';
    protected $fillable = ['judul','kategori', 'ringkasan_berita', 'full_berita'];

    public function admin() 
    {
    	return $this->hasOne('App\Admin', 'App\User');
    }
}
