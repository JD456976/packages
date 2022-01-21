<x-frontend.layout>
    <x-slot name="title">
        Reset Password
    </x-slot>
    <!-- register -->
    <section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('images/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {!! Form::open(['url' => 'reset-password', 'method' => 'post', 'id' => 'pms_login', 'name' => 'pms_login']) !!}
                        {!! Form::hidden('token', request()->route('token')) !!}
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                <div class="d-flex align-items-center">
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        @endif
                        <h4>Reset Your Password</h4>
                        <p class="login-username">
                        {!! Form::label('email', 'Email', ['class' => 'input']) !!}
                        {!! Form::email('email', old('email'), ['class' => 'input']) !!}
                        @error('email')
                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                            <div class="d-flex align-items-center">
                                <span>{{$message}}</span>
                            </div>
                        </div>
                        @enderror
                        </p>
                        <p class="login-username">
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
                        <p class="login-username">
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
                        <p class="login-submit">
                            {!! Form::submit('Submit', ['class' => 'button button-primary']) !!}
                        </p>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register -->
</x-frontend.layout>
