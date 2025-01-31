<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'fas-house';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('years_of_expertise')
                    ->label('Years of Expertise')
                    ->placeholder('Number Years of Expertise')
                    ->integer()
                    ->required(),
                TextInput::make('successful_campaigns')
                    ->label('Successful Campaigns')
                    ->placeholder('Number Successful Campaigns')
                    ->integer()
                    ->required(),
                TextInput::make('served_clients')
                    ->label('Served Clients')
                    ->placeholder('Number Served Clients')
                    ->integer()
                    ->required(),
                TextInput::make('positive_testimonials')
                    ->label('Positive Testimonials')
                    ->placeholder('Number Positive Testimonials')
                    ->integer()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
        $home = Home::first();
        
        return [
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }

    public static function getNavigationUrl(): string
    {
        $firstRecord = Home::first();
        
        if ($firstRecord) {
            return HomeResource::getUrl('edit', ['record' => $firstRecord]);
        }
        
        return HomeResource::getUrl();
    }
}
