<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Investicija;

class Investitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'firma',
        'godOsnivanja',
        'website',
    ];

    public function investicije()
    {
        return $this->hasMany(Investicija::class);
    }
}
