<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use App\Tables\Columns\LinkButtonColumn;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
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
use Schmeits\FilamentCharacterCounter\Forms\Components\Textarea;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'fas-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                    'sm' => 2
                ])
                    ->schema([
                        TextInput::make('name')
                            ->label('Name')
                            ->placeholder('Client name')
                            ->required(),
                        TextInput::make('socmed_url')
                            ->label('Social Media')
                            ->url()
                            ->placeholder('Client social media URL')
                            ->helperText('e.g https://instagram.com/jaiamedia')
                            ->required(),
                        CheckboxList::make('segments')
                            ->relationship('segments', 'name')// 'name' adalah kolom yang ingin ditampilkan
                            ->required()
                            ->helperText('Check the option where the client segment is assigned.')
                            ->columnSpanFull(),
                        FileUpload::make('logo_url')
                            ->label('Logo')
                            ->helperText(new HtmlString('Max size: 1024KB. To reduce file size, use <strong><a href="https://squoosh.app/" target="_blank">Squoosh</a>.</strong>'))
                            ->image()
                            ->imageEditor()
                            ->required()
                            ->directory('client/logo')
                            ->maxSize(1024),
                        FileUpload::make('background_url')
                            ->label('Logo Background')
                            ->helperText(new HtmlString('Max size: 1024KB. To reduce file size, use <strong><a href="https://squoosh.app/" target="_blank">Squoosh</a>.</strong>'))
                            ->image()
                            ->imageEditor()
                            ->required()
                            ->directory('client/logo-background')
                            ->maxSize(1024),
                        Textarea::make('description')
                            ->label('Description')
                            ->placeholder('Client description')
                            ->rows(5)
                            ->characterLimit(250)
                            ->maxLength(250)
                            ->required()
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name'),
                ImageColumn::make('logo_url')
                    ->label('Logo')
                    ->alignCenter()
                    ->extraAttributes(['class' => 'logo-background']),
                LinkButtonColumn::make('socmed_url')
                    ->label('Socmed Link')
                    ->alignCenter()
            ])
            ->recordUrl(false)
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
