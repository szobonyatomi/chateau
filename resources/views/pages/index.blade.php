@php
    $id = get_option('page_for_posts');
    $post = get_post($id);
    $blocks = parse_blocks($post->post_content);
@endphp

{{-- Décommenter le block suivant s'il n'y a pas de block sur cette page --}}
@if ($blocks)
    @foreach ($blocks as $block)
        {!! render_block($block) !!}
    @endforeach
@endif
{{-- Fin du block qui affiche les blocks --}}

@if (have_posts())
    <section type="post">
        <div class="container">
            <div class="row">
                @while (have_posts())
                    @php the_post(); @endphp
                    @include('loop.post', ['column' => 4])
                @endwhile
            </div>
        </div>
    </section>
@else
    <article>
        <p>Aucun article</p>
    </article>
@endif
