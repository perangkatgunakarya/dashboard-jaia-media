<div class="testimonial-wrapper splide" data-aos="fade-right" data-aos-duration="1000">
    <div class="testimonial-header">
        <h2 class="testimonial-title">Tasteful Stories</h2>
        <div class="splide__arrows arrows testimonial-nav">
            <button type="button" class="splide__arrow splide__arrow--prev left-arrow"><i class="fa-solid fa-angles-left"></i></button>
            <button type="button" class="splide__arrow splide__arrow--next right-arrow"><i class="fa-solid fa-angles-right"></i></button>
        </div>
    </div>
    <div class="splide__track">
        <ul class="testimonial-list splide__list">
            @foreach ($testimonials as $testimonial)
                <li class="testimonial-item splide__slide">
                    <div class="testimonial-card">
                        <div class="card-content">
                            <p class="testimonial">{{ $testimonial->testimonial }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="card-user">
                                <span class="name">{{ $testimonial->name }}</span>
                                <span class="company">{{ $testimonial->origin }}</span>
                            </div>
                            <div class="stars" data-value="{{ $testimonial->rating }}"></div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
