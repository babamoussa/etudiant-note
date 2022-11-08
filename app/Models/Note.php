<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable =[
        "interro1",
        "interro2",
        "devoir",
        "matiere_id",
    ];

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
