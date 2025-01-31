@extends('layouts.landing-page')

@section('content')
    <main id="home">
        <section id="jumbotron">
            <div class="container">
                <div class="jumbotron-wrapper" style="background-image: url({{ asset('/img/jumbotron/home.png') }})">
                    <div class="slogan">
                        <div class="slogan-1">AS <span>Busy</span></div>
                        <div class="slogan-2">AS IT'S <span>GETS</span></div>
                    </div>
                    <div class="name-brand">
                        <div>JAIA</div>
                        <div>ESTABLISHMENT</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="overview">
            <div class="container">
                <div class="overview-wrapper">
                    <div class="overview-illustration" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('/img/illustrations/overview.jpg') }}" alt="Overview" />
                    </div>
                    <div class="overview-content">
                        <h3 class="overview-title">KNOW US MORE</h3>
                        <div class="overview-main" data-aos="fade-right" data-aos-duration="1000">
                            <p class="overview-text">JAIA Establishment is a multifaceted holding company dedicated to fostering growth and innovation across diverse sectors. With its headquarters in Central Java, Indonesia, JAIA Establishment is the proud parent company of two dynamic sister entities: a social media consulting firm and a food and beverage (F&B) business.</p>
                            <div class="overview-socmed">
                                <span></span>
                                <a class="overview-socmed-link" href="https://www.instagram.com/jaiamedia/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a class="overview-socmed-link" href="https://www.tiktok.com/@jaia.media?_t=ZS-8sm9518Ab6u&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                <a class="overview-socmed-link" href="#" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                <a class="overview-socmed-link" href="mailto:jaiamedia@gmail.com"><i class="fa-regular fa-envelope" target="_blank"></i></a>
                            </div>
                        </div>
                        <div class="overview-schedule">
                            <a class="overview-button" href="https://wa.me/6285600011107" target="_blank"><i class="fa-solid fa-phone"></i>Schedule a Call </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="vision">
            <div class="container">
                <ul class="vision-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <li class="vision-item">
                        <div class="vision-title">OUR VISION</div>
                        <div class="vision-value">is become the best solution for digital needs in the era of digitalization</div>
                    </li>
                    <li class="vision-item">
                        <div class="vision-title">BRING THE MISSION</div>
                        <div class="vision-value">to be a creative company engaged in digital media with the best service to potential partners to achieve goals</div>
                    </li>
                    <li class="vision-item">
                        <div class="vision-title">ADAPT THE CULTURE</div>
                        <div class="vision-value">speed, innovation, domination, and quality</div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="marquee">
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
            <div class="marquee-text"><span class="bold">JAIA</span> ESTABLISHMENT</div>
        </div>

        <section id="client">
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track client-wrapper">
                    <ul class="splide__list client-list">
                        @foreach ($clients as $client)
                            <li class="splide__slide client-item">
                                <img src="{{ asset('storage/' . $client->logo_url) }}" alt="atlantis-logo" />
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section id="service">
            <div class="container">
                <div class="service-wrapper" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="service-title">OUR SERVICE</h2>

                    <ul class="service-list">
                        <li class="service-item">
                            <div class="service-card" style="background-image: url({{ asset('/img/services/service1.jpeg') }})">
                                <h4 class="service-name">Media Consulting</h4>
                                <a class="service-link" href="/media-consulting">
                                    <span>Explore More</span>
                                    <div class="lines">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-card" style="background-image: url({{ asset('/img/services/service2.jpeg') }})">
                                <h4 class="service-name">Business Consulting</h4>
                                <a class="service-link" href="/business-consulting">
                                    <span>Explore More</span>
                                    <div class="lines">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-card" style="background-image: url({{ asset('/img/services/service3.png') }})">
                                <h4 class="service-name">Owned Venue</h4>
                                <a class="service-link" href="/venue/padma">
                                    <span>Explore More</span>
                                    <div class="lines">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-card" style="background-image: url({{ asset('/img/services/service4.png') }})">
                                <h4 class="service-name">Operating The Business</h4>
                                <a class="service-link" href="/operating-the-business">
                                    <span>Explore More</span>
                                    <div class="lines">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="statistic">
            <div class="container">
                <div class="statistic-wrapper">
                    <ul class="statistic-list">
                        <li class="statistic-item">
                            <div class="counter">
                                <span class="value" data-counter="{{ $home->years_of_expertise }}">{{ $home->years_of_expertise }}</span>
                                <span class="plus">+</span>
                            </div>
                            <h5 class="title">Years of<br />Expertise</h5>
                        </li>
                        <li class="statistic-item">
                            <div class="counter">
                                <span class="value" data-counter="{{ $home->successful_campaigns }}">{{ $home->successfl_campaigns }}</span>
                                <span class="plus">+</span>
                            </div>
                            <h5 class="title">Successful<br />Campaigns</h5>
                        </li>
                        <li class="statistic-item">
                            <div class="counter">
                                <span class="value" data-counter="{{ $home->served_clients }}">{{ $home->served_clients }}</span>
                                <span class="plus">+</span>
                            </div>
                            <h5 class="title">Served<br />Clients</h5>
                        </li>
                        <li class="statistic-item">
                            <div class="counter">
                                <span class="value" data-counter="{{ $home->positive_testimonials }}">{{ $home->positive_testimonials }}</span>
                                <span class="plus">+</span>
                            </div>
                            <h5 class="title">Positive<br />Testimonials</h5>
                        </li>
                    </ul>
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
            new Splide('#client .splide', {
                type: 'loop',
                perMove: 1,
                autoWidth: true,
                gap: '5rem',
                focus: 'center',
                direction: 'rtl',
                interval: 5000,
                autoplay: true,
                arrows: false,
                pagination: false,
                mediaQuery: 'min',
                breakpoints: {
                    640: {
                        gap: '7rem',
                        
                    },
                    768: {
                        gap: '6rem',
                        
                    },
                    1024: {
                        gap: '8rem',
                        
                    },
                    1536: {
                        gap: '12rem',
                        
                    },
                    2000: {
                        gap: '18em',
                    },
                },
            }).mount();
        });
    </script>
@endsection
