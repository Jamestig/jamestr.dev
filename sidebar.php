<?php if (is_active_sidebar('main-sidebar')) : ?>

	<aside class="main__sidebar" role="complementary">

		<h2>Sidebar</h2>

		<?php dynamic_sidebar('main-sidebar'); ?>

	</aside>

<?php endif; ?>