<?php

namespace App\Filament\Resources;

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
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Livewire\TemporaryUploadedFile;
use App\Models\EscortFetischBiszarr;
use Filament\Forms\Components\Radio;
use App\Models\EscortPersoenlichkeit;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Forms\Components\CheckboxList;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EscortProfileResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class EscortProfileResource extends Resource
{
    protected static ?string $model = EscortProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Tabs::make('Heading')->columnSpan(12)

                ->tabs([
                    Tabs\Tab::make('Kundendaten')

                        ->schema([
                            // ...

                            Grid::make([
                                'default' => 1,
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                                ->schema([

                                    // ...

                                    TextInput::make('kundenname')
                                    ->columnSpan([
                                        'sm' => 2,
                                        'xl' => 6,
                                        '2xl' => 7,
                                    ])
                                    ->label('Kundenname')
                                    ->required()
                                    //->autofocus()
                                    ->maxLength(255),


                            TextInput::make('khk')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 4,
                                '2xl' => 5,
                            ])
                            ->label('KHK (wenn vorhanden')
                            ->maxLength(255),

                            TextInput::make('strasse')
                            ->columnSpan([
                                'sm' => 4,
                                'xl' => 10,
                                '2xl' => 10,
                            ])
                            ->label('Strasse')
                            ->maxLength(255),

                            TextInput::make('land')
                            ->columnSpan([
                                'sm' => 4,
                                'xl' => 4,
                                '2xl' => 4,
                            ])
                            ->label('Land (D,A,CH...)')
                            ->required()
                            ->maxLength(255),


                            TextInput::make('plz')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 4,
                            ])
                            ->label('PLZ')
                            ->required()
                            ->maxLength(255),

                            TextInput::make('ort')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 4,
                            ])
                            ->label('Ort')
                            ->required()
                            ->maxLength(255),


                                    ]),




                            TextInput::make('klingelname')
                            ->label('Klingelname')
                            ->maxLength(255),

                            TextInput::make('stockwerk')
                            ->label('Stockwerk, Hinterhof etc.')
                            ->maxLength(100),

                            TextInput::make('kuenstlername')
                            ->label('Künstlername / Modell (erscheint in den Online-Anzeigen)')
                            ->maxLength(255),

                            TextInput::make('telefon')
                            ->label('Telefon (erscheint in den Online-Anzeigen)')
                            ->tel()
                            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                            ->maxLength(255),

                            Radio::make('wohnt_hier')
                            ->label('WhatsApp möglich')
                            ->boolean()
                            ->inline(),

                            Radio::make('wohnt_hier')
                            ->label('Gäste-SMS möglich')
                            ->boolean()
                            ->inline(),

                            TextInput::make('email')
                            ->label('E-Mail (erscheint anonym in den Online-Anzeigen)')
                            ->email()
                            ->maxLength(255),

                            TextInput::make('telefon')
                            ->label('2. Telefon z.B. Infoband (ers. in den Online-Anzeigen)')
                            ->tel()
                            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                            ->maxLength(255),

                            TextInput::make('internetadresse')
                            ->label('Internet-Adresse')
                            ->maxLength(255),

                            TextInput::make('eaid')
                            ->label('EAID (wenn vorhanden)')
                            ->maxLength(255),

                            Radio::make('adresse_an_aus')
                            ->label('Adresse darf nicht veröffentlicht werden')
                            ->boolean()
                            ->inline(),

                            Radio::make('wohnt_hier')
                            ->label('Privatadresse (wohnt auch hier)')
                            ->boolean()
                            ->inline(),

                            // Intern muss Card angelegt werden

                            TextInput::make('telefon_privat')
                            ->label('Telefon /Fax (privat)')
                            ->tel()
                            ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                            ->maxLength(255),

                            TextInput::make('email_privat')
                            ->label('E-Mail (privat)')
                            ->email()
                            ->maxLength(255),

                            Radio::make('whatsapp_sms_privat')
                            ->label('WhatsApp / SMS')
                            ->boolean()
                            ->inline(),

                        ]),


                    Tabs\Tab::make('Eigenschaften')
                        ->schema([
                            // ...
                            TextInput::make('alter')
                            ->maxLength(2),

                            Select::make('persoenlichkeit')
                            ->label('Persönlichleit')
                            ->options(EscortPersoenlichkeit::all()->pluck('persoenlichkeit', 'persoenlichkeit'))
                            ->searchable(),

                            CheckboxList::make('haare')
                            ->label('Haare')
                            ->options(EscortHaare::all()->pluck('haare', 'haare')),

                            // Busen Körper
                            TextInput::make('bh_groesse')
                            ->maxLength(5),

                            Select::make('busen_merkmale')
                            ->label('Busen / Körper')
                            ->options(EscortBrust::all()->pluck('busen_merkmale', 'busen_merkmale'))
                            ->searchable(),

                            TextInput::make('konfektion_groesse')
                            ->maxLength(5),
                            TextInput::make('koerper_groesse')
                            ->maxLength(5),
                            TextInput::make('koerper_gewicht')
                            ->maxLength(5),
                            TextInput::make('schuh_groesse')
                            ->maxLength(5),

                            Select::make('hautfarbe')
                            ->label('Hautfarbe')
                            ->options(EscortHautfarbe::all()->pluck('hautfarbe', 'hautfarbe'))
                            ->searchable(),

                            Select::make('augenfarbe')
                            ->label('Augenfarbe')
                            ->options(EscortAugenfarbe::all()->pluck('augenfarbe', 'augenfarbe'))
                            ->searchable(),

                            Select::make('intimbehaarung')
                            ->label('Körper- und Intimbehaarung')
                            ->options(EscortIntimbeharung::all()->pluck('intimbehaarung', 'intimbehaarung'))
                            ->searchable(),

                            CheckboxList::make('koerperschmuck')
                            ->label('Körperschmuck')
                            ->options(EscortPiercing::all()->pluck('piercing', 'piercing')),

                            CheckboxList::make('sonstiges')
                            ->label('Sonstiges')
                            ->options(EscortSonstiges::all()->pluck('sonstiges', 'sonstiges')),

                            TextInput::make('penislaenge')
                            ->maxLength(255),
                            TextInput::make('penisgrösse')
                            ->maxLength(255),
                            TextInput::make('herkunftsland')
                            ->maxLength(255),

                            Select::make('typ')
                            ->label('Typ')
                            ->options(EscortType::all()->pluck('typ', 'typ'))
                            ->searchable(),

                            CheckboxList::make('sprachen')
                            ->label('Sprachen')
                            ->options(EscortSprachen::all()->pluck('sprachen', 'sprachen')),


                        ]),

                    Tabs\Tab::make('Service im Detail')
                        ->schema([
                            // ...

                            CheckboxList::make('allg_service')
                            ->label('Service allgemein')
                            ->options(EscortAllgemein::all()->pluck('allg_service', 'allg_service')),

                            CheckboxList::make('service_fuer')
                            ->label('Service für')
                            ->options(EscortServicefuer::all()->pluck('service_fuer', 'service_fuer')),

                            CheckboxList::make('verkehr')
                            ->label('Verkehr')
                            ->options(EscortVerkehr::all()->pluck('verkehr', 'verkehr')),

                            TextInput::make('gv_preis')
                            ->label('GV ab ca.')
                            ->mask(fn (TextInput\Mask $mask) => $mask->money(prefix: '$', thousandsSeparator: ',', decimalPlaces: 2)),

                            CheckboxList::make('massage')
                            ->label('Massage')
                            ->options(EscortMassage::all()->pluck('massage', 'massage')),

                            CheckboxList::make('service_detail')
                            ->label('Service im Detail')
                            ->options(EscortServiceDetail::all()->pluck('service_detail', 'service_detail')),

                            CheckboxList::make('service_basic')
                            ->label('Service Basic')
                            ->options(EscortServiceBasic::all()->pluck('service_basic', 'service_basic')),


                            CheckboxList::make('fetisch_bizar')
                            ->label('Fetisch- und Bizarrspielchen')
                            ->options(EscortFetischBiszarr::all()->pluck('fetisch_bizar', 'fetisch_bizar')),

                            CheckboxList::make('fetisch_basic')
                            ->label('Fetisch- und Bizarrspielchen Basic')
                            ->options(EscortFetischBasic::all()->pluck('fetisch_basic', 'fetisch_basic')),

                            CheckboxList::make('bizarr')
                            ->label('Fetisch- und Bizarrspielchen Basic')
                            ->options(EscortBizarr::all()->pluck('bizarr', 'bizarr')),




                        ]),

                    Tabs\Tab::make('Fotos')
                        ->schema([
                            // ...
                            Grid::make([
                                'default' => 1,
                                'sm' => 3,
                                'xl' => 6,
                                '2xl' => 8,
                            ])
                                ->schema([

                                    // ...

                            SpatieMediaLibraryFileUpload::make('fotos')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 4,
                            ])
                            ->image()
                            ->collection('escortfotos')
                            ->multiple()
                            ->enableReordering()
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('heidi-kaufmich-');
                            }),


                            SpatieMediaLibraryFileUpload::make('profibg')
                            ->columnSpan([
                                'sm' => 2,
                                'xl' => 3,
                                '2xl' => 4,
                            ])
                            ->image()
                            ->collection('escorthintergrund')
                            ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                                return (string) str($file->getClientOriginalName())->prepend('heidi-kaufmich-');
                            }),

                                ]),

                        ]),

                        Tabs\Tab::make('Intern')
                        ->schema([
                            // ...
                        ]),

                ])




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kundenname')
                ->label('Kundenname')
                ->translateLabel()
                ->sortable()
                ->searchable(),

                Tables\Columns\TextColumn::make('updated_at')
                ->label('Bearbeitet')
                ->dateTime()
                ->since(),

                SpatieMediaLibraryImageColumn::make('escortfotos')
                ->collection('escortfotos')
                ->height(60)
                ->width(80)
                ->sortable(),



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
