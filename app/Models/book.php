<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory; 
    protected $table="books";
    protected $fillable=["name","author","image","isbnNO","created_at","updated_at"];
}
