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
    
    public function kitapduzenle(Kitapmodel $kitap,Request $request)
    {  
        $validated = $request->validate([
            'kitapadi' => 'max:60',
            'kitapyazari' => 'max:60',
            'kitapisbnnumarasi' => 'max:20',
            'kitapresmi' => 'max:999',
 
        ]);
        
    
            $kitap->update([ 
                "kitapadi"=>$request->kitapadi,
                "kitapyazari"=>$request->kitapyazari,
                "kitapisbnnumarasi"=>$request->kitapisbnnumarasi]);
         
           $kitap=kitapmodel::all();
           return view("kitaplar",["kitap"=>$kitap]);
    }

    public function sil($id)
    {
        Kitapmodel::where("id",$id)->delete();
        $kitap=kitapmodel::all();
        return view("kitaplar",["kitap"=>$kitap]);
    }
}
