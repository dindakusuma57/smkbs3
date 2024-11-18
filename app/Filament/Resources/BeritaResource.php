<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Berita';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Group::make()->schema([
                Section::make('Associations')->schema([
                    Select::make('category_id')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship('category','judul'),
                ])

            ])-> columnSpan(2),

            Section::make('Berita')->schema([
                TextInput::make('judul')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur:true)
                        ->afterStateUpdated(fn (string $operation, $state, \Filament\Forms\Set $set) =>
                            $operation === 'create' ? $set('slug', Str::slug($state)) : null
                        ),

                    TextInput::make('slug')
                        ->maxLength(255)
                        ->disabled()
                        ->required()
                        ->dehydrated()
                        ->unique(Berita::class, 'slug', ignoreRecord:true),

                    FileUpload::make('image')
                        ->directory('berita')
                        ->multiple()
                        ->maxFiles(5)
                        ->reorderable(),

                    MarkdownEditor::make('deskripsi')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('beritas'),

                    Toggle::make('is_active')
                        ->required()
                        ->default(true),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('category.judul')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('judul')
                ->searchable(),
            Tables\Columns\TextColumn::make('slug')
                ->searchable(),
            Tables\Columns\TextColumn::make('deskripsi')
                ->searchable(),
            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
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
                SelectFilter::make('category')
                ->relationship('category', 'judul'),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
