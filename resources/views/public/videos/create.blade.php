<x-layout>
    <x-slot name="title">
        Upload Your Video
    </x-slot>
    <!-- Log-in  -->
    <section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('images/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {!! Form::open(['route' => 'video.store', 'method' => 'post', 'id' => 'pms_login', 'name' => 'pms_login', 'files' => 'true']) !!}
                        <h4>Upload Your Video</h4>
                        <p class="login-username">
                        {!! Form::label('title', 'Title', ['class' => 'input']) !!}
                        {!! Form::text('title', old('title'), ['class' => 'input']) !!}
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
                        {!! Form::text('tags', old('tags'), ['class' => 'input', 'placeholder' => 'Comma separated list: Apple, Banana, Orange']) !!}
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
                        {!! Form::textarea('content', '',['class' => 'input', 'placeholder' => 'Anything special to say about this video?']) !!}
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
                        {!! Form::label('zip', 'Your Zipcode', ['class' => 'input']) !!}
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
                        <p class="login-password">
                        {!! Form::label('file', 'Choose video', ['class' => 'input']) !!}
                        {!! Form::file('file', ['class' => 'input']) !!}
                        @error('file')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        {!! Recaptcha::renderJs() !!}
                        {!! Recaptcha::field('video') !!}
                        @error('g-recaptcha-response')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        <p class="login-submit">
                            {!! Form::submit('Add Video', ['class' => 'button button-primary']) !!}
                        </p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Log-in  -->
</x-layout>
