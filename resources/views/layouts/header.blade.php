<header class="masthead">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-5">Instagram</h1>
                    <a href="https://kheys.link/r/insta" class="btn btn-outline btn-xl js-scroll-trigger">Follow me</a>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen p-2 pt-4">
                                @if($instagram->media_type == "VIDEO")
                                    <span class="white">{{ $instagram->caption }}</span>
                                    <video width="100%" height="70%" controls preload="metadata">
                                        <source src="{{ $instagram->media_url }}" type="video/mp4">
                                    </video>
                                    <div class="text-center pt-4"><a href="https://kheys.link/r/insta">Kheys Koders</a></div>
                                @else
                                    <span class="white">{{ $instagram->caption }}</span>
                                    <img src="{{ $instagram->media_url }}" class="img-fluid pt-4" alt="">
                                    <div class="text-center pt-4"><a href="https://kheys.link/r/insta">Kheys Koders</a></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
