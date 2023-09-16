@extends('layouts.app')

@section('content')

<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Kheys Koders on socials networks</h2>
            <p class="text-muted">Check out our latest news!</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div class="device">
                            <div class="screen p-2 pt-4">
                                <span class="white" style="color:#fff;">What's crackin !? #confinement</span>
                                <video width="100%" height="70%" controls preload="metadata">
                                    <source src="{{ URL::asset('/assets/video/gadget_remix.mp4') }}" type="video/mp4">
                                </video>
                                <div class="text-center pt-4"><a href="https://kheys.link/r/insta">Kheys Koders</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-screen-smartphone text-primary"></i>
                                <h3>Soundcloud</h3>
                                <a target="_blank" href="https://kheys.link/r/sc">
                                    <i class="fab fa-soundcloud"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-camera text-primary"></i>
                                <h3>Twitter</h3>
                                <a target="_blank" href="https://kheys.link/r/tw">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-present text-primary"></i>
                                <h3>Facebook</h3>
                                <a target="_blank" href="https://kheys.link/r/fb">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-lock-open text-primary"></i>
                                <h3>TikTok</h3>
                                <a target="_blank" href="https://kheys.link/r/tiktok">
                                    <i class="fab icon-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact bg-primary" id="contact">
    <div class="container">
        <h2>We
            <i class="fas fa-heart"></i>
            music!</h2>
        <div class="row">
            <div class="col-lg-12 mb-4 mt-4">
                <ul class="list-inline list-social">
                    <li class="list-inline-item social-spotify mb-4">
                        <a target="_blank" href="https://kheys.link/r/spotify" data-toggle="tooltip" data-placement="top" title="Support me on Spotify">
                            <i class="fab icon-spotify"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-itunes mb-4">
                        <a target="_blank" href="https://kheys.link/r/mapple" data-toggle="tooltip" data-placement="top" title="Support me on Itunes/Apple Music">
                            <i class="fab icon-itunes"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-deezer mb-4">
                        <a target="_blank" href="https://kheys.link/r/deezer" data-toggle="tooltip" data-placement="top" title="Support me on Deezer">
                            <i class="fab icon-deezer"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-google-play-music mb-4" data-toggle="tooltip" data-placement="top" title="Support me on Google Play Music">
                        <a target="_blank" href="">
                            <i class="fab icon-google-play-music"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-youtube-music mb-4" data-toggle="tooltip" data-placement="top" title="Support me on Youtube Music">
                        <a target="_blank" href="https://kheys.link/r/myt">
                            <i class="fab icon-youtube-music"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-12 mb-4 mt-4">
                <ul class="list-inline list-social">
                    <li class="list-inline-item social-instagram mb-4">
                        <a target="_blank" href="https://kheys.link/r/insta" data-toggle="tooltip" data-placement="top" title="Follow me on Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-twitter mb-4">
                        <a target="_blank" href="https://kheys.link/r/tw" data-toggle="tooltip" data-placement="top" title="Follow me on Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-facebook mb-4">
                        <a target="_blank" href="https://kheys.link/r/fb" data-toggle="tooltip" data-placement="top" title="Follow me on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-tiktok mb-4">
                        <a target="_blank" href="https://kheys.link/r/tiktok" data-toggle="tooltip" data-placement="top" title="Follow me on TikTok">
                            <i class="fab icon-tiktok"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-soundcloud mb-4">
                        <a target="_blank" href="https://kheys.link/r/sc" data-toggle="tooltip" data-placement="top" title="Follow me on Soundcloud">
                            <i class="fab fa-soundcloud"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-twitch mb-4">
                        <a target="_blank" href="https://kheys.link/r/tv" data-toggle="tooltip" data-placement="top" title="Follow me on Twitch">
                            <i class="fab fa-twitch"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-youtube mb-4">
                        <a target="_blank" href="https://kheys.link/r/yt" data-toggle="tooltip" data-placement="top" title="Follow me on Youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-12 mb-4 mt-4">
            <ul class="list-inline list-social">
                <li class="list-inline-item social-paypal mb-4">
                    <a target="_blank" href="https://kheys.link/r/payme" data-toggle="tooltip" data-placement="top" title="Donation to support me">
                        <i class="fab fa-paypal"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
