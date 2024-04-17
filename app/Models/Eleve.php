<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function parentes()
    {
        return $this->belongsToMany(Parente::class)->withTimestamps();
    }

    public function notes()
    {
        return $this->hasMany(Examen::class);
    }
}
