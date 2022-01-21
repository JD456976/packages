<x-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <!-- Log-in  -->
    <section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('images/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'pms_login', 'name' => 'pms_login']) !!}
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                    <div class="d-flex align-items-center">
                                        <span>{{ session('status') }}</span>
                                    </div>
                                </div>
                            @endif
                            <h4>Sign In</h4>
                            <p class="login-username">
                                {!! Form::label('email', 'Email', ['class' => 'input']) !!}
                                {!! Form::email('email', old('email'), ['class' => 'input']) !!}
                                    @error('email')
                                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                        <div class="d-flex align-items-center">
                                            <i class="bx bx-error"></i>
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
                                            <i class="bx bx-error"></i>
                                            <span>{{$message}}</span>
                                        </div>
                                    </div>
                                    @enderror
                            </p>
                            <p class="login-remember">
                                <label>
                                    {!! Form::checkbox('remember', '1', null,  ['id' => 'rememberme']) !!} Remember
                                    Me </label>
                            </p>
                            <p class="login-submit">
                                {!! Form::submit('Log In', ['class' => 'button button-primary']) !!}
                            </p>
                            <input type="hidden" name="pms_login" value="1"><input type="hidden" name="pms_redirect"><a
                                href="{{ route('register') }}">Register</a> | <a href="{{ url('forgot-password') }}">Lost your
                                password?</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Log-in  -->
</x-layout>
