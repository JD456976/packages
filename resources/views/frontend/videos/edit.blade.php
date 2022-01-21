<x-frontend.layout>
    <x-slot name="title">
        Editing: {{ $video->title }}
    </x-slot>
    <!-- Log-in  -->
    <section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('images/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {!! Form::open(['route' => ['video.update', $video->id], 'method' => 'patch', 'id' => 'pms_login', 'name' => 'pms_login']) !!}
                        <h4>Editing: {{ $video->title }}</h4>
                        <p class="login-username">
                        {!! Form::label('title', 'Title', ['class' => 'input']) !!}
                        {!! Form::text('title', old('title') ?? $video->title, ['class' => 'input']) !!}
                        @error('title')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-password">
                            {!! Form::label('tags', 'Tags', ['class' => 'input']) !!}
                            {!! Form::text('tags', old('tags') ?? $video->tagList, ['class' => 'input', 'placeholder' => 'Comma separated list: Apple, Banana, Orange']) !!}
                            <small><em>(optional)</em></small>
                        @error('tags')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-password">
                            {!! Form::label('content', 'Content', ['class' => 'input']) !!}
                            {!! Form::textarea('content', old('content') ?? $video->content,['class' => 'input', 'placeholder' => 'Anything special to say about this video?']) !!}
                            <small><em>(optional)</em></small>
                        @error('content')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-password">
                            {!! Form::label('zip', 'Zipcode', ['class' => 'input']) !!}
                            {!! Form::text('zip', old('zip') ?? $location->zipCode, ['class' => 'input']) !!}
                            <small><em>(our best guess)</em></small>
                        @error('zip')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-submit">
                            {!! Form::submit('Update Video', ['class' => 'button button-primary']) !!}
                        </p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Log-in  -->
</x-frontend.layout>
