<?php
/**
 * The template for displaying Date pages.
 *
 *
 * @package DeepBlue
 */
get_header(); ?>

	<?php if ( have_posts() ) : ?>

	<h1 class="result_title">Date Archives:<span><?php the_time('Y/m/d '); ?></span></h1>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>

	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>

<?php get_footer(); ?>