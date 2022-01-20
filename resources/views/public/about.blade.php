<x-layout>
    <x-slot name="title">
        About Us
    </x-slot>
    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('/images/background/asset-25.jpeg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                About Us
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
                </div>
                <div class="col-xl-9 col-md-12 order-1 order-xl-2">
                    <div class="gen-blog gen-blog-col-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="gen-blog-post">
                                    <div class="gen-blog-contain">
                                        <h5 class="gen-blog-title">
                                            Yup, this is the about page...
                                        </h5>
                                        <p>
                                            Coming soon..
                                        </p>
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
</x-layout>
