<x-admin.layout>
    <x-slot name="title">
        Editing Video: {{ $video->title }}
    </x-slot>
    <div class="row justify-content-center">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editing Video: {{ $video->title }}</h4>
                </div>
                {!! Form::open(['route' => ['admin.videos.update', $video->id], 'method' => 'patch']) !!}
                <div class="card-body">
                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    @error('title')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('title', old('title') ?? $video->title, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('slug', 'Slug', ['class' => 'form-label']) !!}
                    @error('slug')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('slug', old('slug') ?? $video->slug, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('zip', 'Username', ['class' => 'form-label']) !!}
                    @error('zip')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('zip', old('zip') ?? $video->zip, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group justify-content-evenly">
                        {!! Form::submit('Update', ['class' => 'btn btn-success waves-effect waves-float waves-light rounded']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="input-group justify-content-evenly mt-1 pb-4">
                    {!! Form::open(['route' => ['admin.videos.destroy', $video->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete Video', ['class' => 'btn btn-danger waves-effect waves-float waves-light rounded']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
