<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class ReportTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID')
            ->sortable()
            ->searchable(),
            Column::make('Reported by', 'user_id')
            ->sortable(),
            Column::make('Type', 'reportable_type')
            ->sortable(),
            Column::make('Reason')
            ->sortable(),
            Column::make('Comment'),
            Column::make('Created', 'created_at')
            ->sortable(),
            Column::make('Status'),
            Column::make('Delete')

        ];
    }

    public function query(): Builder
    {
        return Report::query();
    }

    public function rowView(): string
    {
        return 'livewire-tables.rows.report_table';
    }
}
