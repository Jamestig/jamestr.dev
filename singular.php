<!-- used to display a single page -->

<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="main" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile; else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>

	<?php endif; ?>

	<p class="template">Template: singular.php</p>

</main>

<?php get_footer(); ?>