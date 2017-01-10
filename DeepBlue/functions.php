<?php
/**
 * DeepBlue functions and definitions
 *
 * @package DeepBlue
 */


//Version Hidden
remove_action( 'wp_head', 'wp_generator' );


//FooterWidgetContent
if ( function_exists('register_sidebar') )
register_sidebar(array(
       'name' 			 => 'FooterWidget',
	   'before_widget'  => '<section class="widget_area">',
	   'after_widget'   => '</section><!-- /.widget_area -->',
	   'before_title'   => '<h2 class="widget_title">',
	   'after_title'	 => '</h2><!-- /.widget_title -->',
));


//Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 500, 500 );
add_image_size( 'post', 300, 200 , true );
add_image_size( 'page', 500, 500 , true );


//WP-Navgation
add_theme_support( 'menu' );
register_nav_menus(array(
	'nav'			 =>'menu',
	'container_id'   =>'menu',
	'menu_id'		 =>'menu',
	'theme_location' =>''
));


//get_post_format
add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status') );


//CustomHeader
add_theme_support('custom-header',array(
	'default-image'          => get_template_directory_uri() . '/image/dummy/main.jpg',
	'random-default'         => false,
	'width'                  => 960,
	'height'                 => 250,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
));

//SearchFilter GetPOST
function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');


//Comments
require_once('inc/comments.php');

//htmlspecialchars ESECAPE
function h($var){
	if(is_array($var)){
		return array_map('h',$var);
	} else {
		return htmlspecialchars($var , ENT_QUOTES ,'UTF-8');
	}
}
class SnsAccount {
    function __construct() {
      add_action('admin_menu', array($this, 'add_pages'));
    }
    function add_pages() {
      add_menu_page('MySNS','MySNS',  'level_8', __FILE__, array($this,'sns_option_page'), '', 26);
    }
	function sns_option_page() {
    if ( isset($_POST['tw_account'])) {
        check_admin_referer('snsoptions');
        $opt = $_POST['tw_account'];
        update_option('tw_account', $opt);
    }
    if ( isset($_POST['gp_account'])) {
        check_admin_referer('snsoptions');
        $opt = $_POST['gp_account'];
        update_option('gp_account', $opt);
    }
    if ( isset($_POST['fb_account'])) {
        check_admin_referer('snsoptions');
        $opt = $_POST['fb_account'];
        update_option('fb_account', $opt);

    }
    if ( isset($_POST['dr_account'])) {
        check_admin_referer('snsoptions');
        $opt = $_POST['dr_account'];
        update_option('dr_account', $opt);
    }
    if ( isset($_POST['fr_account'])) {
        check_admin_referer('snsoptions');
        $opt = $_POST['fr_account'];
        update_option('fr_account', $opt);
    }
    if ( isset($_POST['yt_account'])) {
        check_admin_referer('snsoptions');
        $opt = $_POST['yt_account'];
        update_option('yt_account', $opt);
        ?>
        <div class="updated fade"><p><strong><?php _e('Options saved.'); ?></strong></p></div>
        <?php
    }
    ?>
   			<div id="sns_admin_menu">
			<h2>MySNS Options</h2>
			<p class="text">Please input account or URL here.
			What was inputted is reflected as a SNS button.
			</p>
			<form action="" method="post" name="snsform">
            <?php
            wp_nonce_field('snsoptions');
            $opt = get_option('tw_account');
            $tw_account = isset($opt['text']) ? $opt['text']: null;
            $opt = get_option('gp_account');
            $gp_account = isset($opt['text']) ? $opt['text']: null;
			$opt = get_option('fb_account');
            $fb_account = isset($opt['text']) ? $opt['text']: null;
            $opt = get_option('fr_account');
            $fr_account = isset($opt['text']) ? $opt['text']: null;
             $opt = get_option('dr_account');
            $dr_account = isset($opt['text']) ? $opt['text']: null;
			$opt = get_option('yt_account');
            $yt_account = isset($opt['text']) ? $opt['text']: null;
            ?>
           <style>
			/*==================================================
			SNS-MyOption
			==================================================*/
			<!--
			div#sns_admin_menu{
				margin-top: 32px;
				width: 70%;
			}
			div#sns_admin_menu .text{
				margin-bottom: 21px;
			}
			div#sns_admin_menu label{
				display: block;
				color: #656565;
				font-size: 14px;
				font-weight: bold;
				line-height: 1.2;
			}
			div#sns_admin_menu .input_text{
				display: block;
				margin-left: 4px;
				margin-bottom: 6px;
			}
			div#sns_admin_menu input[type="text"]{
				display: block;
				margin-bottom: 20px;
				border: solid 1px #dddddd;
			}
			div#sns_admin_menu input[type="submit"]{
				display: inline-block;
				float: right;
				height: 24px;
				clear: both;
				white-space: nowrap;
				margin: 0;
				padding: 0 10px 1px;
				color: #FFFFFF;
				background-image: linear-gradient(to bottom, #2A95C5, #21759B);
				border-color: #21759B #21759B #1E6A8D;
				box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset;
				text-decoration: none;
				text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
				-moz-box-sizing: border-box;
				border-radius: 3px 3px 3px 3px;
				border-style: solid;
				border-width: 1px;
				cursor: pointer;
				font-size: 12px;
				line-height: 23px;
			}
			-->
			</style>

			<!-- ▼Twitter▼ -->
			<label for="Twitter">TwitterAccount</label>
			<input name="tw_account[text]" type="text" id="inputtext" value="<?php  echo $tw_account ?>" class="regular-text" />


			<!-- ▼GooglePlus▼ -->
			<label for="GooglePlus">GooglePlus</label>
			<span class="input_text">Please input URL of your page here. </span>
			<input name="gp_account[text]" type="text" id="inputtext" value="<?php  echo $gp_account ?>" class="regular-text" />

			<!-- ▼FaceBook▼ -->
			<label for="FaceBook">FaceBookAccount</label>
			<input name="fb_account[text]" type="text" id="inputtext" value="<?php  echo $fb_account ?>" class="regular-text" />

			<!-- ▼Frickr▼ -->
			<label for="Frickr">FlickrAccount</label>
			<input name="fr_account[text]" type="text" id="inputtext" value="<?php  echo $fr_account ?>" class="regular-text" />

			<!-- ▼dribble▼ -->
			<label for="dribble">DribbleAccount</label>
			<input name="dr_account[text]" type="text" id="inputtext" value="<?php  echo $dr_account ?>" class="regular-text" />

			<!-- ▼Youtube▼ -->
			<label for="Youtube">Youtube</label>
			<span class="input_text">Please input URL of your page here. </span>
			<input name="yt_account[text]" type="text" id="inputtext" value="<?php  echo $yt_account ?>" class="regular-text" />

			 <p class="submit"><input type="submit" name="Submit" class="button-primary" value="変更を保存" /></p>
			</form>
			</div><!-- /#sns_admin_menu -->
			<?php
		}

}
$sns = new SnsAccount;
