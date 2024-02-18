<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtWorkListResource\Pages;
use App\Filament\Resources\ArtWorkListResource\RelationManagers;
use App\Models\ArtWorkList;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class ArtWorkListResource extends Resource
{
    protected static ?string $model = ArtWorkList::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //form

                Forms\Components\FileUpload::make(name: 'image')->disk('public')
                ->required(),
                Forms\Components\TextInput::make(name: 'title')->required(),
                Forms\Components\MarkdownEditor::make('description')->required()->maxLength(length: '500'),
                Forms\Components\TextInput::make(name: 'artist')->required(),
                Forms\Components\TextInput::make(name: 'price')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //artwork table show
                Tables\Columns\TextColumn::make(name:'title'),
                Tables\Columns\TextColumn::make(name:'artist'),
                Tables\Columns\TextColumn::make(name:'updated_at'),
                Tables\Columns\ToggleColumn::make(name:'status')
                 ->onColor('success')
                 ->offColor('danger'),
                Tables\Columns\ImageColumn::make('image')->disk('public'),
            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListArtWorkLists::route('/'),
            'create' => Pages\CreateArtWorkList::route('/create'),
            'edit' => Pages\EditArtWorkList::route('/{record}/edit'),
        ];
    }
}
