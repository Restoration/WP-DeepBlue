<?php
/**
 * The template for displaying a "No posts found" message.
 *
 *
 * @package DeepBlue
 */
 ?>
<article>
	<h1 class="result_title">Nothing Found</h1>
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p>Ready to publish your first post? Get started here</p>

	<?php elseif ( is_search() ) : ?>

	<p>Sorry, but nothing matched your search terms.<br /> Please try again with different keywords.</p>

	<?php get_search_form(); ?>
	<p class="top_bt"><a href="<?php bloginfo('url')?>">Return To TOP</a></p>

	<?php else : ?>

	<p>It seems we can&rsquo;t find what you&rsquo;re looking for. <br />Perhaps searching can help.</p>

	<?php get_search_form(); ?>
	<p class="top_bt"><a href="<?php bloginfo('url')?>">Return To TOP</a></p>

	<?php endif; ?>
</article>