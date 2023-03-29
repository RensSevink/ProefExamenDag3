<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baan extends Model
{
    use HasFactory;

    protected $table = 'baans';

    protected $fillable = [
        'Nummer',
        'HeeftHek',
    ];

    public function reservering()
    {
        return $this->belongsTo(Reservering::class, 'BaanId');
    }
}
