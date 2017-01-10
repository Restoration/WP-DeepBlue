<?php
/**
 *
 * @package DeepBlue
 */
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="mask"></div>
		<?php if ( has_post_thumbnail() ) : ?>

		<p class="frame">
			<?php the_post_thumbnail('post'); ?>
		</p>
	<?php else : ?>
		<p class="frame">
			<a href="<?php the_permalink();?>">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/image/base/thumbnails.png" alt="DeepBlue" />
			</a>
		</p>
	<?php endif;?>

	<section>
		<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
		<p><?php echo mb_substr(get_the_excerpt(), 0, 20); ?>...</p>
		<p class="read_more"><a href="<?php the_permalink();?>">ReadMore ≫</a></p>
	</section>

</article><!-- /.post -->