<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parente extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'email', 'telephone'];

    public function eleves()
    {
        return $this->belongsToMany(Eleve::class)->withTimestamps();
    }
}
