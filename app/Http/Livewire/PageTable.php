<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PageTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID','id')
                ->sortable()
                ->searchable(),
            Column::make('Title')
                ->sortable()
                ->searchable(),
            Column::make('Slug')
                ->sortable()
                ->searchable(),
            Column::make('Active', 'is_active')
                ->sortable(),
            Column::make('Created', 'created_at')
                ->sortable(),
            Column::make('Updated', 'updated_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Page::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.page_table';
    }
}
