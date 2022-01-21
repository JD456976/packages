<x-frontend.layout>
    <x-slot name="title">
        Forgot Password
    </x-slot>
    <!-- register -->
    <section class="position-relative pb-0">
        <div class="gen-login-page-background" style="background-image: url('images/background/asset-54.jpg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {!! Form::open(['url' => 'forgot-password', 'method' => 'post', 'id' => 'pms_login', 'name' => 'pms_login']) !!}
                        {!! Form::hidden('token', request()->route('token')) !!}
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                <div class="d-flex align-items-center">
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        @endif
                        <h4>Forgot Your Password</h4>
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
                        <p class="login-submit">
                            {!! Form::submit('Submit', ['class' => 'button button-primary']) !!}
                        </p>
                        <input type="hidden" name="pms_login" value="1"><input type="hidden" name="pms_redirect"><a
                            href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register -->
</x-frontend.layout>
