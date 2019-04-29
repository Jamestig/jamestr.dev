<?php get_header(); ?>

<main class="main" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>

	<p>Template: index.php</p>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>