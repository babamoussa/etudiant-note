<?php

namespace App\Models;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable =[
        "nom",
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
