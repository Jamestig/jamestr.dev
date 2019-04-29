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

		<h1 class="header__title">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<h2 class="header__description">
			<?php bloginfo('description'); ?>
		</h2>

		<nav class="header__nav" role="navigation">
		<?php
		wp_nav_menu(
			array(
				'menu' => 'header-menu'
			)
		);

		?>
		</nav>

	</header>