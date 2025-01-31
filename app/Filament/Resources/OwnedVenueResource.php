<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OwnedVenueResource\Pages;
use App\Filament\Resources\OwnedVenueResource\RelationManagers;
use App\Models\OwnedVenue;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use Schmeits\FilamentCharacterCounter\Forms\Components\Textarea;

class OwnedVenueResource extends Resource
{
    protected static ?string $model = OwnedVenue::class;

    protected static ?string $navigationIcon = 'far-building';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                    'md' => 2
                ])
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->placeholder('Venue name')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, $set) {
                                $set('slug', Str::slug($state));
                            })
                            ->required(),
                        TextInput::make('slug')
                            ->placeholder('venue-name')
                            ->disabled(),
                        FileUpload::make('logo_url')
                            ->label('Logo')
                            ->helperText(new HtmlString('Max size: 1024KB. To reduce file size, use <strong><a href="https://squoosh.app/" target="_blank">Squoosh</a>.</strong>'))
                            ->image()
                            ->imageEditor()
                            ->maxSize(1024)
                            ->acceptedFileTypes(['image/png'])
                            ->directory(function (callable $get): string {
                                return 'venue/' . $get('slug');
                            })
                            ->required(),
                        FileUpload::make('jumbotron_url')
                            ->label('Jumbotron Image')
                            ->helperText(new HtmlString('Max size: 1024KB. To reduce file size, use <strong><a href="https://squoosh.app/" target="_blank">Squoosh</a>.</strong>'))
                            ->image()
                            ->imageEditor()
                            ->maxSize(1024)
                            ->directory(function (callable $get): string {
                                return 'venue/' . $get('slug');
                            })
                            ->required(),
                        Textarea::make('overview_text')
                            ->label('Venue Overview')
                            ->placeholder('Venue overview text')
                            ->rows(5)
                            ->maxLength(200)
                            ->characterLimit(200)
                            ->required(),
                        FileUpload::make('overview_image_url')
                            ->label('Overview Image')
                            ->helperText(new HtmlString('Max size: 1024KB. To reduce file size, use <strong><a href="https://squoosh.app/" target="_blank">Squoosh</a>.</strong>'))
                            ->image()
                            ->imageEditor()
                            ->maxSize(1024)
                            ->directory(function (callable $get): string {
                                return 'venue/' . $get('slug');
                            })
                            ->required(),
                        FileUpload::make('galleries')
                            ->columnSpanFull()
                            ->reorderable()
                            ->helperText(new HtmlString('Max size for each file: 1024KB. To reduce file size, use <strong><a href="https://squoosh.app/" target="_blank">Squoosh</a>.</strong>'))
                            ->multiple()
                            ->panelLayout('grid')
                            ->maxSize(1024)
                            ->directory(function (callable $get): string {
                                return 'venue/' . $get('slug') . '/gallery';
                            })
                            ->required(),
                        TextInput::make('monthly_customer')
                            ->label('Monthly Customer')
                            ->placeholder('Number Monthly Customer')
                            ->helperText('Number Monthly Customer')
                            ->required(),
                        TextInput::make('daily_revenue')
                            ->label('Daily Revenue')
                            ->placeholder('Nominal Daily Revenue (Million)')
                            ->helperText('Daily Revenue Nominal (in Million)')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                ImageColumn::make('logo_url')
                    ->label('Logo')
                    ->height(120)
                    ->extraAttributes(['class' => 'logo-background']),
                ImageColumn::make('overview_image_url')
                    ->label('Overview Image')
                    ->height(150),
                ImageColumn::make('jumbotron_url')
                    ->label('Jumbotron')
                    ->height(150),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListOwnedVenues::route('/'),
            'create' => Pages\CreateOwnedVenue::route('/create'),
            'edit' => Pages\EditOwnedVenue::route('/{record}/edit'),
        ];
    }
}
