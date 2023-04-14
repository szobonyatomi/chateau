<footer>
    <div class="container mx-auto">
        <div class="flex flex-wrap ">
            <div class="w-full pl-4 pr-4 md:w-1/3">

            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container mx-auto">
            <hr>
            <div class="flex flex-wrap ">
                <div class="w-full pl-4 pr-4 md:w-1/2">
                    <div class="inline-block copy_date">
                        @if (get_field('copyright', 'options'))
                            @php echo preg_replace( '/%YEAR%/', date( 'Y' ), get_field( 'copyright', 'options' ) ); @endphp
                        @endif
                    </div>
                </div>
                <div class="w-full pl-4 pr-4 md:w-1/2 text-end">
                    @php $rows = get_field('links', 'options'); @endphp
                    @if ($rows)
                        <ul class="inline-block text-end">
                            @foreach ($rows as $row)
                                @if ($row['lien'])
                                    @php $lien = $row['lien']; @endphp
                                    <li class="inline ms-0 lg:ms-2"><a href="{{ $lien['url'] }}"
                                            title="{{ $lien['title'] }}">{{ $lien['title'] }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
