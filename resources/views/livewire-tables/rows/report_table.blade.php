<x-livewire-tables::table.cell>
    <a href="{{ route('admin.page.edit', $row->id) }}">{{ $row->id }}</a>
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->user->name}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if (Str::contains($row->reportable_type, 'Video'))
        <a href="{{ route('video.show', $row->video->slug) }}">Video</a>
        @elseif (Str::contains($row->reportable_type, 'Comment'))
        <a href="{{ route('video.show', $row->video->slug) }}">Comment</a>
    @endif

</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->reason }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->comment }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    {{ $row->created_at->diffForHumans() }}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
    @if($row->is_resolved == 0)
        {!! Form::open(['route' => ['admin.reports.update', $row->id], 'method' => 'patch']) !!}
        	{!! Form::submit('RESOVLE', ['class' => 'btn btn-sm btn-success waves-effect waves-float waves-light']) !!}
        {!! Form::close() !!}
    @endif
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
        {!! Form::open(['route' => ['admin.reports.destroy', $row->id], 'method' => 'delete']) !!}
        {!! Form::submit('DELETE', ['class' => 'btn btn-sm btn-danger waves-effect waves-float waves-light']) !!}
        {!! Form::close() !!}
</x-livewire-tables::table.cell>
