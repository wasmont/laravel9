<?php

namespace Modules\Teste\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teste extends Model
{
    // use HasFactory;

    protected $table = 'teste';

    protected $fillable = ['id','nome'];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Teste\Database\factories\TesteFactory::new();
    // }
}
