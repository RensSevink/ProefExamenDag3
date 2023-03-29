<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PakketOptie extends Model
{
    use HasFactory;

    protected $table = 'pakket_opties';

    protected $fillable = [
        'Naam',
    ];

    public function resevering()
    {
        return $this->belongsTo(Resevering::class, 'PakketOptieId');
    }
}
