<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = "animal";

    protected $fillable = ['nome',
        'peso',
        'porte',
        'raca',
        'tutor_id',
    ];

    protected $casts = [
        "tutor_id"=>"integer"
    ];

    public function tutor(){
        return $this->belongsTo(Tutor::class,
            'tutor_id', 'id');
    }
}
