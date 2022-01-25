<x-livewire-tables::table.cell>
    <a href="{{ route('admin.page.edit', $row->id) }}">{{ $row->id }}</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->title }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->slug }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="text-center">
    @if($row->is_active == 0)
        <a href="{{ route('admin.page.activate', $row->id) }}"><span class="badge badge-glow bg-success">ACTIVATE</span></a>
    @else
        <a href="{{ route('admin.page.deactivate', $row->id) }}"><span class="badge badge-glow bg-danger">DEACTIVATE</span></a>
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->created_at->diffForHumans() }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->updated_at->diffForHumans() }}
</x-livewire-tables::table.cell>
