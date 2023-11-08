<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $table = "consulta";

    protected $fillable = ['data',
        'hora',
        'tipo',
        'descricao',
        'animal_id',
    ];

    protected $casts = [
        "animal_id"=>"integer",
    ];

    public function animal(){
        return $this->belongsTo(Animal::class,
            'animal_id', 'id');
    }
}
