<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kitapmodel;


class kitapcontroller extends Controller
{

    public function index()
    {
        $books = kitapmodel::all();

        return view('kitaplar', ['book' => $books]);
    }
    
 
    public function ekle(Request $request)
    {
        $kitapadi=$request->kitapadi;
        $kitapyazari=$request->kitapyazari;
        $kitapresmi=$request->kitapresmi;
        $kitapisbnnumarasi=$request->kitapisbnnumarasi;

        $destinationPath = 'public/images';
        $image = $request->kitapresmi->getClientOriginalName();
        $path = $request->file('kitapresmi')->storeAs($destinationPath, $image);

        kitapmodel::create([
            "kitapadi"=>$kitapadi,
            "kitapyazari"=>$kitapyazari,
            "kitapresmi"=>$image,
            "kitapisbnnumarasi"=>$kitapisbnnumarasi,
        ]);
         return view("welcome");
        
    }
    
    public function store(Kitapmodel $book,Request $request)
    {  
        $validated = $request->validate([
            'kitapadi' => 'max:60',
            'kitapyazari' => 'max:60',
            'kitapisbnnumarasi' => 'max:20',
            'kitapresmi' => 'max:999',
 
        ]);
        
    
            $book->update([ 
                "kitapadi"=>$request->kitapadi,
                "kitapyazari"=>$request->kitapyazari,
                "kitapisbnnumarasi"=>$request->kitapisbnnumarasi]);
            
                return redirect()->route('index');
           
    }
    public function edit(kitapmodel $book)
    {
        $bookedit = kitapmodel::find($book->id);
        return view('duzenlekitaplar', ['bookedit' => $bookedit]);
    }
  
    public function sil($id)
    {
        Kitapmodel::where("id",$id)->delete();
        $book=kitapmodel::all();
        return view("kitaplar",["book"=>$book]);
    }
}
