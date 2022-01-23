<x-frontend.layout>
    <x-slot name="title">
        Frequently Asked Questions
    </x-slot>
    <!-- breadcrumb -->
    <div class="gen-breadcrumb" style="background-image: url('/images/background/asset-25.jpeg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                Frequently Asked Questions
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
                                        <h5 class="gen-blog-title">
                                            You have questions...We have answers...maybe
                                        </h5>
                                        <ul>
                                            <li class="mt-5">
                                                <h6>So why did you build this website anyway?</h6>
                                                <p>Most people have seen the videos, where the person walks up to your
                                                    door, grabs the package and then
                                                    within less than a minute, usually gone. They're seen on video, a
                                                    few poeple look and then it is out of
                                                    mind. PackageThieves, was designed to aggregate all those videos and
                                                    make them searchable via tags and location, there by
                                                    hopefully making it easier for someone to identify the asshat in the
                                                    video.</p>
                                            </li>
                                            <li class="mt-5">
                                                <h6>
                                                    Do you have any affilation with Ring, Nest or the like?
                                                </h6>
                                                <p>Nope, not at all. The site is entirely self funded (for now).</p>
                                            </li>
                                            <li class="mt-5">
                                                <h6>
                                                    What information do you collect from me when I post my video?
                                                </h6>
                                                <p>
                                                    To prevent spam, we ask people to register for an account. During the account creation process
                                                    we collect a username and email address...that's it. When you post a video, the only identifying
                                                    information we post, is the zip code you entered into your profile. We <strong>never</strong>
                                                    display your real name or email address to anyone.
                                                </p>
                                            </li>
                                            <li class="mt-5">
                                                <h6>
                                                    Why is my zip code important?
                                                </h6>
                                                <p>
                                                    Setting your zip code in your profile allows us to notify you if another video is posted
                                                    matching that zip code.
                                                </p>
                                            </li>
                                            <li class="mt-5">
                                                <h6>
                                                    What are tags?
                                                </h6>
                                                <p>
                                                    Tags are comnpletely up to you. They are a means of providing additional identifying
                                                    information about the video. For example, maybe you package thief has red hair. Using the tag
                                                    "red hair" would be helpful. The more people that use the tag "red hair" make it so there
                                                    are more videos to find with that tag, and hopefully identifying who the thief is and linking them
                                                    to more thefts.
                                                </p>
                                            </li>
                                            <li class="mt-5">
                                                <h6>
                                                    Can we post other videos that are more related to neighborhood safety issues?
                                                </h6>
                                                <p>
                                                    Those videos can certainly be helpful to those living in that neighborhood. However, we don't
                                                    want them here as we are trying to be exclusive to package thieves. Adding different content would
                                                    muddy the waters, so to speak.
                                                </p>
                                            </li>
                                            <li class="mt-5">
                                                <h6>
                                                    How do I get my video featured?
                                                </h6>
                                                <p>
                                                    We occasionally see a video that is noteworthy and will feature it ourselves. If you think we
                                                    may have missed yours and it is noteworthy, send us a <a
                                                        href="{{ route('contact') }}">contact</a> message and we will take a look.
                                                </p>
                                            </li>
                                        </ul>
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
