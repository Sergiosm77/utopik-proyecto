<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
    ];

    public function experiencia()
    {
        return $this->hasMany(Experiencia::class);
    }
}
