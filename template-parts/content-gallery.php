<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="article__header">
		<span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>"></span>
		<p><?php esc_html_e('What a gallery post!', 'jamestr'); ?></p>
		<?php the_title('<h2><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
		<div class="article__author">
			<?php esc_html_e('Author: '); ?><?php the_author(); ?>
		</div>
	</header>

	<div class="article__content">
		<?php the_content(); ?>
	</div>

	<?php if (comments_open()) : ?>
		<?php comments_template(); ?>
	<?php endif; ?>

	<p class="template-part">Template-part: content-gallery.php</p>

</article>