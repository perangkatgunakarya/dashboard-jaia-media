<div class="splide" role="group" data-aos="fade-right" data-aos-duration="1000">
    <div class="client-content splide__track">
        <ul class="client-carousel splide__list">
            @foreach ($clients as $client)
                <li class="carousel-item splide__slide">
                    <div class="carousel-card">
                        <div class="card-left">
                            <div class="card-background" style="background-image: url({{ asset('storage/' . $client->background_url) }})">
                                <div class="card-logo">
                                    <img src="{{ asset('storage/' . $client->logo_url) }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="card-right">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3>{{ Str::words($client->name, 1, '') }}</h3>
                                    <h2>{{ Str::substr($client->name, strlen(Str::words($client->name, 1, ''))) }}</h2>
                                </div>
                            </div>
                            <div class="card-detail">
                                <p>{{ $client->description }}</p>
                            </div>
                            <div class="card-footer">
                                <a class="card-link" target="_blank" href="{{ $client->socmed_url }}">
                                    <span>Explore {{ $client->name }}</span>
                                    <div class="lines">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
