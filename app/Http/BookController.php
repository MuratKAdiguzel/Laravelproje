<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;


class BookController extends Controller
{

    public function index()
    {
        $books = book::all();

        return view('index', ['book' => $books]);
    }
    
 
    public function create(Request $request)
    {
        $name=$request->name;
        $author=$request->author;
        $image=$request->image;
        $isbnNO=$request->isbnNO;

        $destinationPath = 'public/images';
        $image = $request->image->getClientOriginalName();
        $path = $request->file('image')->storeAs($destinationPath, $image);

        book::create([
            "name"=>$name,
            "author"=>$author,
            "image"=>$image,
            "isbnNO"=>$isbnNO,
        ]);
         return view("create");
        
    }
    
    public function store(book $book,Request $request)
    {  
        $validated = $request->validate([
            'name' => 'max:60',
            'author' => 'max:60',
            'isbnNO' => 'max:20',
            'image' => 'max:999',
 
        ]);
        
    
            $book->update([ 
                "name"=>$request->name,
                "author"=>$request->author,
                "isbnNO"=>$request->isbnNO]);
            
                return redirect()->route('index');
           
    }
    public function edit(book $book)
    {
        $bookedit = book::find($book->id);
        return view('update', ['bookedit' => $bookedit]);
    }
  
    public function destroy(book $book)
    {
        $book->delete();
        
        $book=book::all();
        return view("index",["book"=>$book]);
    }

}
