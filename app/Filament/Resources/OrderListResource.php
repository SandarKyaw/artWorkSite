<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderListResource\Pages;
use App\Filament\Resources\OrderListResource\RelationManagers;
use App\Models\OrderList;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderListResource extends Resource
{
    protected static ?string $model = OrderList::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make(name:'user_id')->required(),
                Forms\Components\Select::make('art_work_list_id')
                     ->relationship('artworklist', 'id')->required(),
                Forms\Components\TextInput::make(name:'Payment')->required(),
                Forms\Components\Select::make('status' )

                ->options([
                    '0' => 'pending',
                    '1' => 'access',
                    '2'=> 'reject',
                ])
                // Forms\Components\Select::make('art_work_list_id')
                //     ->relationship('artworklist', 'title'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                   //orderlist table show
                // Tables\Columns\TextColumn::make(name:'user_id'),
                Tables\Columns\TextColumn::make(name:'user.name'),
                Tables\Columns\TextColumn::make(name:'art_work_list_id'),
                Tables\Columns\TextColumn::make(name:'Payment'),
                Tables\Columns\SelectColumn::make('status' )

                ->options([
                    '0' => 'pending',
                    '1' => 'access',
                    '2'=> 'reject',
                ])
               ,
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
            'index' => Pages\ListOrderLists::route('/'),
            // 'create' => Pages\CreateOrderList::route('/create'),
            // 'edit' => Pages\EditOrderList::route('/{record}/edit'),
        ];
    }
}
