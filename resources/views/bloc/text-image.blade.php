<section type="text-image" data-scroll-section>
    <div class="container ">
        <div class="row has-animation-x-re " data-scroll data-scroll-class="animate-item-x-re" data-scroll-repeat>
            <div class="col-12 col-lg-6 p-3 p-lg-5 has-animation-x-re__item">
                @if (get_field('content'))
                    <div>{!! get_field('content') !!}</div>
                @endif
            </div>
            <div class="col-12 col-lg-6 p-3 p-lg-5 has-animation-x" data-scroll data-scroll-class="animate-item-x"
                data-scroll-repeat>
                @if (get_field('image'))
                    @php
                        $img = get_field('image');
                    @endphp
                    <img src="{!! $img['url'] !!}" alt="{!! $img['title'] !!}" class="has-animation-x__item">
                @endif
            </div>
        </div>
    </div>
</section>
