<?php
/**
 * The Template for displaying all single posts.
 *
 * @package DeepBlue
 *
 */
get_header();?>

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1><?php the_title();?></h1>
				<ul class="entry_meta">
					<li><time><?php the_time('Y/m/d');?></time></li>
					<li>category&nbsp;:&nbsp;<?php the_category('/');?></li>
					<li><?php the_tags('tags&nbsp;:&nbsp;','/');?></li>
			</ul><!-- /.entry_meta -->

		<section class="content clearfix">
			<?php the_post_thumbnail('page');?>
			<?php the_content();?>
		</section><!-- /.content clearfix -->

	</article>

	<?php endwhile;?>

<?php comments_template();?>

<?php get_footer();?>