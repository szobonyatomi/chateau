<section type="hero-slider" data-scroll-section>
    <div class="hero-slider__wrapper">
        <div class="col-12">
            <div class="hero-slider js-hero-slider swiper">
                @php $rows = get_field('sliders'); @endphp
                @if (count($rows) > 1)
                    <div class="hero-slider__actions">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="hero-slider__actions__wrapper position-relative d-flex flex-column">
                                        <div
                                            class="hero-slider__buttons swiper__buttons d-flex flew-row ms-auto align-self-end mt-1 mt-md-2 mt-lg-2 mt-xxl-5 pe-5 pb-3">
                                            <div class="swiper-button-prev">
                                                Précédent
                                            </div>
                                            <div class="swiper-button-next ms-5">
                                                Suivant
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="hero-slider__wrapper swiper-wrapper">
                    @if ($rows)
                        @foreach ($rows as $row)
                            <div class="swiper-slide">
                                @php $image = $row['image']; @endphp
                                <div class="hero-slider__image">
                                    <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}" class="img-fluid">
                                </div>
                                @if ($row['text'])
                                    <div class="hero-slider__content container">
                                        <div class="row">
                                            <div class="col-12 col-md-11 offset-0 offset-md-1">
                                                <h2>{!! $row['text'] !!}</h2>
                                                @if ($row['action'])
                                                    @php $link = $row['action']; @endphp
                                                    <a href="{{ $link['url'] }}" title="{{ $link['title'] }}"
                                                        target="{{ $link['target'] }}">{{ $link['title'] }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
