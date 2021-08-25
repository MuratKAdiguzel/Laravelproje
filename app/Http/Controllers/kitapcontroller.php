<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kitapmodel;


class kitapcontroller extends Controller
{
    public function index()
    {
        return view("kitapmodel");
    }
    public function ekle()
    {
        kitaplar::create();
    }
    public function guncelle()
    {
        kitaplar::update();
    }
    public function sil()
    {
        kitaplar::delete();
    }
}
