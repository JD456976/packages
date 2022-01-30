<footer id="gen-footer">
    <div class="gen-footer-style-1">
        <div class="gen-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="" href="{{ route('home') }}">
                                        <img class=""  src="{{ asset('assets/frontend/images/PackageThievesLogo.png') }}" alt="streamlab-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Menu</h4>
                            <div class="menu-explore-container">
                                <ul class="menu">
                                    @foreach ($footerMenu as $item)
                                        <li class="menu-item">
                                            <a href="{{ route('page', $item->slug) }}" aria-current="page">{{ $item->title }}</a>
                                        </li>
                                    @endforeach
                                    <li class="menu-item">
                                        <a href="{{ route('contact') }}" aria-current="page">Contact</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('video.create') }}" aria-current="page">Upload Video</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Our Partners</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Check out some of the great platforms below</p>
                                    <a href="https://nextdoor.com/" target="_blank">
                                        <img src="{{ asset('assets/frontend/images/next-door.png') }}" class="gen-playstore-logo" alt="nextdoor">
                                    </a>
                                    <a href="https://patch.com/" target="_blank">
                                        <img src="{{ asset('assets/frontend/images/patch-logo.png') }}" class="gen-appstore-logo" alt="appstore">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gen-copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                     <span class="gen-copyright"><a target="_blank" href="#"> (c) <?php echo date("Y"); ?> PackageThieves | All Rights
                           Reserved</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
