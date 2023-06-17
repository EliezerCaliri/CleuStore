<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Autenticatable;

class Usuario extends Autenticatable
{
    protected $table ="login";

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'number',
        'password'
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getNomeCompletoAttribute()
    {
        return $this->firstname;
    }
}
