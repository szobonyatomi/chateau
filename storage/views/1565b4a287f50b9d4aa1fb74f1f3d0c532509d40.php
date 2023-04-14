<?php
	$post = get_post(get_the_ID());
	$blocks = parse_blocks($post->post_content);
?>
<?php if($blocks): ?>
	<?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo render_block($block); ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /Users/tomi/works/Labo/wordplateXtra/resources/views/pages/page.blade.php ENDPATH**/ ?>