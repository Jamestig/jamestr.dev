<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="article__header">
		<?php the_title('<h2>', '</h2>'); ?>
	</header>

	<div class="article__content">
		<?php the_content(); ?>
	</div>

	<p class="template-part">Template-part: content-page.php</p>

</article>