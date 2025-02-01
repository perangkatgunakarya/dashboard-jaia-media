@extends('layouts.landing-page')

@section('content')
    <main id="media-consulting">
        <section id="jumbotron">
            <div class="jumbotron-wrapper" style="background-image: url({{ asset('/img/jumbotron/business-consulting.jpg') }})">
                <h1 class="jumbotron-title">JAIA BUSINESS CONSULTING</h1>
            </div>
        </section>

        <section id="overview">
            <div class="container">
                <div class="overview-wrapper" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="overview-title">Experienced Culinary and Digital Business Consultant.</h3>
                    <p class="overview-content"><strong>JAIA Business Consulting</strong> is a trusted business consultancy specializing in the culinary and digital sectors. We help clients develop tailored business strategies, optimize operations, and enhance their digital presence. With a focus on innovation and industry insights, we provide expert guidance to help businesses thrive in the competitive culinary and digital landscapes. Our mission is to empower your business with the right tools and strategies for long-term success.</p>
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
                                        <p class="card-value">Transforms Ideas into Reality</p>
                                    </div>
                                </div>
                            </li>
                            <li class="advantage-item splide__slide">
                                <div class="advantage-card">
                                    <div class="card-main">
                                        <div class="card-icon">
                                            <img class="icon" src="{{ asset('/img/icon/bullseye.png') }}" alt="Icon" style="margin-right: -1.125rem" />
                                        </div>
                                        <p class="card-value">Marketing Strategies for Market Dominance</p>
                                    </div>
                                </div>
                            </li>
                            <li class="advantage-item splide__slide">
                                <div class="advantage-card">
                                    <div class="card-main">
                                        <div class="card-icon">
                                            <img class="icon" src="{{ asset('/img/icon/to-do-list.png') }}" alt="Icon" style="margin-left: -2px" />
                                        </div>
                                        <p class="card-value">Efficient and Reliable Operational Management</p>
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
