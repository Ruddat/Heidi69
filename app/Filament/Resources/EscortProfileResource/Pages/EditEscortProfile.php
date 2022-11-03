<?php

namespace App\Filament\Resources\EscortProfileResource\Pages;

use App\Filament\Resources\EscortProfileResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEscortProfile extends EditRecord
{
    protected static string $resource = EscortProfileResource::class;

    protected function afterSave(): void
    {
        // Runs after the form fields are saved to the database.
        $this->fillForm();


    }

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
