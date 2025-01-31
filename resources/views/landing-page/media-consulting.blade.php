@extends('layouts.landing-page')

@section('content')
    <main id="media-consulting">
        <section id="jumbotron">
            <div class="jumbotron-wrapper" style="background-image: url({{ asset('/img/jumbotron/media-consulting.jpeg') }})">
                <h1 class="jumbotron-title">JAIA MEDIA CONSULTING</h1>
            </div>
        </section>

        <section id="overview">
            <div class="container">
                <div class="overview-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <p class="overview-content">JAIA Media Consulting is a dynamic and innovative media consultancy firm, and a sister company of JAIA Establishment, a renowned organization known for its strategic insight and business excellence. With a unique blend of creative and analytical expertise, JAIA Media Consulting is dedicated to helping clients build powerful media strategies, optimize their digital presence, and achieve effective brand communication.</p>
                </div>
            </div>
        </section>

        <section id="client">
            <div class="container-fluid">
                <div class="client-wrapper">
                    <div class="client-title">
                        <h2>Our Client</h2>
                    </div>
                    <x-client-carousel :clients="$topClients"></x-client-carousel>
                    <div class="client-more" data-aos="fade-right" data-aos-duration="1000">
                        <div class="container">
                            @if (!$anotherClients->isEmpty())
                                <h3 class="more-title">More of Our Valued Clients</h3>
                                <ul class="client-list marquee">
                                    @foreach ($anotherClients as $client)
                                        <li class="client-item marquee-item">
                                            <a href="{{ $client->socmed_url }}" target="_blank">
                                                <img src="{{ asset('storage/' . $client->logo_url) }}" alt="{{ $client->name . 'Logo' }}" />
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="plan">
            <div class="container-fluid">
                <div class="plan-wrapper">
                    <div class="plan-title">
                        <h2>Have a Thought?</h2>
                    </div>

                    <div class="plan-service">
                        <ul class="service-list">
                            <li class="service-item">
                                <a class="service-button active" data-category="social-media-management">Social Media Management</a>
                            </li>
                            <li class="service-item">
                                <a class="service-button" data-category="content-creation">Content Creation</a>
                            </li>
                            <li class="service-item">
                                <a class="service-button" data-category="social-media-advertising">Social Media Advertising</a>
                            </li>
                            <li class="service-item">
                                <a class="service-button" data-category="web-design-and-development">Web Design and Development</a>
                            </li>
                        </ul>
                    </div>

                    <div class="category-wrapper" data-aos="fade-down" data-aos-duration="1000">
                        <div class="plan-category active" id="social-media-management">
                            <div class="splide">
                                <div class="splide__arrows arrows">
                                    <button class="splide__arrow splide__arrow--prev prev-arrow"><i class="fa-solid fa-angle-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next next-arrow"><i class="fa-solid fa-angle-right"></i></button>
                                </div>
                                <div class="splide__track">
                                    <ul class="category-list splide__list">
                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Trial</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">500.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Coba layanan kami dengan fitur dasar yang menarik untuk social media anda</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">9 Content Feed</span>
                                                                <small class="benefit-detail">Foto disiapkan dari client</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Revisi</span>
                                                                <small class="benefit-detail">Max 1 per week</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">1x Visit Lokasi</span>
                                                                <small class="benefit-detail">Free Photo Product</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Copy Writing</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Relevan Hastag</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Post Scheduling Strategy</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Admin Posting</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Approval Timeline</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Content Story</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Monthly Report</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Suport</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Respon Komentar</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Management Event</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Starter</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">1.500.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Tingkatkan kehadiran online dengan konten dan strategi dasar.</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">15 Content Feed</span>
                                                                <small class="benefit-detail">Max. 4 Reels Content</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">12 Content Story</span>
                                                                <small class="benefit-detail">Opening, Close, Peringatan</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">2x Visitt Lokasi</span>
                                                                <small class="benefit-detail">Free Photo Product</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Copy Writing</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Relevan Hastag</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Post Scheduling Strategy</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Admin Posting</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Approval Timeline</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Content Story</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Monthly Report</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Suport</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Respon Komentar</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Management Event</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Decacorn</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">2.800.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Ekspansi jangkauan dengan konten lebih banyak dan analisis mendalam.</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">20 Content Feed</span>
                                                                <small class="benefit-detail">Max. 4 Reels Content</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">20 Content Story</span>
                                                                <small class="benefit-detail">Opening, Close, Peringatan</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">2x Visit Lokasi</span>
                                                                <small class="benefit-detail">Free Photo Product</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Copy Writing</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Relevan Hastag</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Post Scheduling Strategy</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Admin Posting</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Approval Timeline</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Content Story</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Monthly Report</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Suport</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Respon Komentar</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Management Event</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Unicorn</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">4.500.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Solusi lengkap untuk manajemen media sosial yang handal dan professional</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">20 Content Feed</span>
                                                                <small class="benefit-detail">Max. 4 Reels Content</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">20 Content Story</span>
                                                                <small class="benefit-detail">Opening, Close, Peringatan</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">2x Visit Lokasi</span>
                                                                <small class="benefit-detail">Free Photo Product</small>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Copy Writing</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Relevan Hastag</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Post Scheduling Strategy</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Admin Posting</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Approval Timeline</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Revisi</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Monthly Report</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Suport</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Respon Komentar</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Support Management Event</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="plan-category" id="content-creation">
                            <div class="splide">
                                <div class="splide__arrows arrows">
                                    <button class="splide__arrow splide__arrow--prev prev-arrow"><i class="fa-solid fa-angle-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next next-arrow"><i class="fa-solid fa-angle-right"></i></button>
                                </div>
                                <div class="splide__track">
                                    <ul class="category-list splide__list">
                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Branding Design</h3>
                                                    <div class="category-price">
                                                        <span class="start-from">Start from</span>
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">500.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Solusi lengkap untuk kebutuhan branding bisnis anda.</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Logo</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Brand Book</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Company Profile</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Product Label</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Merchandise</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Kartu Nama</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Kop Surat</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Graphic Design</h3>
                                                    <div class="category-price">
                                                        <span class="start-from">Start from</span>
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">50.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Desain grafis berkualitas untuk media sosial anda.</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Konten Instagram</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Story Instagram</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Banner Facebook</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Motion Design</h3>
                                                    <div class="category-price">
                                                        <span class="start-from">Start from</span>
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">150.000</span>
                                                        </div>
                                                    </div>
                                                    <p class="category-description">Konten motion graphic menarik untuk Instagram anda.</p>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Design Motion Graphic Konten Instagram Feed</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Jasa Design Motion Graphic Kontent Instagram Story</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="splide second-carousel">
                                <div class="splide__arrows arrows">
                                    <button class="splide__arrow splide__arrow--prev prev-arrow"><i class="fa-solid fa-angle-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next next-arrow"><i class="fa-solid fa-angle-right"></i></button>
                                </div>
                                <div class="splide__track">
                                    <ul class="category-list splide__list">
                                        <li class="category-item splide__slide">
                                            <div class="category-card two-column">
                                                <div class="category-header">
                                                    <h3 class="category-title">Video Product</h3>
                                                </div>
                                                <div class="left-column">
                                                    <div class="category-header">
                                                        <div class="category-price">
                                                            <span class="start-from">Start from</span>
                                                            <div class="price">
                                                                <span class="rupiah">Rp</span>
                                                                <span class="value">150.000</span>
                                                            </div>
                                                        </div>
                                                        <p class="category-description">30 - 60 seconds duration</p>
                                                    </div>
                                                    <div class="category-header">
                                                        <div class="category-price">
                                                            <span class="start-from">Start from</span>
                                                            <div class="price">
                                                                <span class="rupiah">Rp</span>
                                                                <span class="value">700.000</span>
                                                            </div>
                                                        </div>
                                                        <p class="category-description">30 - 60 seconds duration</p>
                                                        <p class="category-detail">(with professional equipment)</p>
                                                    </div>
                                                </div>
                                                <div class="right-column">
                                                    <div class="category-header">
                                                        <div class="category-price">
                                                            <span class="start-from">Start from</span>
                                                            <div class="price">
                                                                <span class="rupiah">Rp</span>
                                                                <span class="value">2.000.000</span>
                                                            </div>
                                                        </div>
                                                        <p class="category-description">30 - 60 seconds duration</p>
                                                        <p class="category-detail">(with professional equipment and drone)</p>
                                                    </div>
                                                    <div class="category-header">
                                                        <div class="category-price">
                                                            <span class="start-from">Start from</span>
                                                            <div class="price">
                                                                <span class="rupiah">Rp</span>
                                                                <span class="value">700.000</span>
                                                            </div>
                                                        </div>
                                                        <p class="category-description">Drone session</p>
                                                        <p class="category-detail">(2 Batteries + pilot)</p>
                                                    </div>
                                                </div>
                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Branding Design</h3>
                                                </div>
                                                <div class="left-column">
                                                    <div class="category-header">
                                                        <div class="category-price">
                                                            <span class="start-from">Start from</span>
                                                            <div class="price">
                                                                <span class="rupiah">Rp</span>
                                                                <span class="value">1.500.000</span>
                                                            </div>
                                                        </div>
                                                        <p class="category-description">For 3+ hours</p>
                                                    </div>
                                                    <div class="category-header">
                                                        <div class="category-price">
                                                            <span class="start-from">Start from</span>
                                                            <div class="price">
                                                                <span class="rupiah">Rp</span>
                                                                <span class="value">30.000</span>
                                                            </div>
                                                        </div>
                                                        <p class="category-description">Per product, 3 angle</p>
                                                        <p class="category-detail">(min. 10 product)</p>
                                                    </div>
                                                </div>
                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="plan-category" id="social-media-advertising">
                            <div class="splide">
                                <div class="splide__arrows arrows">
                                    <button class="splide__arrow splide__arrow--prev prev-arrow"><i class="fa-solid fa-angle-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next next-arrow"><i class="fa-solid fa-angle-right"></i></button>
                                </div>
                                <div class="splide__track">
                                    <ul class="category-list splide__list">
                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Aware Increase</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">1.800.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Periode Iklan 30 Hari</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Pengembangan Konten Iklan</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Free Design Konten (Graphic)</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Estimasi 500.000 Reach</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Report & Analisa Hasil Iklan</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Rekomendasi Strategi</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Buzzer Support</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Support</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Trafic Increase</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">2.800.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Periode Iklan 30 Hari</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Pengembangan Konten Iklan</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Free Design Konten (Graphic)</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Estimasi 500.000 Reach</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Report & Analisa Hasil Iklan</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Rekomendasi Strategi</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Buzzer Support</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-minus minus"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Support</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Viral Support</h3>
                                                    <div class="category-price">
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">7.000.000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Periode Iklan 30 Hari</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Pengembangan Konten Iklan</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Free Design Konten (Graphic)</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Estimasi 500.000 Reach</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Report & Analisa Hasil Iklan</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Rekomendasi Strategi</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Buzzer Support</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">KOL Support</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a class="category-button" href="#">Make a call</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="plan-category" id="web-design-and-development">
                            <div class="splide">
                                <div class="splide__arrows arrows">
                                    <button class="splide__arrow splide__arrow--prev prev-arrow"><i class="fa-solid fa-angle-left"></i></button>
                                    <button class="splide__arrow splide__arrow--next next-arrow"><i class="fa-solid fa-angle-right"></i></button>
                                </div>
                                <div class="splide__track">
                                    <ul class="category-list splide__list">
                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Website Design</h3>
                                                    <div class="category-price">
                                                        <span class="start-from">Start from</span>
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">500.000</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Custom Design</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">User-Centered Design</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">SEO-Optimized Design</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a href="#" class="category-button">Make a call</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="category-item splide__slide">
                                            <div class="category-card">
                                                <div class="category-header">
                                                    <h3 class="category-title">Website Development</h3>
                                                    <div class="category-price">
                                                        <span class="start-from">Start from</span>
                                                        <div class="price">
                                                            <span class="rupiah">Rp</span>
                                                            <span class="value">1.500.000</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="category-benefit">
                                                    <ul class="benefit-list">
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Custom Website Development</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">SEO Integration</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Responsive Development</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Website Deployment</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Free Hostring for the FIrst Year</span>
                                                            </div>
                                                        </li>
                                                        <li class="benefit-item">
                                                            <i class="fa-solid fa-circle-check check"></i>
                                                            <div class="benefit-content">
                                                                <span class="benefit-title">Free Maintenance for 3 Months</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="category-footer">
                                                    <a href="#" class="category-button">Make a call</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
            new Splide('#client .client-wrapper .splide', {
                mediaQuery: 'min',
                start: 1,
                arrows: false,
                updateOnMove: true,
                perPage: 1,
                gap: '1rem',
                padding: {
                    left: '1rem',
                    right: '1rem'
                },
                breakpoints: {
                    640: {
                        speed: 600,
                        focus: 'center',
                        fixedWidth: '85%',
                        isNavigation: true,
                        trimSpace: false,
                        dragMinThreshold: 250,
                    },
                    768: {
                        speed: 600,
                        fixedWidth: '80%',
                    },
                    1024: {
                        fixedWidth: '65%',
                    },
                    1280: {
                        fixedWidth: '51%',
                    },
                    1536: {
                        fixedWidth: '45%',
                    },
                },
            }).mount();

            new Splide('#plan #social-media-management .splide', {
                pagination: true,
                drag: false,
                perPage: 1,
                perMove: 1,
                gap: '1rem',
                padding: {
                    left: '1rem',
                    right: '1rem'
                },
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        perPage: 2,
                    },
                    1024: {
                        perPage: 3,
                    },
                    1280: {
                        pagination: false,
                        arrows: false,
                        perPage: 4,
                    },
                },
            }).mount();

            new Splide('#plan #content-creation .splide', {
                pagination: true,
                drag: false,
                perPage: 1,
                perMove: 1,
                gap: '1rem',
                padding: {
                    left: '1rem',
                    right: '1rem'
                },
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        perPage: 2,
                    },
                    1024: {
                        perPage: 3,
                        arrows: false,
                        pagination: false,
                    },
                    1280: {
                        start: 1,
                        focus: 'center',
                        perPage: 4,
                    },
                },
            }).mount();

            new Splide('#plan #content-creation .splide.second-carousel', {
                pagination: true,
                drag: false,
                padding: {
                    left: '1rem',
                    right: '1rem'
                },
                gap: '1rem',
                pagination: true,
                mediaQuery: 'min',
                breakpoints: {
                    1024: {
                        arrows: false,
                        autoWidth: true,
                        pagination: false,
                    },
                },
            }).mount();

            new Splide('#plan #social-media-advertising .splide', {
                paginiation: true,
                drag: false,
                perPage: 1,
                perMover: 1,
                gap: '1rem',
                padding: {
                    left: '1rem',
                    right: '1rem'
                },
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        perPage: 2,
                    },
                    1024: {
                        perPage: 3,
                        arrows: false,
                        pagination: false,
                    },
                    1280: {
                        focus: 'center',
                        start: 1,
                        perPage: 4,
                    },
                },
            }).mount();

            new Splide('#plan #web-design-and-development .splide', {
                pagination: true,
                perPage: 1,
                perMove: 1,
                drag: false,
                gap: '1rem',
                padding: {
                    left: '1rem',
                    right: '1rem'
                },
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        pagination: false,
                        arrows: false,
                        perPage: 2,
                    },
                    1024: {
                        perPage: 3,
                    },
                    1280: {
                        perPage: 4,
                    },
                },
            }).mount();
        });
    </script>
@endsection
