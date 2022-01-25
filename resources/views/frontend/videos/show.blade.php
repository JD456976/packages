<x-frontend.layout>
    <x-slot name="title">
        {{ $video->title }}
    </x-slot>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 100px;">
                <div id="primary" class="content-area">
                    <article
                        class="post-1471 video type-video status-publish has-post-thumbnail hentry video_cat-tennis">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gen-video-holder text-center">
                                    <video width="700" height="550" controls>
                                        <source src="{{ $video->getFirstMediaUrl('videos') }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="gen-single-video-info">
                                    <div class="title">
                                        <h2 class="gen-title">{{ $video->title }}</h2>
                                    </div>
                                    @include('frontend.partials.report-video-modal')
                                    @can('update-video', $video)
                                    <a data-toggle="tooltip" data-placement="top" title="Edit This Video" href="{{ route('video.edit',$video->id) }}"><i class="fa fa-pencil-alt"></i></a>
                                    @endcan
                                        @if ($reported  >= 1)
                                        <button disabled data-toggle="tooltip" data-placement="top" title="Video was alrady reported"  type="button" class="btn-sm rounded btn-secondary ml-3">
                                            Reported
                                        </button>
                                        @else
                                        <button  type="button" class="btn-sm rounded btn-danger ml-3" data-toggle="modal" data-target="#reportVideoModal">
                                            Report Video
                                        </button>
                                        @endif
                                    <div class="gen-single-meta-holder">
                                        <ul>
                                            <li><strong class="mr-2">Posted By:</strong><a href="{{ route('user.show', $video->user->id) }}">{{ $video->user->username }}</a></li>
                                            <li><strong class="mr-2">Added:</strong> {{ $video->created_at->diffForHumans() }}</li>
                                            <li>
                                                <a data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Search for videos in the  {{ $video->zip }} area" href="{{ route('search', $video->zip) }}"><span><strong class="mr-2">Zipcode:</strong> {{ $video->zip }}</span></a>
                                            </li>
                                            <li><i class="fas fa-eye"></i>
                                                <span>{{ views($video)->count() }} Views</span></li>
                                            <li>
                                                <strong class="mr-2">Tags:</strong>
                                                @if(empty($video->tagList)) No Tags Found
                                                @else
                                                    @foreach($video->tags as $tag)
                                                        <ul><li style="margin-top:5px;">
                                                                <a data-toggle="tooltip"
                                                                   data-placement="top"
                                                                   title="Search for videos tagged with {{ $tag->name }}"
                                                                   href="{{ route('video.tag',$tag->name) }}">{{ $tag->name }}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    @endforeach
                                                @endif
                                            </li>
                                            @can('is-admin')
                                                <li>
                                                    @if($video->is_approved == 0)
                                                    <a href="{{ route('admin.videos.approve', $video->id) }}"><button class="btn-sm btn-primary">Approve</button></a>
                                                    @else
                                                    <a href="{{ route('admin.videos.unapprove', $video->id) }}"><button class="btn-sm btn-warning">Unapprove</button></a>
                                                    @endif
                                                </li>
                                            @endcan
                                        </ul>
                                    </div>
                                    <div class="gen-excerpt">
                                        <p>
                                            @if (empty($video->content))
                                            This area intentionally left blank by the poster
                                            @else
                                                {{ $video->content }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="gen-socail-share">
                                        <h4 class="align-self-center">Social Share :</h4>
                                        <ul class="social-inner">
                                            <li><a target="_blank"
                                                   href="www.facebook.com?share=http://preview.gentechtreedesign.com/streamlab/video/how-to-hit-the-perfect-tennis/"
                                                   class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a target="_blank"
                                                   href="#http://preview.gentechtreedesign.com/streamlab/video/how-to-hit-the-perfect-tennis/"
                                                   class="facebook"><i class="fab fa-instagram"></i></a></li>
                                            <li><a target="_blank"
                                                   href="#http://preview.gentechtreedesign.com/streamlab/video/how-to-hit-the-perfect-tennis/"
                                                   class="facebook"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    @can('is-admin')
                                    <div class="gen-socail-share">
                                        <h4 class="align-self-center">Revision History :</h4>
                                        <ul class="social-inner">
                                            @foreach ($histories as $history)
                                                <li>
                                                    <strong>
                                                        {{ $history->userResponsible()->name }}
                                                    </strong>
                                                     changed
                                                    <strong>
                                                        {{ $history->key }}
                                                    </strong>
                                                     from:
                                                    <strong>
                                                        {{ $history->old_value }}
                                                    </strong>
                                                    to:
                                                    <strong>
                                                        {{ $history->new_value }}
                                                    </strong>
                                                     when:
                                                    {{ $history->created_at->diffForHumans() }}
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endcan
                                </div>

                            </div>
                            <h2 class="mt-4 ml-3">Comments</h2>
                            @include('frontend.partials.comment')
                            <div class="col-lg-12">
                                <div class="pm-inner">
                                    <div class="gen-more-like">
                                        <h5 class="gen-more-title">Related Videos Based on Tags</h5>
                                        <div class="row post-loadmore-wrapper">
                                            <div class="post-loadmore-data" data-box_style="3"
                                                 data-query="{&quot;post_type&quot;:&quot;video&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;error&quot;:&quot;&quot;,&quot;m&quot;:&quot;&quot;,&quot;p&quot;:0,&quot;post_parent&quot;:&quot;&quot;,&quot;subpost&quot;:&quot;&quot;,&quot;subpost_id&quot;:&quot;&quot;,&quot;attachment&quot;:&quot;&quot;,&quot;attachment_id&quot;:0,&quot;name&quot;:&quot;&quot;,&quot;pagename&quot;:&quot;&quot;,&quot;page_id&quot;:0,&quot;second&quot;:&quot;&quot;,&quot;minute&quot;:&quot;&quot;,&quot;hour&quot;:&quot;&quot;,&quot;day&quot;:0,&quot;monthnum&quot;:0,&quot;year&quot;:0,&quot;w&quot;:0,&quot;category_name&quot;:&quot;&quot;,&quot;tag&quot;:&quot;&quot;,&quot;cat&quot;:&quot;&quot;,&quot;tag_id&quot;:&quot;&quot;,&quot;author&quot;:&quot;&quot;,&quot;author_name&quot;:&quot;&quot;,&quot;feed&quot;:&quot;&quot;,&quot;tb&quot;:&quot;&quot;,&quot;paged&quot;:0,&quot;meta_key&quot;:&quot;&quot;,&quot;meta_value&quot;:&quot;&quot;,&quot;preview&quot;:&quot;&quot;,&quot;s&quot;:&quot;&quot;,&quot;sentence&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;fields&quot;:&quot;&quot;,&quot;menu_order&quot;:&quot;&quot;,&quot;embed&quot;:&quot;&quot;,&quot;category__in&quot;:[],&quot;category__not_in&quot;:[],&quot;category__and&quot;:[],&quot;post__in&quot;:[],&quot;post__not_in&quot;:[],&quot;post_name__in&quot;:[],&quot;tag__in&quot;:[],&quot;tag__not_in&quot;:[],&quot;tag__and&quot;:[],&quot;tag_slug__in&quot;:[],&quot;tag_slug__and&quot;:[],&quot;post_parent__in&quot;:[],&quot;post_parent__not_in&quot;:[],&quot;author__in&quot;:[],&quot;author__not_in&quot;:[],&quot;ignore_sticky_posts&quot;:false,&quot;suppress_filters&quot;:false,&quot;cache_results&quot;:true,&quot;update_post_term_cache&quot;:true,&quot;lazy_load_term_meta&quot;:true,&quot;update_post_meta_cache&quot;:true,&quot;posts_per_page&quot;:10,&quot;nopaging&quot;:false,&quot;comments_per_page&quot;:&quot;50&quot;,&quot;no_found_rows&quot;:false,&quot;order&quot;:&quot;DESC&quot;}"
                                                 data-paged="0" data-max="4" data-nonce="4619a941c5"
                                                 data-post_type="video"></div>
                                            @foreach ($related as $video)
                                                <div class="col-xl-3 col-lg-4 col-md-6">
                                                    <article id="post-7602"
                                                             class="post-7602 video type-video status-publish has-post-thumbnail hentry video_cat-adventure">
                                                        <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                            <div class="gen-movie-contain">
                                                                <div class="gen-movie-img">
                                                                    <img
                                                                        src="{{ $video->getFirstMedia('videos')->getUrl('thumb') }}">
                                                                    <div class="gen-movie-add">
                                                                    </div>
                                                                    <div class="gen-movie-action">
                                                                        <a href="http://preview.gentechtreedesign.com/streamlab/video/sefozie-world/"
                                                                           class="gen-button">
                                                                            <i class="fa fa-play"></i>
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                                <div class="gen-info-contain">
                                                                    <div class="gen-movie-info">
                                                                        <h3>
                                                                            <a href="{{ route('video.show', $video->slug) }}">{{ $video->title }}</a></h3>


                                                                    </div>
                                                                    <div class="gen-movie-meta-holder">
                                                                        <ul>
                                                                            <li>
                                                                                Posted On: {{ $video->created_at->diffForHumans() }}
                                                                            </li>
                                                                            <li>
                                                                                Zip: <a href="{{ route('search', $video->zip) }}">{{ $video->zip }}</a>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </article><!-- #post-## -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </article>
                </div><!-- /.content-area --></div>
        </div>
    </div>
</x-frontend.layout>
