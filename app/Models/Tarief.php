<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarief extends Model
{
    use HasFactory;

    protected $table = 'tariefs';

    protected $fillable = [
        'Naam',
        'Prijs',
    ];

    public function reservering()
    {
        return $this->belongsTo(Reservering::class, 'TariefId');
    }
}
