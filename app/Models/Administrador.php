<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Autenticatable;

class Administrador extends Autenticatable
{
    protected $table ="administradores";
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

    public function getNomeCompletoAttribute()
    {
        return $this->name;
    }
}
