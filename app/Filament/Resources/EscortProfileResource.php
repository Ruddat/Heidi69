<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\EscortType;
use App\Models\EscortBrust;
use App\Models\EscortHaare;
use App\Models\EscortBizarr;
use Filament\Resources\Form;
use App\Models\EscortMassage;
use App\Models\EscortProfile;
use App\Models\EscortVerkehr;
use Filament\Resources\Table;
use App\Models\EscortPiercing;
use App\Models\EscortSprachen;
use App\Models\EscortAllgemein;
use App\Models\EscortHautfarbe;
use App\Models\EscortSonstiges;
use App\Models\EscortAugenfarbe;
use Filament\Resources\Resource;
use App\Models\EscortServicefuer;
use App\Models\EscortFetischBasic;
use App\Models\EscortServiceBasic;
use App\Models\EscortIntimbeharung;
use App\Models\EscortServiceDetail;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Livewire\TemporaryUploadedFile;
use App\Models\EscortFetischBiszarr;
use Filament\Forms\Components\Radio;
use App\Models\EscortPersoenlichkeit;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput\Mask;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EscortProfileResource\Pages;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\EscortProfileResource\RelationManagers;

class EscortProfileResource extends Resource
{
    protected static ?string $model = EscortProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Heading')
                ->columnSpan(12)
                ->tabs([
                    Tabs\Tab::make('Pers. Daten')

                        ->schema([
                            // ...
                            Grid::make([
                                'default' => 1,
                                'sm' => 2,
                                'md' => 3,
                                'lg' => 4,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                                ->schema([
                                    // ...
                                    Fieldset::make('Daten bitte hier eintragen')
    ->schema([
        // ...
        Forms\Components\TextInput::make('kundenname')
        ->required()
        ->autofocus()
        ->placeholder('John Doe')
        ->maxLength(100),


    Forms\Components\TextInput::make('khk')
        ->maxLength(50),
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


    Radio::make('adresse_an_aus')
    ->label('Adresse darf nicht veröffentlicht werden')
    ->boolean()
    ->inline(),

Radio::make('wohnt_hier')
    ->label('Privatadresse (wohnt auch hier)')
    ->boolean()
    ->inline(),



    Forms\Components\TextInput::make('kuenstlername')
        ->maxLength(255),
    Forms\Components\TextInput::make('telefon')
        ->tel()
        ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
        ->maxLength(255),
    Forms\Components\TextInput::make('email')
        ->email()
        ->maxLength(255),
    Forms\Components\TextInput::make('zweite-email')
        ->email()
        ->maxLength(255),
    Forms\Components\TextInput::make('internetadresse')
        ->maxLength(255),

    ])
    ->columns(3),

    Fieldset::make('Label')
    ->schema([
        // ...
        Forms\Components\TextInput::make('kundenname')
        ->required()
        ->autofocus()
        ->placeholder('John Doe')
        ->maxLength(255),
        Forms\Components\TextInput::make('land')
        ->maxLength(255),
        Forms\Components\TextInput::make('khk')
        ->maxLength(255),
    ])
    ->columns(2),
    Card::make()
    ->schema([
        // ...
    ])

                                ])

                        ]),
                    Tabs\Tab::make('Label 2')
                        ->schema([
                            // ...
                        ]),
                    Tabs\Tab::make('Label 3')
                        ->schema([
                            // ...
                        ]),
                        Tabs\Tab::make('Label 4')
                        ->schema([

                            SpatieMediaLibraryFileUpload::make('fotos')
                            ->image()
                            ->collection('escortfotos')
                            ->multiple()
                            ->enableReordering()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('heidi-kaufmich-');
                            })
                            ->columnSpan(6),

                            SpatieMediaLibraryFileUpload::make('profibg')
                            ->image()
                            ->collection('escorthintergrund')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('heidi-kaufmich-');
                            })
                            ->columnSpan(6),

                        ])->columns(12),
                    ]),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kundenname')
                ->label('Kundenname')
                ->translateLabel()
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('Erstellt')
                ->dateTime()
                ->since(),

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

            ])->defaultSort('updated_at', 'desc')

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
