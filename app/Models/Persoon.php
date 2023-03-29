<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persoon extends Model
{
    use HasFactory;

    protected $table = 'persoons';

    protected $fillable = [
        'TypePersoonId',
        'Voornaam',
        'Tussenvoegsel',
        'Achternaam',
        'Roepnaam',
        'IsVolwassen',
    ];

    public function reservering()
    {
        return $this->belongsTo(Reservering::class, 'PersoonId');
    }

    public function typePersoon()
    {
        return $this->hasOne(TypePersoon::class, 'TypePersoonId');
    }
}
