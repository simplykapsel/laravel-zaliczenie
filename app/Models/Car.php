<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file_path',
        'marka',
        'model',
        'rok',
        'moc',
        'rodzaj',
        'skrzynia',
        'naped',
        'miejsca',
    ];
//Relacja z tablea User
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
