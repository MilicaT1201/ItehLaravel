<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Investitor;
use App\Models\Projekat;

class Investicija extends Model
{
    use HasFactory;

    public function investitor()
    {
        return $this->belongsTo(Investitor::class);
    }

    public function projekat()
    {
        return $this->belongsTo(Projekat::class);
    }
}
