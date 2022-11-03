<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EscortProfile>
 */
class EscortProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'kundenname' => $this->faker->name(),
            'land' => $this->faker->country(),
            'plz' => $this->faker->numerify('#####'),
            'ort' => $this->faker->city(),
            'klingelname' => $this->faker->name(),
            'stockwerk' => $this->faker->numerify('##'),
           // 'telefon' => $this->faker->phonenumber('################################'),
            'email' => $this->faker->email(),
            'zweite-email' => $this->faker->freeEmail(),
            'internetadresse' => $this->faker->url(),
            'beschreibung' => $this->faker->realText(400, 2),

        ];
    }
}

/*
            $table->string('kundenname');
            $table->string('khk')->nullable();
            $table->string('slug')->unique();
            $table->string('land')->nullable();
            $table->string('plz');
            $table->string('ort');
            $table->string('klingelname')->nullable();
            $table->string('stockwerk')->nullable();
            $table->string('eaid')->nullable();
            $table->bolean('adresse_an_aus');
            $table->bolean('wohnt_hier')->nullable();
            $table->string('kuenstlername')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->string('zweite-email')->nullable();
            $table->string('internetadresse')->nullable();
*/
