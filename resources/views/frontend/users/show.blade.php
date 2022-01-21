<x-frontend.layout>
    <x-slot name="title">
        Videos uploaded by {{ $user->username }}
    </x-slot>
    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('images/background/asset-25.jpeg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                Videos uploaded by {{ $user->username }}
                            </h1>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- Infinite-Scroll -->
    <section class="gen-section-padding-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @if(count($user->videos) == 0)
                            <h3>{{ $user->username }} has not uploaded any videos</h3>
                        @endif
                        @foreach ($user->videos as $video)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        <div class="gen-movie-img">
                                            <img src="{{ $video->getFirstMedia('videos')->getUrl('thumb') }}" alt="single-video-image">

                                            <div class="gen-movie-action">
                                                <a href="{{ route('video.show', $video->slug) }}" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="gen-info-contain">
                                            <div class="gen-movie-info">
                                                <h3><a href="{{ route('video.show', $video->slug) }}">{{ $video->title }}</a></h3>
                                            </div>
                                            <div class="gen-movie-meta-holder">
                                                <ul>
                                                    <li><strong>Added:</strong> {{ $video->created_at->diffForHumans() }}</li>
                                                    <li>
                                                        <strong>Viewed:</strong> @if(empty(views($video)->count())) No Views Yet @else {{ views($video)->count() }} Times @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <!-- Infinite-Scroll -->
</x-frontend.layout>
