<x-livewire-tables::table.cell>
    <a href="{{ route('admin.videos.edit', $row->id) }}">{{ $row->id }}</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    <a href="{{ route('admin.users.edit', $row->id) }}">{{ $row->user->name }}</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    <a target="_blank" href="{{ route('video.show', $row->slug) }}">{{ $row->title }}</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->slug }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->zip }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if($row->is_featured == 1)
        <a href="{{ route('admin.videos.unfeature', $row->id) }}"><span class="badge badge-glow bg-secondary">Unfeature</span>
        </a>
    @else
        <a href="{{ route('admin.videos.feature', $row->id) }}"><span class="badge badge-glow bg-warning">Feature</span>
        </a>
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if($row->is_approved == 0)
        <a href="{{ route('admin.videos.unfeature', $row->id) }}"><span class="badge badge-glow bg-success">Approve</span>
        </a>
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->created_at->diffForHumans() }}
</x-livewire-tables::table.cell>
