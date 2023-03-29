<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resevering extends Model
{
    use HasFactory;

    protected $table = 'reseverings';

    protected $fillable = [
        'PersoonId',
        'OpeningstijdId',
        'BaanId',
        'PakketOptieId',
        'ReserveringsStatusId',
        'Reseveringsnummer',
        'Datum',
        'AantalUren',
        'BeginTijd',
        'EindTijd',
        'AantalVolwassenen',
        'AantalKinderen',
    ];

    public function persoons()
    {
        return $this->hasOne(Persoon::class, 'id');
    }

    public function openingstijds()
    {
        return $this->hasOne(Openingstijd::class, 'id');
    }

    public function baans()
    {
        return $this->hasOne(Baan::class, 'id');
    }

    public function pakket_opties()
    {
        return $this->hasOne(PakketOptie::class, 'id');
    }

    public function resevering_status()
    {
        return $this->hasOne(ReseveringStatus::class, 'id');
    }
}
