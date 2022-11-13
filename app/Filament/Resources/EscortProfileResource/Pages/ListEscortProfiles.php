<?php

namespace App\Filament\Resources\EscortProfileResource\Pages;

use App\Filament\Resources\EscortProfileResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEscortProfiles extends ListRecords
{
    protected static string $resource = EscortProfileResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
