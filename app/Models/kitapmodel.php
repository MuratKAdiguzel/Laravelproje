<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kitapmodel extends Model
{
    use HasFactory; 
    protected $table="kitaplar";
    protected $fillable=["kitapadi","kitapyazari","kitapisbnnumarasi","created_at","updated_at"];
}
