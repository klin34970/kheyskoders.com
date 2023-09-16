@extends('layouts.app', ['nav' => false, 'header' => false, 'footer' => false, 'body' => ['class' => 'bg-primary-y', 'style' => 'background:#fdcc52;']])

@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"></nav>
<section class="contact" id="contact">
    <div class="container">
        <div class="section-heading text-center">
            <h2>@KheysKoders</h2>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <ul class="list-inline list-social">
                    <li class="list-inline-item social-instagram mb-4">
                        <a href="https://kheys.link/r/insta">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-twitter mb-4">
                        <a href="https://kheys.link/r/tw">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-facebook mb-4">
                        <a href="https://kheys.link/r/fb">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-soundcloud mb-4">
                        <a href="https://kheys.link/r/sc">
                            <i class="fab fa-soundcloud"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-twitch mb-4">
                        <a href="https://kheys.link/r/tv">
                            <i class="fab fa-twitch"></i>
                        </a>
                    </li>
                    <li class="list-inline-item social-youtube mb-4">
                        <a href="https://kheys.link/r/tv">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
