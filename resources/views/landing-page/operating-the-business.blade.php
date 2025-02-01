@extends('layouts.landing-page')

@section('content')
    <main id="media-consulting">
        <section id="jumbotron">
            <div class="jumbotron-wrapper" style="background-image: url({{ asset('img/jumbotron/operating-the-business.jpg') }})">
                <h1 class="jumbotron-title">JAIA Operating the Business</h1>
            </div>
        </section>

        <section id="overview">
            <div class="container">
                <div class="overview-wrapper" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="overview-title">Your Restaurant Operations Partner.</h3>
                    <p class="overview-content"><strong>JAIA Operating the Business</strong> is one of the services under <strong>JAIA Establishment</strong>, specializing in optimizing operations for the food and beverage industry. We focus on human resource management, supply chain efficiency, and financial control to help businesses run smoothly and profitably. Our expertise helps streamline your operations, reduce costs, and lay the foundation for sustainable growth in a competitive market.</p>
                </div>
            </div>
        </section>

        <section id="advantage">
            <div class="container-fluid">
                <div class="advantage-wrapper splide" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="advantage-title">What Makes Us Better?</h2>

                    <div class="splide__track" style="position: absolute; width: 100%">
                        <ul class="advantage-list splide__list">
                            <li class="advantage-item splide__slide">
                                <div class="advantage-card">
                                    <div class="card-main">
                                        <div class="card-icon">
                                            <img class="icon" src="{{ asset('/img/icon/idea.png') }}" alt="Icon" />
                                        </div>
                                        <p class="card-value">Centralized Kitchen Efficiency</p>
                                    </div>
                                </div>
                            </li>
                            <li class="advantage-item splide__slide">
                                <div class="advantage-card">
                                    <div class="card-main">
                                        <div class="card-icon">
                                            <img class="icon" src="{{ asset('/img/icon/bullseye.png') }}" alt="Icon" style="margin-right: -1.125rem" />
                                        </div>
                                        <p class="card-value">Product Quality Standardization</p>
                                    </div>
                                </div>
                            </li>
                            <li class="advantage-item splide__slide">
                                <div class="advantage-card">
                                    <div class="card-main">
                                        <div class="card-icon">
                                            <img class="icon" src="{{ asset('/img/icon/to-do-list.png') }}" alt="Icon" style="margin-left: -2px" />
                                        </div>
                                        <p class="card-value">Reduce Costs by Up to 20%</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="splide__pagination" style="top: calc(100% + 220px)"></div>
                </div>
            </div>
        </section>

        <section id="client">
            <div class="container-fluid">
                <div class="client-wrapper" data-aos="fade-right" data-aos-duration="1000">
                    <div class="client-title">
                        <h2>Our Client</h2>
                    </div>
                    <x-client-carousel :clients="$clients"></x-client-carousel>
                </div>
            </div>
        </section>

        <section id="testimonial">
            <div class="container">
                <x-testimonial-carousel :testimonials="$testimonials"></x-testimonial-carousel>
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
                pagination: true,
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

            new Splide('#advantage .advantage-wrapper', {
                mediaQuery: 'min',
                start: 1,
                perPage: 1,
                perMove: 1,
                arrows: false,
                fixedWidth: '270px',
                // pagination: false,
                focus: 'center',
                trimSpace: false,
                gap: '1rem',
                updateOnMove: true,
                padding: {
                    left: '2rem',
                    right: '2rem'
                },
                breakpoints: {
                    640: {
                        gap: '6rem',
                    },
                    768: {
                        fixedWidth: 0,
                        gap: '1.5rem',
                        drag: false,
                        perPage: 3,
                    },
                    1024: {
                        fixedWidth: '307px',
                        gap: '3rem',
                    },
                },
            }).mount();

            new Splide('#testimonial .testimonial-wrapper', {
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
