<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = ['categorias'];


    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function topProdutos()
    {
        return $this->produtos()->orderBy('created_at')->limit(5);
    }
}
