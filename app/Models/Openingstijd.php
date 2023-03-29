<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Openingstijd extends Model
{
    use HasFactory;

    protected $table = 'openingstijds';

    protected $fillable = [
        'DagNaam',
        'BeginTijd',
        'EindTijd',
    ];

    public function reservering()
    {
        return $this->belongsTo(Reservering::class, 'OpeningstijdId');
    }
}
