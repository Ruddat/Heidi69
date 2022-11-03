<?php

namespace Database\Seeders;

use App\Models\EscortBrust;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EscortBrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $EscortBrust = [

            "fest",
            "stehend",
            "Naturbrüste
            (keine Implantate)",
            "weich",
            "hängend",



           ];

          for ($item=0; $item < count($EscortBrust); $item++) {
          foreach ($EscortBrust as $state) {
          $state = new EscortBrust();
          $state->busen_merkmale = $EscortBrust[$item];
          $state->save();
          $item+=1;
      }
    }
}
}
