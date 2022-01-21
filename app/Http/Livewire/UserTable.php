<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID','id')
                ->sortable()
                ->searchable(),
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('Username')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Banned', 'is_banned')
                ->sortable(),
            Column::make('Comments', 'send_comments')
                ->sortable(),
            Column::make('Videos', 'send_videos')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return User::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.user_table';
    }
}
