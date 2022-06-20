<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'country',
        'birth_date',
    ];

    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
