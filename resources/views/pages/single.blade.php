@php
	$id = get_the_ID();
	$post = get_post($id);
	$blocks = parse_blocks($post->post_content);
@endphp
@if (have_posts())
	<section type="post-single">
		<div class="container">
			<div class="row post-single__header">
				@if(has_post_thumbnail())
					<div class="col-12">
						<div class="post_thumbnail_wrapper" style="background-image: url({{ get_the_post_thumbnail_url() }})">
							<header class="container">
								<div class="row">
									<div class="col-12 col-md-10 offset-0 offset-md-1 hero_post_wrapper">
										@php $cats = get_the_category($id); @endphp
										@if($cats)
											<div class="category">
												@foreach($cats AS $cat)
													<a href="{{ get_category_link($cat->cat_ID)  }}"
													   title="{{ $cat->name }}">
														{{ $cat->name }}
													</a>
												@endforeach
											</div>
										@endif
										<h1 class="entry-title">{!! get_the_title() !!}</h1>
										<time datetime="{{ get_the_date('c') }}"
										      itemprop="datePublished">{{ get_the_date('j F Y') }}</time>
									</div>
								</div>
							</header>
						</div>
					</div>
				@else
				@endif
			</div>
			<div class="row post-single__body">
				<div class="col-12">
						@if($blocks)
							@foreach ($blocks as $block)
									{!!  render_block($block) !!}
							@endforeach
						@endif
				</div>
			</div>
		</div>
	</section>
@else
	<section>
		<p>Nothing to see.</p>
	</section>
@endif
