<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    
        protected $table ="administradores";
        protected $fillable =['name', 'email', 'password', 'password_confirmation'];
    
}
