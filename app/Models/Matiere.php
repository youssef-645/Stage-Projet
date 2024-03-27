<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function enseignantes()
    {
        return $this->belongsToMany(Enseignant::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class)->withPivot('enseignante_id');
    }

    public function groupes()
    {
        return $this->belongsToMany(Groupe::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
