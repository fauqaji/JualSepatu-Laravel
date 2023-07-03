<?php

namespace App\Models;

use App\Models\Merk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    public function merk()
    {
        return $this->belongsToMany(Merk::class, 'sepatu_merks');
    }
}
