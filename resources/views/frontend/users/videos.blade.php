<x-frontend.layout>
    <x-slot name="title">
        {{ Auth::user()->name }}'s Videos
    </x-slot>
    <!-- Load More -->
    <section class="gen-section-padding-3">
        <div class="gen-breadcrumb mb-5" style="background-image: url(&quot;//images/background/asset-25.jpeg&quot;); padding-top: 119.232px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <div class="gen-breadcrumb-title">
                                <h1>
                                    {{ Auth::user()->name }}'s Videos
                                </h1>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($videos as $video)
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="gen-load-more-button">
                                <div class="gen-btn-container">
                                    <a class="gen-button gen-button-loadmore" href="#">
                                        <span class="button-text">Load More</span>
                                        <span class="loadmore-icon" style="display: none;"><i
                                                class="fa fa-spinner fa-spin"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Load More -->
</x-frontend.layout>
