<x-frontend.layout>
    <x-slot name="title">
        {{ Auth::user()->username }} 's Profile
    </x-slot>
    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('//images/background/asset-25.jpeg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                {{ Auth::user()->username }}'s Profile
                            </h1>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- Map Start -->
    <Section class="gen-section-padding-3 gen-top-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {!! Form::open(['route' => ['user.update', Auth::user()->id], 'method' => 'patch', 'id' => 'pms_login', 'name' => 'pms_login']) !!}
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                <div class="d-flex align-items-center">
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        @endif
                        <h4>Update Your Info</h4>
                        <p class="login-username">
                        {!! Form::label('username', 'Username', ['class' => 'input']) !!}
                        {!! Form::text('username', Auth::user()->username, ['class' => 'input', 'disabled' => 'disabled']) !!}
                        @error('username')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-username">
                        {!! Form::label('email', 'Email', ['class' => 'input']) !!}
                        {!! Form::email('email', Auth::user()->email, ['class' => 'input']) !!}
                        @error('email')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-password">
                        {!! Form::label('password', 'Password', ['class' => 'input']) !!}
                        {!! Form::password('password', ['class' => 'input']) !!}
                        @error('password')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-password">
                        {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'input']) !!}
                        {!! Form::password('password_confirmation', ['class' => 'input']) !!}
                        @error('password_confirmation')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-username">
                        {!! Form::label('zip', 'Your Home Zipcode', ['class' => 'input']) !!}
                        <small class="text-muted ml-3"><em>(This helps us find related videos for you)</em></small>
                        {!! Form::text('zip',  $user->zip ?? $location->zipCode, ['class' => 'input']) !!}
                        @error('zip')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-password">
                            <h6>What notifications would you like?</h6>
                        <label>
                        	{!! Form::checkbox('send_comments', '1', ($user->send_comments == 1) ? true : false,  ['id' => 'comment']) !!}
                            <span class="mr-4">Comments on your videos</span>
                        </label>
                        <br>
                        <label>
                            {!! Form::checkbox('send_videos', '1', ($user->send_videos == 1) ? true : false,  ['id' => 'comment']) !!}
                            New videos in your zipcode
                        </label>
                        </p>
                        <p class="login-submit">
                            {!! Form::submit('Update', ['class' => 'button button-primary mt-3']) !!}
                        </p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </Section>
</x-frontend.layout>
