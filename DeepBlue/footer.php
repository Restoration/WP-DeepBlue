<?php/** * The template for displaying the footer. * * @package DeepBlue */get_template_part('content', 'pagenav');?></div><!-- /#main -->	<small id="copyright">Copyright © <?php date('Y');?> <?php bloginfo('name');?>  All Rights Reserved.</small>	</div><!-- /#wrap -->	<footer id="footer">		<nav role="navigation">			<p id="footer_bt"><a href="#"><span id="footer_arrow">∧</span>&nbsp;Menu</a></p>			<?php wp_nav_menu(array(					'menu'=>'',					'container_id'=>'menu',					'menu_id'=>'menu',					'theme_location'=>''			));?>		</nav>		<div id="footer_inner">			<?php dynamic_sidebar();?>		</div><!-- /#footer_inner -->		</footer><!-- /#footer --></div><!-- /#container --><!-- JavaScriptImport --><!-- jQuery --><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.js"></script><!-- Functions --><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/function.js"></script><!-- Respond --><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script><!-- RippleMaster --><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.ripple.js"></script><!-- /JavaScriptImport --><?php wp_footer();?></body></html>