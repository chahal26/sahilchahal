<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\Fieldset;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Blog Details')
                    ->schema([
                        Forms\Components\MultiSelect::make('categories')
                            ->relationship('categories', 'name'),
                        Forms\Components\Hidden::make('user_id')
                            ->default(auth()->user()->id),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->reactive()
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug',Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('image')
                                ->image(),
                        Forms\Components\RichEditor::make('desc')
                            ->maxLength(65535),
                    ])->columns(1),
                    Fieldset::make('Meta Details')
                        ->schema([
                            Forms\Components\Textarea::make('meta_title')
                                ->maxLength(65535),
                            Forms\Components\Textarea::make('meta_desc')
                                ->maxLength(65535),
                            Forms\Components\Toggle::make('is_active')
                            ->required(),
                        ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('name'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
