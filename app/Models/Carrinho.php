<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $table ="produtos";
    protected $fillable =['id', 'name', 'price', 'quantity'];


}
