<x-livewire-tables::table.cell>
    <a href="{{ route('admin.users.edit', $row->id) }}">{{ $row->id }}</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->name }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->username }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->email }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell class="text-center">
    @if($row->is_banned ==1)
        <a href="{{ route('admin.unban.user', $row->id) }}"><span class="badge badge-glow bg-success">UNBAN</span></a>
    @else
        <a href="{{ route('admin.ban.user', $row->id) }}"><span class="badge badge-glow bg-danger">BAN</span></a>
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if($row->send_comments ==1) <span class="badge badge-glow bg-success">YES</span>
    @else <span class="badge badge-glow bg-danger">NO</span>
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if($row->send_videos ==1) <span class="badge badge-glow bg-success">YES</span>
    @else <span class="badge badge-glow bg-danger">NO</span>
    @endif
</x-livewire-tables::table.cell>
