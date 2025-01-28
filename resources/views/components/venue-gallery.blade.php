<div class="seasonal-wrapper splide" data-aos="fade-up" data-aos-duration="1000">
    <h1 class="seasonal-title">Our Seasonal Favourites</h1>
    <div class="splide__track">
        <ul class="seasonal-list splide__list">
            @foreach ($galleries as $gallery)
                <div class="seasonal-item splide__slide">
                    <div class="seasonal-card">
                        <img class="seasonal-potrait" src="{{ asset('storage/' . $gallery) }}" alt="" />
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
</div>
