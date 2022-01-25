<x-admin.layout>
    <x-slot name="title">
        Add A New Page
    </x-slot>
    <div class="row justify-content-center">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add A New Page</h4>
                </div>
                {!! Form::open(['route' => ['admin.page.store'], 'method' => 'post']) !!}
                <div class="card-body">
                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    @error('title')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('slug', 'Slug', ['class' => 'form-label']) !!}
                    @error('slug')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('slug', old('slug'), ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
                    @error('content')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'id' => 'content']) !!}
                    </div>
                    {!! Form::label('is_active', 'Active', ['class' => 'form-check-label']) !!}
                    <div class="input-group mb-2 form-check form-check-inline">
                        {!! Form::checkbox('is_active', '1', null,  ['id' => 'is_active', 'class' => 'form-check-input']) !!}
                    </div>
                    {!! Form::label('main_menu', 'Main Menu', ['class' => 'form-check-label']) !!}
                    <div class="input-group mb-2 form-check form-check-inline">
                        {!! Form::checkbox('main_menu', '1', null,  ['id' => 'main_menu', 'class' => 'form-check-input']) !!}
                    </div>
                    {!! Form::label('footer_menu', 'Footer Menu', ['class' => 'form-check-label']) !!}
                    <div class="input-group mb-2 form-check form-check-inline">
                        {!! Form::checkbox('footer_menu', '1', null,  ['id' => 'footer_menu', 'class' => 'form-check-input']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group justify-content-evenly">
                        {!! Form::submit('Save', ['class' => 'btn btn-success waves-effect waves-float waves-light rounded']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @push('footer-scripts')
        <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'content' );
        </script>
    @endpush
</x-admin.layout>
