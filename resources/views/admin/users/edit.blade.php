<x-admin.layout>
    <x-slot name="title">
        Editing User: {{ $user->name }}
    </x-slot>
    <div class="row justify-content-center">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editing User: {{ $user->name }}</h4>
                </div>
                {!! Form::open(['route' => ['admin.users.update', $user->id], 'method' => 'patch']) !!}
                <div class="card-body">
                    {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                    @error('name')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('name', old('name') ?? $user->name, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                    @error('username')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('username', old('username') ?? $user->username, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                    @error('email')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('email', old('email') ?? $user->email, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('zip', 'Zip', ['class' => 'form-label']) !!}
                    @error('zip')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('zip', old('zip') ?? $user->zip, ['class' => 'form-control']) !!}
                    </div>

                    <div class="input-group mb-2">
                        <div class="form-check form-check-inline">
                            {!! Form::checkbox('send_comments', '1', ($user->send_comments == 1) ? true : false,  ['id' => 'send_comments', 'class' => 'form-check-input']) !!}
                            {!! Form::label('send_comments', 'Send Comments', ['class' => 'form-check-label', 'for' => 'send_comments']) !!}
                        </div>
                        <div class="form-check form-check-inline">
                            {!! Form::checkbox('send_videos', '1', ($user->send_videos == 1) ? true : false,  ['id' => 'send_videos', 'class' => 'form-check-input']) !!}
                            {!! Form::label('send_videos', 'Send Videos', ['class' => 'form-check-label', 'for' => 'send_videos']) !!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group justify-content-evenly">
                        {!! Form::submit('Update', ['class' => 'btn btn-success waves-effect waves-float waves-light rounded']) !!}

                        <a href="{{ route('admin.users.index') }}">
                            {!! Form::button('Cancel', ['class' => 'btn btn-primary waves-effect waves-float waves-light']) !!}
                        </a>
                    </div>
                    <div class="input-group justify-content-evenly mt-3">
                        <a href="{{ route('admin.reset.password', $user->id) }}">
                            {!! Form::button('Send Password Reset Link', ['class' => 'btn btn-info waves-effect waves-float waves-light']) !!}
                        </a>
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="input-group justify-content-evenly mt-1 pb-4">
                    {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete User', ['class' => 'btn btn-danger waves-effect waves-float waves-light rounded']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
