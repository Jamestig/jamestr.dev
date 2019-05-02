<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="main" role="main">
	<h1><?php wp_title(''); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content-posts', get_post_format()); ?>
		<?php endwhile; else : ?>

		<?php get_template_part('template-parts/content', 'none'); ?>
	<?php endif; ?>
	<?php echo paginate_links(); ?>

	<p class="template">Template: home.php</p>
</main>

<?php get_footer(); ?>