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
                                            So, about us...
                                        </h5>
                                        <p>
                                            Tired of having your holiday, birthday, or some other special day ruined by
                                            these low-life, degenerates? Yah, so are we!
                                        </p>
                                        <p>
                                            Unfortunately, not everyone has access to a doorbell camera or some other cloud based camera.
                                            Even those of us with a camera, still find it difficult to figure out excactly who that thief is!
                                        </p>
                                        <p>
                                            PackageThieves was designed to appeal to a broader audience by allowing more people to video recorded
                                            video with hope of identifying who that package thief was. In the event you do discover who exactly took
                                            that package off your doorstep, the decision is up to you.
                                        </p>
                                        <ul>
                                            <li>
                                                Handle it civilly by speaking with the thief. Confronting them with video evidence of their
                                                wrongdoing <em><strong>may</strong></em> get your package back.
                                            </li>
                                            <li>
                                                Notify your local police or sheriff department. Even if you or they do not decide to seek criminal
                                                prosecution, they may still be able to help facilitate getting your package back. Of course, this
                                                is entirely based on each department's policies and if they have enough time and staffing to
                                                help in a matter such as this.
                                            </li>
                                            <li>
                                                Yah, I know what you're thinking for this one...probably not the best idea. Just let the scenario
                                                play out in your head and be satisfied with that. &#128540;
                                            </li>
                                        </ul>
                                        <p>
                                            In the end, many shippers and online merchants are very understanding and will readily replace your
                                            package for you.
                                        </p>
                                        <p>
                                            With that, enjoy your stay here, no matter how brief it is, and watch what some people will lower
                                            themselves to in life! You never know who you may recognize!
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
