@extends('layouts.app', ['nav' => false, 'header' => false, 'footer' => false, 'body' => ['class' => 'bg-primary-y', 'style' => 'background:#fdcc52;']])

@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"></nav>
<section class="contact" id="contact">
    <div class="container music-container">
        <div class="section-heading text-center">
            <h2><a target="_blank" class="black" href="https://kheys.link/r/kk" data-toggle="tooltip" data-placement="top" title="Go check my Website">@KheysKoders</a></h2>
        </div>
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
