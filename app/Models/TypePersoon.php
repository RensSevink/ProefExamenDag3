<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePersoon extends Model
{
    use HasFactory;

    protected $table = 'type_persoons';

    protected $fillable = [
        'Naam',
    ];

    public function persoon()
    {
        return $this->belongsTo(Persoon::class, 'TypePersoonId');
    }
}
