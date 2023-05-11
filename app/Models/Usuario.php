<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Autenticatable;

class Usuario extends Autenticatable
{
    protected $table ="usuarios";
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'password_confirmation'
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
