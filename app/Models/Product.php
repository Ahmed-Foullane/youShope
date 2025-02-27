<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
       "name",
        "description",
        "quantity",
        "price",
        "image"
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
