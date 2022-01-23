<x-frontend.layout>
    <x-slot name="title">
        Contact Us
    </x-slot>
    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('images/background/asset-25.jpeg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                contact us
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
        <div class="container container-2">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="mb-5">get in touch</h2>
                    {!! Form::open(['contact' => 'contact.send', 'method' => 'post']) !!}
                    <form>
                        <div class="row gt-form">
                            <div class="col-md-6 mb-4">
                                @error('name')
                                <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                    <div class="d-flex align-items-center">
                                        <span>{{$message}}</span>
                                    </div>
                                </div>
                                @enderror
                                {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Your Name']) !!}
                            </div>
                            <div class="col-md-6 mb-4">
                                @error('email')
                                <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                    <div class="d-flex align-items-center">
                                        <span>{{$message}}</span>
                                    </div>
                                </div>
                                @enderror
                                {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Your Email']) !!}
                            </div>
                            <div class="col-md-12 mb-4">
                                @error('message')
                                <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                    <div class="d-flex align-items-center">
                                        <span>{{$message}}</span>
                                    </div>
                                </div>
                                @enderror
                                {!! Form::textarea('message', '') !!}
                                <br>
                                {!! Recaptcha::renderJs() !!}
                                {!! Recaptcha::field('contact') !!}
                                @error('g-recaptcha-response')
                                <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                    <div class="d-flex align-items-center">
                                        <span>{{$message}}</span>
                                    </div>
                                </div>
                                @enderror
                                {!! Form::submit('Send', ['class' => 'form-control mt-4']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-xl-6 mt-5 pt-5">
                    <div style="width: 100%">
                        <a class="" href="{{ route('home') }}">
                            <img class=""  src="{{ asset('assets/frontend/images/PackageThievesLogo.png') }}" alt="streamlab-image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <!-- Map End -->
</x-frontend.layout>
