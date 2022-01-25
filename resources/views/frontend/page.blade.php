<x-frontend.layout>
    <x-slot name="title">
        {{ $page->title }}
    </x-slot>
    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('assets/frontend/images/PackageThievesLogo.png');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                {{ $page->title }}
                            </h1>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- Blog-left-Sidebar -->
    <section class="gen-section-padding-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-12 order-2 order-xl-1 mt-4 mt-xl-0">
                    <div class="widget widget_recent_entries">
                        <h2 class="widget-title">Recent Videos</h2>
                        <ul>
                            @foreach ($recent as $video)
                                <li>
                                    <a href="{{ route('video.show', $video->slug) }}">{{ $video->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget widget_recent_entries">
                        <a class="" href="{{ route('home') }}">
                            <img class=""  src="{{ asset('assets/frontend/images/PackageThievesLogo.png') }}" alt="streamlab-image">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-md-12 order-1 order-xl-2">
                    <div class="gen-blog gen-blog-col-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gen-blog-post">
                                    <div class="gen-blog-contain">
                                        {!! $page->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-left-Sidebar -->
</x-frontend.layout>
