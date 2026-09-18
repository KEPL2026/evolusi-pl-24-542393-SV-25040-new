<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(50),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                Select::make('study_program')
                    ->label('Program Studi')
                    ->options([
                        'Rekayasa Perangkat Lunak' => 'Rekayasa Perangkat Lunak',
                        'Teknologi Rekayasa Instrumentasi dan Kontrol' => 'Teknologi Rekayasa Instrumentasi dan Kontrol',
                        'Teknologi Rekayasa Internet' => 'Teknologi Rekayasa Internet',
                        'Sistem Informasi Geografis' => 'Sistem Informasi Geografis',
                    ])
                    ->required(),
                Toggle::make('is_active')
                    ->label('Status Aktif')
                    ->default(true),
            ]);
    }
}
