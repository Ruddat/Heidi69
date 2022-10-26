<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escort_profiles', function (Blueprint $table) {
            $table->id();
            // Daten
            $table->string('kundenname');
            $table->string('khk')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('land')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort')->nullable();
            $table->string('klingelname')->nullable();
            $table->string('stockwerk')->nullable();
            $table->string('eaid')->nullable();
            $table->boolean('adresse_an_aus')->nullable();
            $table->boolean('wohnt_hier')->nullable();
            $table->string('kuenstlername')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->string('zweite-email')->nullable();
            $table->string('internetadresse')->nullable();
            // Kontakt für Rückfragen, Bildrechte etc.
            $table->string('telefon_privat')->nullable();
            $table->string('email_privat')->nullable();
            $table->boolean('whatsapp_sms_privat')->nullable();
            // Fotos
            $table->boolean('gesicht_sichtbar')->nullable();
            $table->string('gesicht_unkentlich')->nullable();
            $table->string('tatu_entfernen')->nullable();
            $table->string('foto_retusche')->nullable();
            // Damit Sie im Internet besser gefunden werden, bitte Merkmale ausfüllen
            $table->unsignedTinyInteger('alter')->nullable();
            $table->json('persoenlichkeit')->nullable();
            $table->json('haare')->nullable();
            $table->string('bh_groesse')->nullable();
            $table->json('busen_merkmale')->nullable();
            $table->string('konfektion_groesse')->nullable();
            $table->string('koerper_groesse')->nullable();
            $table->string('koerper_gewicht')->nullable();
            $table->string('schuh_groesse')->nullable();
            $table->json('hautfarbe')->nullable();
            $table->json('augenfarbe')->nullable();
            $table->json('intimbehaarung')->nullable();
            $table->json('koerperschmuck')->nullable();
            $table->json('sonstiges')->nullable();
            $table->string('penislaenge')->nullable();
            $table->string('penisgrösse')->nullable();
            $table->string('herkunftsland')->nullable();
            $table->json('typ')->nullable();
            $table->json('sprachen')->nullable();
            //Wichtig! Ort und Zeit

            // Bitte geben Sie hier Ihren Service an
            $table->json('allg_service')->nullable();
            $table->json('service_fuer')->nullable();
            $table->json('verkehr')->nullable();
            $table->json('massage')->nullable();
            $table->json('service_detail')->nullable();
            $table->json('fetisch_bizar')->nullable();
            $table->json('bizar')->nullable();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escort_profiles');
    }
};