<?php

namespace App\Filament\Resources\EscortProfileResource\Widgets;

use App\Models\EscortProfile;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EscortProfileOverview extends BaseWidget
{
    protected function getCards(): array
    {

       // $us = Country::where('country_code', 'us')->withCount('EscortProfile')->first();

        return [

            Card::make('Alle Anzeigen', EscortProfile::all()->count()),
            Card::make('Bounce rate', '21%'),
         //   Card::make($us->name, 'Bounce rate', '21%'),
            Card::make('Average time on page', '3:12'),

        ];
    }
}
