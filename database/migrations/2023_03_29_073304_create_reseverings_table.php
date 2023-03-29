<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reseverings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PersoonId')->constrained('persoons');
            $table->foreignId('OpeningstijdId')->constrained('openingstijds');
            $table->foreignId('TariefId')->constrained('tariefs');
            $table->foreignId('BaanId')->constrained('baans');
            $table->foreignId('PakketOptieId')->constrained('pakket_opties') ->nullable();
            $table->foreignId('ReseveringStatusId')->constrained('resevering_statuses');
            $table->integer('Reseveringsnummer');
            $table->date('Datum');
            $table->tinyInteger('AantalUren');
            $table->time('BeginTijd');
            $table->time('EindTijd');
            $table->tinyInteger('AantalVolwassenen');
            $table->tinyInteger('AantalKinderen') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseverings');
    }
};
