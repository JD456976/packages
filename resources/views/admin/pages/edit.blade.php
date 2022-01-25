<x-admin.layout>
    <x-slot name="title">
        Editing Page: {{ $page->title }}
    </x-slot>
    <div class="row justify-content-center">
        <!-- Basic -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editing Page: {{ $page->title }}</h4>
                </div>
                {!! Form::open(['route' => ['admin.page.update', $page->id], 'method' => 'patch']) !!}
                <div class="card-body">
                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                    @error('title')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('title', old('title') ?? $page->title, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('slug', 'Slug', ['class' => 'form-label']) !!}
                    @error('slug')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::text('slug', old('slug') ?? $page->slug, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
                    @error('content')
                    <x-admin.alert type="danger" :message="$message" />
                    @enderror
                    <div class="input-group mb-2">
                        {!! Form::textarea('content', old('content') ?? $page->content, ['class' => 'form-control', 'id' => 'content']) !!}
                    </div>
                    <div class="input-group mb-2 form-check form-check-inline">
                        {!! Form::checkbox('is_active', '1', ($page->is_active == 1) ? true : false,  ['id' => 'is_active', 'class' => 'form-check-input']) !!}
                        {!! Form::label('is_active', 'Active', ['class' => 'form-check-label']) !!}
                    </div>
                    {!! Form::label('main_menu', 'Main Menu', ['class' => 'form-check-label']) !!}
                    <div class="input-group mb-2 form-check form-check-inline">
                        {!! Form::checkbox('main_menu', '1', ($page->main_menu == 1) ? true : false,  ['id' => 'main_menu', 'class' => 'form-check-input']) !!}
                    </div>
                    {!! Form::label('footer_menu', 'Footer Menu', ['class' => 'form-check-label']) !!}
                    <div class="input-group mb-2 form-check form-check-inline">
                        {!! Form::checkbox('footer_menu', '1', ($page->footer_menu == 1) ? true : false,  ['id' => 'footer_menu', 'class' => 'form-check-input']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="input-group justify-content-evenly">
                        {!! Form::submit('Update', ['class' => 'btn btn-success waves-effect waves-float waves-light rounded']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                <div class="input-group justify-content-evenly mt-1 pb-4">
                    {!! Form::open(['route' => ['admin.page.destroy', $page->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete Page', ['class' => 'btn btn-danger waves-effect waves-float waves-light rounded']) !!}
                    {!! Form::close() !!}
                </div>
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
