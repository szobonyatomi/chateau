<section type="gmap">
    <div class="container no-cta">
        <div class="row">
            <div class="col-12 col-md-5 content">
                @if (get_field('text'))
                    {!! get_field('text') !!}
                @endif
            </div>
            @php $rows = get_field('addresses'); @endphp
            @if ($rows)
                <div class="map js-map" data-zoom="10">
                    @foreach ($rows as $row)
                        <div class="marker"
                             data-lat="{!! $row['address']['lat'] !!}"
                             data-lng="{!! $row['address']['lng'] !!}"
                             data-address="{!! $row['address']['address'] !!}"
                             data-title="@if($row['title']){!! $row['title'] !!}@endif"
                             data-url="@if($row['title']){!! $row['url'] !!}@endif"
                        >
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
