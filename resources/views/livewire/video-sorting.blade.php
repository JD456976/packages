<div>
    <section class="gen-section-padding-3">
        <div class="container">
            <div class="row justify-content-end mb-5">
                <div class="col-lg-3 text-center mr-5">
                    <div class="sort-item ">
                        <select name="sortBy" class="chosen" wire:model="sortBy">
                            <option value="default" selected="selected">Default sorting</option>
                            <option value="newest">Sort by Newest Videos</option>
                            <option value="oldest">Sort by Oldest Videos</option>
                            <option value="featured">Sort by Featured Videos</option>
                            <option value="zip">Sort by Zipcode</option>
                            <option value="views">Sort by Views</option>
                        </select>
                    </div>
                    <div class="sort-item product">
                        <select name="perPage" class="use-chosen mt-3" wire:model="perPage">
                            <option value="6" selected="selected">6 per page</option>
                            <option value="9">9 per page</option>
                            <option value="12">12 per page</option>
                            <option value="18">18 per page</option>
                            <option value="21">21 per page</option>
                            <option value="24">24 per page</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($videos as $video)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="gen-carousel-movies-style-2 movie-grid style-2">
                                    <div class="gen-movie-contain">
                                        @if (!empty($video->getFirstMedia('videos')))
                                        <div class="gen-movie-img">
                                            <img src="{{ $video->getFirstMedia('videos')->getUrl('thumb') }}" alt="single-video-image">
                                            <div class="gen-movie-action">
                                                <a href="{{ route('video.show', $video->slug) }}" class="gen-button">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        @endif
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
</div>
