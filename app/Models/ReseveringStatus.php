<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReseveringStatus extends Model
{
    use HasFactory;

    protected $table = 'resevering_statuses';

    protected $fillable = [
        'Naam',
    ];

    public function resevering()
    {
        return $this->belongsTo(Resevering::class, 'ReseveringStatusId');
    }
}
