<?php

namespace App\Models;

use App\Models\Sepatu;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function sepatu()
    {
        return $this->belongsToMany(Sepatu::class, 'sepatu_merks');
    }
}
