<header id="gen-header" class="gen-header-style-1 gen-has-sticky">
    <div class="gen-bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img style="height: 200px" class="img-fluid logo"  src="{{ asset('assets/frontend/images/PackageThievesLogo.png') }}" alt="streamlab-image">
                        </a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div id="gen-menu-contain" class="gen-menu-contain" style="font-size:28px;">
                                <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                    <li class="menu-item active">
                                        @can('is-admin')
                                        <a href="{{ route('admin.dashboard') }}" aria-current="page">Admin</a>
                                        @endcan
                                    </li>
                                    <li>
                                        <a href="{{ route('video.index') }}">Videos</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About
                                             </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact
                                             </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('video.create') }}">Upload Video
                                             </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gen-header-info-box">
                            <div class="gen-menu-search-block">
                                <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>
                                <div class="gen-search-form">
                                    {!! Form::open(['route' => 'video.search', 'method' => 'post', 'class' => 'search-form']) !!}
                                        <label>
                                            <span class="screen-reader-text"></span>
                                            {!! Form::text('query', '', ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
                                        </label>
                                    {!! Form::submit('Search', ['class' => 'search-submit']) !!}
                                        <button type="submit" class="search-submit"><span
                                                class="screen-reader-text"></span></button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <div class="gen-account-holder">
                                <a href="javascript:void(0)" id="gen-user-btn"><i class="fa fa-user"></i></a>
                                <div class="gen-account-menu">
                                    <ul class="gen-account-menu">
                                        <!-- Pms Menu -->
                                        @guest
                                        <li>
                                            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>
                                                Login </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('register') }}"><i class="fa fa-user"></i>
                                                Register </a>
                                        </li>
                                        @endguest
                                        @auth
                                        <!-- Library Menu -->
                                        <li>
                                            <a href="{{ route('user.edit', Auth::user()->id) }}">
                                                <i class="fa fa-user"></i>
                                                My Profile </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('user.videos', Auth::user()->id) }}">
                                                <i class="fa fa-user"></i>
                                                My Videos </a>
                                        </li>
                                        <li>
                                            {!! Form::open(['route' => 'logout', 'method' => 'post']) !!}
                                            	{!! Form::submit('Logout', ['class' => 'form-control']) !!}
                                            {!! Form::close() !!}
                                        </li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </nav>
                   @error('query')
                    <div class="row justify-content-end">
                        <div class="col-3">
                            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <div class="d-flex align-items-center">
                                    <i class="bx bx-error"></i>
                                    <span>{{$message}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                   @enderror
                </div>
            </div>
        </div>
    </div>
</header>
