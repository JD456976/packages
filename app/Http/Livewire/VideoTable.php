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
            Column::make('ID','id')
                ->sortable()
                ->searchable(),
            Column::make('Created By','user_id')
                ->sortable()
                ->searchable(),
            Column::make('Title' )
                ->sortable()
                ->searchable(),
            Column::make('Slug' ),
            Column::make('Zip')
                ->sortable()
                ->searchable(),
            Column::make('Featured', 'is_featured')
                ->sortable(),
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
