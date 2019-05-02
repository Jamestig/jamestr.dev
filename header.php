<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

	<header class="header">

		<hgroup class="headers">
			<h1 class="headers__title">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php bloginfo('name'); ?>
				</a>
			</h1>
			<h2 class="headers__description"><?php bloginfo('description'); ?></h2>
		</hgroup>

		<nav class="nav" role="navigation">
			<?php
			$args = [
				'theme_location' => 'header-menu',
				'container_class' => 'nav__container',
			];
			wp_nav_menu($args);
			?>
			<?php if (is_active_sidebar('nav-widget')) : ?>
				<?php dynamic_sidebar('nav-widget'); ?>
			<?php endif; ?>
		</nav>

	</header>

	<div class="container">