@extends('layouts.landing-page')

@section('content')
    <main id="media-consulting">
        <section id="jumbotron">
            <div class="jumbotron-wrapper" style="background-image: url('{{ asset('storage/' . $ownedVenue->jumbotron_url) }}')">
                <h1 class="jumbotron-title">
                    <img src="{{ asset('storage/' . $ownedVenue->logo_url) }}" alt="{{ "$ownedVenue->name Logo" }}">
                </h1>
            </div>
        </section>

        <section id="introduce">
            <div class="introduce-wrapper" data-aos="fade-right" data-aos-duration="1000">
                <div class="introduce-content">
                    <div class="introduce-card">
                        <p class="introduce-tagline">Your Daily Comfort Food</p>
                        <p class="introduce-detail">Experience unique flavors with our ever-evolving seasonal menu, offering authentic taste in a warm, family-friendly atmosphereExperience unique flavors with our ever-evolving seasonal menu, offering authentic taste in a warm, family-friendly atmosphere.</p>
                        <div class="introduce-socmed">
                            <a class="socmed-link" href="https://www.instagram.com/padmasoc/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a class="socmed-link" href="https://www.tiktok.com/@padmasoc?_t=8og5eclhwci&_r=1">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            <a class="socmed-link" href="https://maps.app.goo.gl/AFd4kiq77R28YNdYA">
                                <i class="fa-solid fa-map-pin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="introduce-potrait">
                        <img src="{{ asset('storage/' . $ownedVenue->overview_image_url) }}" alt="Overview Image" />
                    </div>
                </div>
            </div>
        </section>

        <section id="seasonal">
            <div class="container">
                <x-venue-gallery :galleries="$ownedVenue->galleries"></x-venue-gallery>
            </div>
        </section>

        <section id="statistic" style="background-image: url({{ asset('/img/illustrations/statistic-business.png') }})">
            <div class="container">
                <div class="statistic-wrapper">
                    <ul class="statistic-list">
                        <li class="statistic-item">
                            <div class="counter">
                                <span class="value" data-counter="{{ $ownedVenue->monthly_customer }}">{{ $ownedVenue->monthly_customer }}</span>
                                <span class="plus">+</span>
                            </div>
                            <h5 class="title">Monthly<br />Customer</h5>
                        </li>
                        <li class="statistic-item">
                            <div class="counter">
                                <span class="value" data-counter="{{ $ownedVenue->daily_revenue }}">{{ $ownedVenue->daily_revenue }}</span>
                                <span class="plus">Mil+</span>
                            </div>
                            <h5 class="title">Daily<br />Revenue</h5>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="review">
            <div class="container">
                <div class="review-wrapper splide" data-aos="fade-right" data-aos-duration="1000">
                    <div class="review-header">
                        <h2 class="review-title">Tasteful Stories</h2>
                        <div class="splide__arrows arrows review-nav">
                            <button type="button" class="splide__arrow splide__arrow--prev left-arrow"><i class="fa-solid fa-angles-left"></i></button>
                            <button type="button" class="splide__arrow splide__arrow--next right-arrow"><i class="fa-solid fa-angles-right"></i></button>
                        </div>
                    </div>
                    <div class="splide__track">
                        <ul class="review-list splide__list">
                            <li class="review-item splide__slide">
                                <div class="review-card">
                                    <div class="card-content">
                                        <p class="review">Business consulting services helped improve company efficiency and growth through expert analysis and practical solutions</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-user">
                                            <span class="name">Andi Pratama</span>
                                            <span class="company">PT. Sukses Abadi</span>
                                        </div>
                                        <div class="stars" data-value="5"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="review-item splide__slide">
                                <div class="review-card">
                                    <div class="card-content">
                                        <p class="review">Business consulting services enhance company efficiency and growth through expert analysis and practical solutions</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-user">
                                            <span class="name">Rina Wijaya</span>
                                            <span class="company">PT. Maju Bersama</span>
                                        </div>
                                        <div class="stars" data-value="5"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="review-item splide__slide">
                                <div class="review-card">
                                    <div class="card-content">
                                        <p class="review">By offering expert analysis and actionable strategies, consulting services help businesses improve efficiency and achieve growth.</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-user">
                                            <span class="name">Dewi Lestari</span>
                                            <span class="company">PT. PT. Mitra Sejahtera</span>
                                        </div>
                                        <div class="stars" data-value="5"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="review-item splide__slide">
                                <div class="review-card">
                                    <div class="card-content">
                                        <p class="review">Consulting services for businesses improve operational efficiency and foster growth by providing expert analysis and actionable solutions</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-user">
                                            <span class="name">Budi Santoso</span>
                                            <span class="company">PT. Karya Sejahtera</span>
                                        </div>
                                        <div class="stars" data-value="5"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="contact-content">
                        <div class="contact-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7910.411318283191!2d110.77408500000003!3d-7.552539999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15b26feadca3%3A0x7127f6357d8a8bc8!2sGebyog%20Ndeso!5e0!3m2!1sid!2sid!4v1735912127823!5m2!1sid!2sid" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
                        </div>
                        <div class="contact-card">
                            <h4 class="contact-title">Get Here Now</h4>
                            <address class="contact-detail">
                                <div class="address">Jl. Monumen 45 No.8, Setabelan, Kec. Banjarsari, Kota Surakarta</div>
                                <div class="open-hours">Wed - Mon | 3.00 - 9.00 PM</div>
                            </address>
                            <div class="contact-link">
                                <button class="contact-button">Let's Chat!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            AOS.init();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new Splide('#seasonal .seasonal-wrapper', {
                arrows: false,
                perPage: 2,
                start: 1,
                focus: 'center',
                trimSpace: false,
                updateOnMove: true,
                isNavigation: true,
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        perPage: 3,
                    },
                    768: {
                        perPage: 4,
                        start: 2,
                    }
                }
            }).mount();

            new Splide('#review .review-wrapper', {
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        gap: '3rem',
                        perPage: 2,
                    },
                    1024: {
                        perPage: 2,
                    },
                    1280: {
                        perPage: 3,
                    },
                },
            }).mount();
        });
    </script>
@endsection
