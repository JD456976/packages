<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Video;

class VideoTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID')
                ->sortable()
                ->searchable(),
            Column::make('Title' )
                ->sortable()
                ->searchable(),
            Column::make('Zip')
                ->sortable()
                ->searchable(),
            Column::make('Created', 'created_at')
                ->searchable()
                ->sortable()
        ];
    }

    public function query(): Builder
    {
        return Video::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.video_table';
    }
}
