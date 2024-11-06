<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeskprestasiResource\Pages;
use App\Filament\Resources\DeskprestasiResource\RelationManagers;
use App\Models\Deskprestasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeskprestasiResource extends Resource
{
    protected static ?string $model = Deskprestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make([
                Grid::make()
                    ->schema([
                        TextInput::make('judul')
                            ->required()
                            ->maxLength(255),

                        MarkdownEditor::make('deskripsi')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory('deskprestasi'),

                        FileUpload::make('image')
                            ->image()
                            ->directory('deskprestasi')
                    ])
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('judul')
                ->searchable(),
            Tables\Columns\TextColumn::make('deskripsi')
                ->searchable(),
            ImageColumn::make('image')
                ->label('Image')
                ->width(100)
                ->height(100),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListDeskprestasis::route('/'),
            'create' => Pages\CreateDeskprestasi::route('/create'),
            'edit' => Pages\EditDeskprestasi::route('/{record}/edit'),
        ];
    }
}
