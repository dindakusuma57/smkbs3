<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KepsekResource\Pages;
use App\Filament\Resources\KepsekResource\RelationManagers;
use App\Models\Kepsek;
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

class KepsekResource extends Resource
{
    protected static ?string $model = Kepsek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pengajar';

    protected static ?int $navigationSort = 1;

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
                            ->fileAttachmentsDirectory('kepsek'),

                        TextInput::make('nama')
                            ->required()
                            ->maxLength(255),

                        FileUpload::make('image')
                            ->image()
                            ->directory('kepsek')
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
            Tables\Columns\TextColumn::make('nama')
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
            'index' => Pages\ListKepseks::route('/'),
            'create' => Pages\CreateKepsek::route('/create'),
            'edit' => Pages\EditKepsek::route('/{record}/edit'),
        ];
    }
}
