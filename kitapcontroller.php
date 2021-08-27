<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kitapmodel;


class kitapcontroller extends Controller
{
    public function vericek()
    {
        $kitap=kitapmodel::all();
        return view("kitaplar",["kitap"=>$kitap]);
    }
    public function ekle(Request $request)
    {
        $kitapadi=$request->kitapadi;
        $kitapyazari=$request->kitapyazari;
        $kitapresmi=$request->kitapresmi;
        $kitapisbnnumarasi=$request->kitapisbnnumarasi;
        
        kitapmodel::create([
            "kitapadi"=>$kitapadi,
            "kitapyazari"=>$kitapyazari,
            "kitapresmi"=>$kitapresmi,
            "kitapisbnnumarasi"=>$kitapisbnnumarasi,
            
          
        ]);
         return view("welcome");
        
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
