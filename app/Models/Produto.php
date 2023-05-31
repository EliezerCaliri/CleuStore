<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table ="produtos";
    protected $fillable =['nome', 'foto', 'descricao', 'valor', 'categoria_id'];


    public function getSlugAttribute()
    {
        return $this->nome;
    }
}
