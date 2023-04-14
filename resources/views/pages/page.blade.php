@php
	$post = get_post(get_the_ID());
	$blocks = parse_blocks($post->post_content);
@endphp
@if($blocks)
	@foreach ($blocks as $block)
		{!!  render_block($block) !!}
	@endforeach
@endif