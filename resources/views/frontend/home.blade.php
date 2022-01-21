<x-frontend.layout>
    <x-slot name="title">
        Welcome
    </x-slot>
    <!-- owl-carousel Banner Start -->
    <section class="pt-0 pb-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="gen-banner-movies banner-style-2">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="1"
                             data-lap_num="1" data-tab_num="1" data-mob_num="1" data-mob_sm="1" data-autoplay="true"
                             data-loop="true" data-margin="0">
                            @foreach ($recent as $video)
                                <div class="item" style="background: url('/images/background/handcuffs.jpg')">
                                    <div class="gen-movie-contain-style-2 h-100">
                                        <div class="container h-100">
                                            <div class="row flex-row-reverse align-items-center h-100">
                                                <div class="col-xl-6">
                                                    <div class="gen-front-image">
                                                        <img src="{{ $video->getFirstMedia('videos')->getUrl('thumb') }}" alt="owl-carousel-banner-image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="gen-tag-line">
                                                        @if ($video->is_featured == 1)
                                                            <span style="color:gold;">&#129321; Featured Video &#129321;</span>
                                                        @else
                                                            <span>Recent Video</span>
                                                        @endif
                                                    </div>
                                                    <div class="gen-movie-info">
                                                        <a href="{{ route('video.show', $video->slug) }}"><h3>{{ $video->title }}</h3></a>
                                                    </div>
                                                    <div class="gen-movie-meta-holder">
                                                        <p>
                                                            {{ $video->content }}
                                                        </p>
                                                        <div class="gen-meta-info">
                                                            <ul class="gen-meta-after-excerpt">
                                                                <li>
                                                                    <strong>Posted By :</strong>
                                                                    <a data-toggle="tooltip"
                                                                       data-placement="top"
                                                                       title="Search for videos posted by: {{ $video->user->username }}" href="{{ route('user.show', $video->user->id) }}">{{ $video->user->username }}</a>
                                                                </li>
                                                                <li>
                                                                    <strong>Zip :</strong>
                                                                    <a data-toggle="tooltip"
                                                                       data-placement="top"
                                                                       title="Search for videos in zipcode: {{ $video->zip }}" href="{{ route('search', $video->zip) }}">{{ $video->zip }}</a>

                                                                </li>
                                                                <li>
                                                                    <strong>Tags :</strong>
                                                                    @if(empty($video->tagList)) No Tags Found
                                                                    @else
                                                                        @foreach ($video->tags as $tag)
                                                                            <span>
                                                                       <a data-toggle="tooltip"
                                                                          data-placement="top"
                                                                          title="Search for videos tagged with {{ $tag->name }}"
                                                                          href="{{ route('video.tag',$tag->name) }}">{{ $tag->name }}
                                                                        </a>
                                                                    </span>
                                                                        @endforeach
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="gen-movie-action">
                                                        <div class="gen-btn-container">
                                                            <a href="{{ route('video.show', $video->slug) }}" class="gen-button .gen-button-dark">
                                                                <i aria-hidden="true" class="fas fa-play"></i> <span class="text">Play
                                                Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- owl-carousel Banner End -->

    <!-- owl-carousel Videos Section-1 Start -->
    <section class="gen-section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <h4 class="gen-heading-title">Most Popular This Week</h4>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
                    <div class="gen-movie-action">
                        <div class="gen-btn-container text-right">
                            <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                                <span class="text">More Videos</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="gen-style-2">
                        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
                             data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
                             data-loop="false" data-margin="30">
                            @foreach ($hot as $video)
                                <div class="item">
                                    <div
                                        class="movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-adventure movie_genre-drama">
                                        <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                            <div class="gen-movie-contain">
                                                <div class="gen-movie-img">
                                                    <img src="{{ $video->getFirstMedia('videos')->getUrl('thumb') }}" alt="owl-carousel-video-image">
                                                    <div class="gen-movie-action">
                                                        <a href="{{ route('video.show', $video->slug) }}" class="gen-button">
                                                            <i class="fa fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="gen-info-contain">
                                                    <div class="gen-movie-info">
                                                        <h3><a href="{{ route('video.show', $video->slug) }}">{{ $video->title }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="gen-movie-meta-holder">
                                                        <ul>
                                                            <li>Posted: {{ $video->created_at->diffForHumans() }}</li>
                                                            <li>
                                                                <span><strong>{{ views($video)->count() }}</strong> Views</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #post-## -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- owl-carousel Videos Section-1 End -->
</x-frontend.layout>
