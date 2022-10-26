<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\EscortProfile;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\EscortPersoenlichkeit;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EscortProfileResource\Pages;
use App\Filament\Resources\EscortProfileResource\RelationManagers;
use App\Models\EscortAugenfarbe;
use App\Models\EscortBrust;
use App\Models\EscortHaare;
use App\Models\EscortHautfarbe;
use App\Models\EscortIntimbeharung;
use Filament\Forms\Components\CheckboxList;

class EscortProfileResource extends Resource
{
    protected static ?string $model = EscortProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kundenname')

                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('khk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->maxLength(255),
                Forms\Components\TextInput::make('land')
                    ->maxLength(255),
                Forms\Components\TextInput::make('plz')
                    ->maxLength(255),
                Forms\Components\TextInput::make('ort')
                    ->maxLength(255),
                Forms\Components\TextInput::make('klingelname')
                    ->maxLength(255),
                Forms\Components\TextInput::make('stockwerk')
                    ->maxLength(255),
                Forms\Components\TextInput::make('eaid')
                    ->maxLength(255),
                Forms\Components\Toggle::make('adresse_an_aus'),
                Forms\Components\Toggle::make('wohnt_hier'),
                Forms\Components\TextInput::make('kuenstlername')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefon')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('zweite-email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('internetadresse')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefon_privat')

                    ->maxLength(255),
                Forms\Components\TextInput::make('email_privat')
                    ->email()
                    ->maxLength(255),
                Forms\Components\Toggle::make('whatsapp_sms_privat'),
                Forms\Components\Toggle::make('gesicht_sichtbar'),
                Forms\Components\TextInput::make('gesicht_unkentlich')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tatu_entfernen')
                    ->maxLength(255),
                Forms\Components\TextInput::make('foto_retusche')
                    ->maxLength(255),
                Forms\Components\Toggle::make('alter'),
                Forms\Components\TextInput::make('persoenlichkeit'),

                Select::make('persoenlichkeit')
                ->label('Persönlichleit')
                ->options(EscortPersoenlichkeit::all()->pluck('persoenlichkeit', 'persoenlichkeit'))
                ->searchable(),

                CheckboxList::make('haare')
                ->label('Haare')
                ->options(EscortHaare::all()->pluck('haare', 'haare')),

                Forms\Components\TextInput::make('bh_groesse')
                    ->maxLength(255),

                Select::make('busen_merkmale')
                ->label('Busen / Körper')
                ->options(EscortBrust::all()->pluck('busen_merkmale', 'busen_merkmale'))
                ->searchable(),

                Forms\Components\TextInput::make('konfektion_groesse')
                    ->maxLength(255),
                Forms\Components\TextInput::make('koerper_groesse')
                    ->maxLength(255),
                Forms\Components\TextInput::make('koerper_gewicht')
                    ->maxLength(255),
                Forms\Components\TextInput::make('schuh_groesse')
                    ->maxLength(255),

                Select::make('hautfarbe')
                ->label('Hautfarbe')
                ->options(EscortHautfarbe::all()->pluck('hautfarbe', 'hautfarbe'))
                ->searchable(),


                Select::make('augenfarbe')
                ->label('Augenfarbe')
                ->options(EscortAugenfarbe::all()->pluck('augenfarbe', 'augenfarbe'))
                ->searchable(),

                Forms\Components\TextInput::make('intimbehaarung'),

                Select::make('intimbehaarung')
                ->label('Körper- und Intimbehaarung')
                ->options(EscortIntimbeharung::all()->pluck('intimbehaarung', 'intimbehaarung'))
                ->searchable(),


                Forms\Components\TextInput::make('koerperschmuck'),
                Forms\Components\TextInput::make('sonstiges'),
                Forms\Components\TextInput::make('penislaenge')
                    ->maxLength(255),
                Forms\Components\TextInput::make('penisgrösse')
                    ->maxLength(255),
                Forms\Components\TextInput::make('herkunftsland')
                    ->maxLength(255),
                Forms\Components\TextInput::make('typ'),
                Forms\Components\TextInput::make('sprachen'),
                Forms\Components\TextInput::make('allg_service'),
                Forms\Components\TextInput::make('service_fuer'),
                Forms\Components\TextInput::make('verkehr'),
                Forms\Components\TextInput::make('massage'),
                Forms\Components\TextInput::make('service_detail'),
                Forms\Components\TextInput::make('fetisch_bizar'),
                Forms\Components\TextInput::make('bizar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kundenname')->searchable(),
                Tables\Columns\TextColumn::make('khk'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('land'),
                Tables\Columns\TextColumn::make('plz'),
                Tables\Columns\TextColumn::make('ort'),
                Tables\Columns\TextColumn::make('klingelname'),
                Tables\Columns\TextColumn::make('stockwerk'),
                Tables\Columns\TextColumn::make('eaid'),
                Tables\Columns\IconColumn::make('adresse_an_aus')
                    ->boolean(),
                Tables\Columns\IconColumn::make('wohnt_hier')
                    ->boolean(),
                Tables\Columns\TextColumn::make('kuenstlername'),
                Tables\Columns\TextColumn::make('telefon'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('zweite-email'),
                Tables\Columns\TextColumn::make('internetadresse'),
                Tables\Columns\TextColumn::make('telefon_privat'),
                Tables\Columns\TextColumn::make('email_privat'),
                Tables\Columns\IconColumn::make('whatsapp_sms_privat')
                    ->boolean(),
                Tables\Columns\IconColumn::make('gesicht_sichtbar')
                    ->boolean(),
                Tables\Columns\TextColumn::make('gesicht_unkentlich'),
                Tables\Columns\TextColumn::make('tatu_entfernen'),
                Tables\Columns\TextColumn::make('foto_retusche'),
                Tables\Columns\IconColumn::make('alter')
                    ->boolean(),
                Tables\Columns\TextColumn::make('persoenlichkeit'),
                Tables\Columns\TextColumn::make('haare'),
                Tables\Columns\TextColumn::make('bh_groesse'),
                Tables\Columns\TextColumn::make('busen_merkmale'),


                Tables\Columns\TextColumn::make('konfektion_groesse'),
                Tables\Columns\TextColumn::make('koerper_groesse'),
                Tables\Columns\TextColumn::make('koerper_gewicht'),
                Tables\Columns\TextColumn::make('schuh_groesse'),
                Tables\Columns\TextColumn::make('hautfarbe'),
                Tables\Columns\TextColumn::make('augenfarbe'),
                Tables\Columns\TextColumn::make('intimbehaarung'),
                Tables\Columns\TextColumn::make('koerperschmuck'),
                Tables\Columns\TextColumn::make('sonstiges'),
                Tables\Columns\TextColumn::make('penislaenge'),
                Tables\Columns\TextColumn::make('penisgrösse'),
                Tables\Columns\TextColumn::make('herkunftsland'),
                Tables\Columns\TextColumn::make('typ'),
                Tables\Columns\TextColumn::make('sprachen'),
                Tables\Columns\TextColumn::make('allg_service'),
                Tables\Columns\TextColumn::make('service_fuer'),
                Tables\Columns\TextColumn::make('verkehr'),
                Tables\Columns\TextColumn::make('massage'),
                Tables\Columns\TextColumn::make('service_detail'),
                Tables\Columns\TextColumn::make('fetisch_bizar'),
                Tables\Columns\TextColumn::make('bizar'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEscortProfiles::route('/'),
            'create' => Pages\CreateEscortProfile::route('/create'),
            'view' => Pages\ViewEscortProfile::route('/{record}'),
            'edit' => Pages\EditEscortProfile::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
