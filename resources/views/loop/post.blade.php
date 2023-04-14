<div class="col-12 col-sm-{{ $column }} mb-5">
	<article class="d-flex h-100">
		<div class="d-flex align-items-start flex-column post w-100">
			<div class="post__thumbnail">
				<a href="{!! get_permalink() !!}" title="{{ get_the_title() }}">
					{!! wp_get_attachment_image(get_post_thumbnail_id(get_the_ID()),'news', "", ["class" => "full-image img-fluid"]) !!}
				</a>
			</div>
			@php $id = get_the_ID(); $cats = get_the_category($id); @endphp
			@if($cats)
				<div class="post__category">
					@foreach($cats AS $cat)
						<a href="{{ get_category_link($cat->cat_ID)  }}" title="{{ $cat->name }}">
							{{ $cat->name }}
						</a>
					@endforeach
				</div>
			@endif
			<h3 class="post__title mb-auto"><a href="{{ get_permalink() }}"
			                                   title="{{ get_the_title() }}">{!! get_the_title() !!}</a></h3>
			<div class="post__excerpt">
				{{ get_the_excerpt() }}
			</div>
			<div class="d-flex flex-column flex-md-row mt-4 w-100">
				<div class="col-12 col-md-6">
					<div class="post__link text-start">
						<a href="{{ get_permalink() }}" class="inline_link">Découvrir</a>
					</div>
				</div>
				<div class="post__date col-12 col-md-6 text-end">
					{{ get_the_date() }}
				</div>
			</div>
		</div>
	</article>
</div>
