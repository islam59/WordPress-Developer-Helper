<!DOCTYPE html>
<html>
	<head>
		<title>WordPress CheatSheet</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
		<style type="text/css">
			h1{text-align:center; text-align:center; border-bottom:5px solid black; 
				padding:20px 0px; 
			}
			small{ color:#d7d7d7; font-size:9px; }
			.form-control{ scroll:none; }
			.form-control::-webkit-scrollbar { 
				display: none;  // Safari and Chrome
			}
			h3{ color:#024; font-weight:bold;  }
			a{ font-size:16px; margin-bottom:0px; display:block; }
		</style>
	</head>
	<body>
	<div class="container">
		<h1>
			<b>WordPress CheatSheet</b>
			<small><br/>For WordPress Theme Developer</small>
			<small><br/>By &mdash; DwinsTeam</small>
		</h1>
		<div class="body">
			<div class="col-md-3">
				<h3>Topics</h3><hr/>
				<a href="#1">1. Configure style.css File</a><br/>
				<a href="#2">2. ল্যাঙ্গুয়েজ সেট করার জন্য</a><br/>
				<a href="#3">3. Character সেট করার জন্য</a><br/>
				<a href="#4">4. সাইটের Title সেট করার জন্য </a><br/>
				<a href="#5">5. যে কোন Script / Image ডাইনামিক করার জন্য </a><br/>
				<a href="#6">6. style.css কল  করার জন্য </a><br/>
				<a href="#7">7.	Home Page লিংক করার জন্য  </a><br/>
				<a href="#8">8. Head এ সব ধরনের Script কল   করার জন্য  head এর নিচে </a><br/>
				<a href="#9">9. Footer এ সব ধরনের Script  কল   করার জন্য  Body এর মধ্যে সবার  নিচে</a><br/>
				<a href="#10">10. Body তে সব ধরনের Script  কল  করার জন্য  </a><br/>
				<a href="#11">11. Specific কোন ফাইল কল করার জন্য</a><br/>
				<a href="#12">12. Website এর মেনু (Menu) সেট করার জন্য  </a><br/>
				<a href="#13">13. POST / পোস্ট show করার জন্য </a><br/>
				<a href="#14">14. Pagination যোগ  করার জন্য</a><br/>
				<a href="#15">15.  Related post display করার জন্য </a><br/>
				<a href="#16">16. Search Form  কল  করার জন্য</a><br/>
				<a href="#17">17. Search Form যোগ করার জন্য   </a><br/>
				<a href="#18">18. Widget Register করার জন্য</a><br/>
				<a href="#19">19. Category List Show করার জন্য</a><br/>
				<a href="#20">20. Specific Category থেকে পোস্ট আনার জন্য -</a><br/>
				<a href="#21">21. Archive list show করার জন্য  -</a><br/>
				<a href="#22">22. Comment Form যোগ করার জন্য   -</a><br/>
				<a href="#23">23. Author Page এর জন্য-</a><br/>
				<a href="#24">24. Social Link Options এ যুক্ত বা পরিবর্তনের জন্য- functions.php ফাইলে যুক্ত করতে হবে -</a><br/>
			</div>
			<div class="col-md-9">
<!---------------------------------------------------------------->
<div id="1">
<hr/><h3>1. Configure style.css File</h3><hr/>
<p>
<h4>
Add a style.css file to your template. If exist then add bellow stylesheet comments to your style.css file and must ensure the location of your style.css file in rute of your template.
<h4>
<textarea class="form-control" style="min-height:320px; " readonly>
/*
Theme Name: DwinsTeam
Theme URI: https://IslamHossain59.com/DwinsTeam/
Author: DwinsTeam
Author URI: https://IslamHossain59.com/DwinsTeam/
Description: Car News  brings your site to life with header video and immersive featured images.
Version: 1.4
License: GNU General Public License v2 or later
License URI: https://IslamHossain59.com/DwinsTeam/
Text Domain: DwinsTeam
Tags: one-column, two-columns, right-sidebar, flexible-header, accessibility-ready, custom-colors, custom-header, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready
*/
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="2">
<hr/><h3>2. Language সেট করার জন্য</h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<html <?php language_attributes(); ?>>
</textarea>
<Br/>Or, (e-commerce)
<textarea class="form-control" style="min-height:50px; " readonly>
<html <?php language_attributes(); ?> class="no-js no-svg">
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="3">
<hr/><h3>3. Character সেট করার জন্য </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<meta charset="<?php bloginfo( 'charset' ); ?>">
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="4">
<hr/><h3>4. সাইটের Title সেট করার জন্য  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<title><?php bloginfo( 'name' ); ?></title>
</textarea>
<br/> Or, write into Functions.php file 
<textarea class="form-control" style="min-height:50px; " readonly>
add_theme_support('title-tag'); 
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="5">
<hr/><h3>5. যে কোন Script / Image  ডাইনামিক করার জন্য   </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php echo get_template_directory_uri(); ?>/
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="6">
<hr/><h3>6. style.css & .js file কল  করার জন্য </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php echo get_stylesheet_uri(); ?>
</textarea>
<br/> Using Functions.php 
<textarea class="form-control" style="min-height:380px; " readonly>
/**
 * enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'bbs', get_template_directory_uri().'/asset/css/blog-beige-style.css', array(),'1.0.0',false);
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jmj', get_template_directory_uri() . '/asset/js/jquery.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'bmj', get_template_directory_uri() . '/asset/js/bootstrap.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'prtcls', get_template_directory_uri() . '/asset/js/particles.js', array(), '1.0.0', false );
    wp_enqueue_script( 'wjs', get_template_directory_uri() . '/asset/js/wow.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jprjs', get_template_directory_uri() . '/asset/js/jquery-pseudo-ripple.js', array(), '1.0.0', false );
    wp_enqueue_script( 'jncjs', get_template_directory_uri() . '/asset/js/jquery-nao-calendar.js', array(), '1.0.0', false );
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/asset/js/main.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="7">
<hr/><h3>7. Home Page লিংক করার জন্য   </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php echo esc_url( home_url( '/' ) ); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="8">
<hr/><h3>8. Head এ সব ধরনের স্ক্রিপ্ট  কল   করার জন্য  Closing Head Tag এর উপরে  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php wp_head(); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="9">
<hr/><h3>9. Footer এ সব ধরনের স্ক্রিপ্ট  কল   করার জন্য  Body এর মধ্যে সবার  নিচে  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php wp_footer(); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="10">
<hr/><h3>10. Body তে সব ধরনের স্ক্রিপ্ট  কল  করার জন্য  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<body <?php body_class(); ?>>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="11">
<hr/><h3>11. Specific কোন ফাইল কল করার জন্য  </h3><hr/>
<p>
<h4>*** Header File Calling</h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php get_header(); ?>
</textarea>

<h4>*** Footer File Calling</h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php get_footer(); ?>
</textarea>

<h4>* For Customise file Calling</h4>
<textarea class="form-control" style="min-height:215px; " readonly>

<?php get_template_part('slider'); ?>
or.
<?php get_template_part('sidebar'); ?>
or.
<?php get_template_part('left-sidebar'); ?>
or.
<?php get_template_part('contact-form'); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="12">
<hr/><h3>12. Website এর  Menu সেট করার জন্য  </h3><hr/>
<p>
<h4>functions.php</h4>
<textarea class="form-control" style="min-height:220px; " readonly>

function DwinsTeam_register_menu(){
	if(function_exists('register_nav_menu')){
		register_nav_menu('Menu_name1', __('Menu Name 1', 'text_domain_name')); 
		register_nav_menu('menu_name2', __('Menu Name 2', 'text_domain_name')); 
		register_nav_menu('menu_name_3', __('Menu Name 3', 'text_domain_name')); 
	} 
}
add_action('init','DwinsTeam_register_menu');
</textarea>
<h4>Calling Menu # View file.</h4>
<textarea class="form-control" style="min-height:220px; " readonly>
<?php 
          wp_nav_menu(
             array(
             	'theme_location' => 'header_top_menu',
                'container_class' => 'main-navigation',
                'items_wrap' => '<ul class="main-menu">%3$s</ul>'
              )
         ); 
?>
</textarea>
<br/>
Or, 
<textarea class="form-control" style="min-height:260px; " readonly>
<?php 
	wp_nav_menu( [
		'menu' => 'Primary Navigation',
		'menu_class' => 'this-is-the-menu-class',
		'menu_id' => 'this-is-the-menu-id',
		'container' => 'div',
		'container_class' => 'this-is-the-container-class',
		'container_id' => 'this-is-the-container-ID',
		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
	] );
?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="13">
<hr/><h3>13. POST / পোস্ট Show করার জন্য </h3><hr/>
<p>
<h4>Loop আকারে দেখানোর জন্য - </h4>
<textarea class="form-control" style="min-height:220px; " readonly>
<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); 
		//Your HTML Code here... 
		endwhile; 
	else :
		esc_html_e('Content IF post not found !.');		
	endif; 
?>	
</textarea>
<br/>
<h4> Title - কন্টেন্ট এর টাইটেল দেখানোর জন্য -  </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_title(); ?>	
</textarea>
<br/>
<h4>Content - সম্পূর্ণ কন্টেন্ট দেখানোর জন্য -  </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_content(); ?>	
</textarea>
<br/>
<h4>Summary- কন্টেন্ট এর সামারি দেখানোর জন্য -    </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_excerpt(); ?>	
</textarea>
<br/>
<h4>Link / Permalink - কন্টেন্ট এর লিঙ্ক সেট করার জন্য -  </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_permalink(); ?>
</textarea>
<br/>
<h4>Image / Thumbnail দেখানোর জন্য -   </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?> 
</textarea>

<h4>Image / Thumbnail কে Background আকারে দেখানোর জন্য -   </h4>
<textarea class="form-control" style="min-height:75px; " readonly>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<tagname style="background-image: url('<?php echo $backgroundImg[0]; ?>');><!----></tagname>
</textarea>

<h4>*** Featured Image Supports এর জন্য functions.php ফাইল এ লিখতে হবে-   </h4>
<textarea class="form-control" style="min-height:95px; " readonly>
add_theme_support('post-thumbnails',array('post','page'));
set_post_thumbnail_size(200,200,true);  
add_image_size('myFituredImage', 300, 300, true);
</textarea>

<h4> Date/Time - Content এর Date/Time দেখানোর জন্য -   </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_time('M d,Y'); ?> 
</textarea>

<h4>POST এ Tag দেখানোর জন্য- </h4>
<textarea class="form-control" style="min-height:55px; " readonly>
<?php the_tags(); ?>
</textarea>

<h4>Tag এর মধ্যে Class যুক্ত করার জন্য functions.php ফাইলে যুক্ত করতে হয় - </h4>
<textarea class="form-control" style="min-height:150px; " readonly>
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="class_name1 class_name2"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags',10,1);
</textarea>


<h4>Comment এর সংখ্যা দেখানোর জন্য - </h4>
<textarea class="form-control" style="min-height:55px; " readonly>
<?php comments_popup_link('No Comments >>', '1 Comments >>','% Comments >>'); ?> 
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="14">
<hr/><h3>14. Pagination যোগ  করার জন্য  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_posts_pagination(); ?>
</textarea>

<h4>OR. Another Pagination Calling - </h4>
<textarea class="form-control" style="min-height:175px; " readonly>
<?php 
	the_posts_pagination( array(
		'mid_size' => 2,
		'prev_text' => __( '<', 'DwinsTeam' ),
		'next_text' => __( '>', 'DwinsTeam' ),
	) );
?>
</textarea>
<br/>
<h4>Bootstrap 3 Supported Style Helper for pagination-</h4>
<textarea class="form-control" style="min-height:800px; " readonly>
.pagination {
    border-top: 1px solid #e9e9e9;
    padding: 35px 0;
    width: 100%;
    text-align: center;
}
.pagination .nav-links {
	display: block;
	padding: 0 25px 15px;
	position: relative;
}
.pagination .page-numbers {
	background: #e8edf3;
	border: 1px solid #d3d3d3;
	color: #444;
	display: inline-block;
	font-size: 20px;
	height: 45px;
	line-height: 45px;
	padding: 0 12px;
	margin-right: 5px;
}
.pagination .page-numbers.current {
	background: #f70009;
	color: #fff;
	font-size: 20px;
	height: 47px;
	text-align: center;
	line-height: 47px;
}
.pagination .nav-links > a:hover {
	background: #eb5424;
	color: #fff;
	text-decoration: none;
}
.screen-reader-text {
	display: none;
}
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="15">
<hr/><h3>15. Related Post Display করার  জন্য   </h3><hr/>
<p>
<textarea class="form-control" style="min-height:480px; " readonly>
<?php
	$tags = wp_get_post_tags($post->ID);
	if ($tags) {
		$first_tag = $tags[0]->term_id;
		
		$my_query = new WP_Query(array(
			'tag__in' => array($first_tag),
			'post__not_in' => array($post->ID),
			'posts_per_page'=>5,
			'caller_get_posts'=>1
		));
		
		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); 

		//HTML CODE HERE || the_title(), the_content().. etc. 
		
		endwhile;
		}
		wp_reset_query();
	}
?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="16">
<hr/><h3>16. Search Form  কল  করার জন্য  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php get_search_form(); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="17">
<hr/><h3>17. Search Form  যোগ   করার জন্য  </h3><hr/>
<p>
<h4>Step 1: Create Search.php file into rute directory like index.php / page.php file - </h4>

<h4>Step 2: Form Settings - </h4>
<textarea class="form-control" style="min-height:100px; " readonly>
<form  action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" />
</form>
</textarea>
<h4>Step 3: Search Form এর  কি ওয়ার্ড  রেজাল্ট যোগ   করার জন্য - </h4>
<textarea class="form-control" style="min-height:100px; " readonly>
<h1 class="headbar">
	Your Keyword <span><?php _e(''); echo '&quot;'.$s.'&quot;'; ?></span> Results are bellow
</h1>
</textarea>
<h4>Step 4: Search Form  এর  কি-ওয়ার্ড  রেজাল্ট  স্টাইলিং    করার জন্য  (with step 3) - </h4>
<textarea class="form-control" style="min-height:200px; " readonly>
.headbar {
	background: #fff;
	padding: 10px;
	font-size: 25px;
	text-align: center;
	font-weight: 700;
	border: 1px solid #fefe3f;
}
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="18">
<hr/><h3>18. Widget Register করার জন্য  </h3><hr/>
<p>
<h4>Step 1: functions.php # Widget Registration/Support - </h4>
<textarea class="form-control" style="min-height:280px; " readonly> 
	function widgets_sidebar(){
			register_sidebar( array(
			'name'          => __( 'Home Page Sidebar Top', 'prothom-alo' ),
			'id'            => 'widget-home-top',
			'before_widget' => '<div class="widget"><div class="category-sidebar">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="headbar">',
			'after_title'   => '</h2> ',
		) );
	}
	add_action( 'widgets_init', 'widgets_sidebar' );
</textarea>
<h4>Step 2: Widget Call / Sidebar Dynamic করার জন্য - </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php dynamic_sidebar( 'widget_id_here' ); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="19">
<hr/><h3>19. Category List Show করার জন্য  </h3><hr/>
<p>
<h4>Step 1: You have to make a file as category.php in your default directory like index.php/ page.php or your defined template</h4>
<h4>Step 2: </h4>
<textarea class="form-control" style="min-height:300px; " readonly> 
<?php
	$args = array(
		'orderby' => 'slug',
		'parent' => 0
	);

	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
		echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-asterisk"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
	 }
?>
</textarea>

<h4> Number of Post under Category - (related with 19/2)</h4>
<textarea class="form-control" style="min-height:120px; " readonly> 
<?php
	$category->count; 	
?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="20">
<hr/><h3>20. Specific Category থেকে পোস্ট আনার জন্য  -  </h3><hr/>
<p>
<textarea class="form-control" style="min-height:240px; " readonly> 
<?php 
$var = new WP_Query(array(
	"post_type" => "post",
	"posts_per_page" => 5,
	'orderby' => 'title',
	'order'   => 'DESC',
	"category_name"  => "category_tags/category_name"
));
?>
</textarea>
<h4>Category wise post show</h4>
<textarea class="form-control" style="min-height:200px; " readonly> 
<?php 
     if ( have_posts() ) : 
        while ( $edu->have_posts() ) : $edu->the_post(); 
			//your html.. 
        endwhile; 
	endif; 
?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="21">
<hr/><h3>21. Archive List Show করার জন্য  - </h3><hr/>
<p>
<h4>Step 1: Have to make archive.php file into route directory of template/theme. <h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'ASC' )); ?>
</textarea>

<h4>OR.<h4>
<textarea class="form-control" style="min-height:340px; " readonly> 
<?php 
	$args = array(
		'type'            => 'monthly',
		'limit'           => '',
		'format'          => 'html',
		'before'          => '',
		'after'           => '',
		'show_post_count' => false,
		'echo'            => 1,
		'order'           => 'DESC',
			'post_type'     => 'post'
	);
	wp_get_archives( $args ); 
?>
</textarea>

<h4>OR.</h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php wp_get_archives( $args ); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="22">
<hr/><h3>22. Comment Form যোগ করার জন্য   - </h3><hr/>
<p>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php comment_form(); ?>
</textarea>

<h4>OR<h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php comments_template( '', true ); ?>
</textarea>

<h4>*** Comment Reply করার জন্য head Tag এর  মধ্যে লিখতে হবে  <h4>
<textarea class="form-control" style="min-height:195px; " readonly> 
<head>
<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
?>
</head>
</textarea>

<h4>Comment Form Style করার জন্য  style.css ফাইল এ Add করতে হবে - <h4>
<textarea class="form-control" style="min-height:1235px; " readonly>//style.css 
.comment-author.vcard img {
    float: left; margin-right: 20px; border-radius: 40px;
}

.comment-list cite.fn {
    font-weight: 700; text-transform: uppercase; font-size: 14px; padding-right: 5px;
}

.comment-body {
    border: 2px solid #dadada; padding: 15px; border-radius: 4px; margin: 20px 20px 20px -15px;   
}

.reply{ margin: 10px 0 5px 20px; }

.comment-form label{ width: 12%; float: left; }

.comment-form input[type="text"] {
  width: 100%; height: 32px; padding: 7px; border: 2px solid #f1f1f1; border-radius: 4px;
}

.form-submit input[type="submit"] {
    color: #fff; text-decoration: none; padding: 8px 20px;
    margin: 4px 0 12px 0; display: inline-block; background: #26629e;
    box-shadow: 0 0 1px #ccc;
    -webkit-transition-duration: 0.5s;
    -webkit-transition-timing-function: linear;
    box-shadow:0px 0 0 #19a268 inset; border: none; border-radius: 4px;
}

.form-submit input[type="submit"]:hover { box-shadow:-140px 0 0 #19a268 inset; }

form#commentform input#email {
    width: 100%; height: 32px; padding: 7px; border: 2px solid #f1f1f1; border-radius: 4px;
}

form#commentform input#url {
    width: 100%; height: 32px; padding: 7px; border: 2px solid #f1f1f1; border-radius: 4px;
}

p.form-submit { margin-top: 25px; }

.reply a {
  color: #fff; padding: 6px 20px; border-radius: 4px;
  background: #26629e; box-shadow: 0 0 1px #ccc;
  -webkit-transition-duration: 0.5s;
  -webkit-transition-timing-function: linear;
  box-shadow:0px 0 0 #19a268 inset;
}

.reply a:hover { box-shadow:-100px 0 0 #19a268 inset; }

h2.comments-title { color: #26629e !important; margin: 20px 25px 0 15px !important; background: none !important; }

.comment-meta.commentmetadata a { text-decoration: none; font-size: 12px; }
.comment-list ol.children { margin-top: 25px; margin-left: 45px; list-style: none; }
.comments-area ol.comment-list { list-style: none; }
ol.comment-list p { margin-bottom: 0; }
textarea#comment { width: 100%; }

</textarea>

<h4>*** Comment Form এর textarea ফিল্ড নিচে আনার জন্য  functions.php ফাইল এ যুক্ত করতে হবে - <h4>
<textarea class="form-control" style="min-height:195px; " readonly> 
function ruhul_academy_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'ruhul_academy_move_comment_field_to_bottom' );
</textarea>

<h4>*** Comment Form এর যে কন  ফিল্ড রিমুভ করার  জন্য  functions.php ফাইল এ যুক্ত করতে হবে - <h4>
<textarea class="form-control" style="min-height:185px; " readonly> 
function ruhul_academy_disable_comment_amy_filed($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','ruhul_academy_disable_comment_amy_filed');
add_filter( 'comment_form_fields', 'ruhul_academy_move_comment_field_to_bottom' );
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="23">
<hr/><h3>23. Author Page এর জন্য- </h3><hr/>
<p>

<h4>23-A: Total Number of Author Post<h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php comments_template( '', true ); ?>
</textarea>

<h4>23-B: View All Post This Author<h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php the_author_posts_link(); ?>
</textarea>

<h4>23-C: Field Value Description<h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php the_author_meta('description'); ?>
</textarea>

<h4>23-D: Author Image Show করার জন্য -<h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
<?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
</textarea>

<h4>23-E: Parameter Syntax for showing Author Data -<h4>
<textarea class="form-control" style="min-height:75px; " readonly> 
 <?php echo get_avatar( get_the_author_meta( 'ID' ), $size, $default, $alt, $args ); ?>
</textarea>

<h4>23-F: Another Parameter for get_the_author_meta() function -<h4>
<textarea class="form-control" style="min-height:145px; " readonly> 
user_login &mdash; user_pass &mdash; user_nicename &mdash; user_email &mdash;  user_url &mdash; user_registered &mdash; user_activation_key &mdash;  user_status &mdash; display_name &mdash;  nickname &mdash;  first_name &mdash; last_name &mdash; description &mdash; jabber &mdash; aim &mdash; yim &mdash; user_level &mdash; user_firstname &mdash; user_lastname &mdash; user_description &mdash; rich_editing &mdash; comment_shortcuts &mdash; admin_color &mdash; plugins_per_page &mdash; plugins_last_view &mdash; ID
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="24">
<hr/><h3>24. Social Link Options এ যুক্ত বা পরিবর্তনের জন্য-  functions.php ফাইলে যুক্ত করতে হবে - </h3><hr/>
<p>

<h4>Step 1: Social link update form. যা functions.php ফাইল এ যুক্ত করতে হবে - <h4>
<textarea class="form-control" style="min-height:615px; " readonly> 
<?php 
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

	function my_show_extra_profile_fields( $user ) { 
?>
	<h3>Step 2: Extra profile information - যা functions.php ফাইলে যুক্ত করতে হবে - </h3>
	<table class="form-table">
		<tr>
			<th><label for="facebook">Facebook</label></th>
			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your facebook username. [e.g http://www.facebook.com/username]</span>
			</td>
		</tr>
		<tr>
			<th><label for="facebook">LinkedIn</label></th>
			<td>
				<input type="text" name="linkedln" id="linkedln" value="<?php echo esc_attr( get_the_author_meta( 'linkedln', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your linkedln username. [e.g http://www.linkedln.com/username]</span>
			</td>
		</tr>
	</table>
<?php } ?>
</textarea>

<h4>Step 2: Social link update functions- যা functions.php ফাইলে যুক্ত করতে হবে - <h4>
<textarea class="form-control" style="min-height:340px; " readonly> 
	<?php 
		function my_save_extra_profile_fields( $user_id ) {
			if ( !current_user_can( 'edit_user', $user_id ) )
				return false;

				/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
				update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
				update_user_meta( $user_id, 'linkedln', $_POST['linkedln'] );
			}

		add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
		add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
	}
	?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="25">
<hr/><h3>25. Custom Post Registration / Slider অপশন তৈরী - </h3><hr/> 
<p>

<h4>Step 1: Slider Registration করার জন্য - functions.php ফাইল এ লিখতে হবে- <h4>
<textarea class="form-control" style="min-height:580px; " readonly> 
<?php 
function slider_gallery(){
	register_post_type('slider-items', array(
		'labels' => array(
			'name' => __('Slider'),
			'singular_name' => __('Slider'),
			'menu_name' => __('Slider Gallery'),
			'name_admin_bar' => __('Add Slider'),
			'all_items' => __('All Slider'),
			'add_new' => __('Add Slider'),
			'add_new_item' => __('Add New Slider'),
			'edit_item' => __('Edit Slider'),
			'new_item' => __('New Slider'),
			'view_item' => __('View Slider'),
			'search_items' => __('Search Slider')
		),
		'public' => true,
		'has_archive' => true, 
		'rewrite' => array('slug' => 'slider-items'),
		'menu_position' => 8, 
		'menu_icon' => 'dashicons-products',
		'supports' => array('title','thumbnail','editor')
	));
}
add_action('init','slider_gallery'); 
?>
</textarea>

<h4>Step 2: 13 - ৭ এর নিয়ম অনুসারে - Featured Image Support Function গুলিকে পরিবর্তন করতে হবে - <h4> 
<textarea class="form-control" style="min-height:140px; " readonly> 
add_theme_support('post-thumbnails',array('post','page','slider-items'));         //change.. 
set_post_thumbnail_size(200,200,true);  
add_image_size('myFituredImage', 300, 300, true);
add_image_size('slider-items', 1900, 900, true);                                               //change..
</textarea>

<h4>Step 3: Custom Taxonomy / Custom Post এ Tags অপশন তৈরী  করার জন্য -<small> <br/> functions.php ফাইলে নিম্নোক্ত ফাংশনটি যুক্ত করতে হবে - 
Slider Post এবং Tags এর জন্য ব্যবহূত ফাংশন দুটির কনেকশনের জন্য The name of the taxonomy একই হতে হবে - </small>
<h4> 
<textarea class="form-control" style="min-height:380px; " readonly> 
function slider_gallery_taxonomy(){
	register_taxonomy(
		'slider-items', //The name of the taxonomy. Name should be in slug form (Must Not Contain Capital Letters or Spaces). 
		'slider-items', //post type name 
		array(
			'hierarchical' => true,
			'label' => 'Slider Category', //Display Name..
			'query_var' => true, 
			'rewrite' => array(
				'slug' => 'slider-category', //This is controls the base slug that will display before each term 
				'with_front' =>true //Don't display the category base before 
			)
		) 
	);
}
add_action('init','slider_gallery_taxonomy');
</textarea>
 
<h4>Step 4: Custom Meta Box অপশন তৈরী  করার জন্য- <h4> 
<textarea class="form-control" style="min-height:140px; " readonly> 
function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'TextDomain_name' ), 'slider_meta_callback', 'slider-items' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );
</textarea> 

<h4>Step 5: Custom Meta Box Input Field Add/Update # Field অপশন তৈরী  করার জন্য- <h4> 
<textarea class="form-control" style="min-height:315px; " readonly> 
function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' ); //slider_stored_meta
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-subtitle-slider" value="<?php if ( isset ( $slider_stored_meta['meta-subtitle-slider'] ) ) echo $slider_stored_meta['meta-subtitle-slider'][0]; ?>" style="width:100%;font-size:16px; margin-bottom:15px; " placeholder="Enter Sub Title Here">

	<input type="text" name="meta-url-name-slider" value="<?php if ( isset ( $slider_stored_meta['meta-url-name-slider'] ) ) echo $slider_stored_meta['meta-url-name-slider'][0]; ?>" style="width:100%;font-size:16px;" placeholder="Enter URL Name Here">	
	<?php
}
</textarea>

<h4>Step 6: Custom Meta Box Input Field Add/Update # Function - <h4> 
<textarea class="form-control" style="min-height:475px; " readonly> 
function slider_meta_save( $post_id ) {
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'slider_stored_meta' ] ) && wp_verify_nonce( $_POST[ 'slider_stored_meta' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-subtitle-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-subtitle-slider', sanitize_text_field( $_POST[ 'meta-subtitle-slider' ] ) );
	}
	if( isset( $_POST[ 'meta-url-name-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-name-slider', sanitize_text_field( $_POST[ 'meta-url-name-slider' ] ) );
	}
}
add_action( 'save_post', 'slider_meta_save' );
</textarea>

<h4>Step 7: Custom post with meta box display করার জন্য- ফ্রন্ট পেজ ফাইলে যুক্ত করতে হয় - <h4> 
<textarea class="form-control" style="min-height:575px; " readonly>
<?php
    global $post;
    $i=0;
    $args = array('posts_per_page' => -1, 'post_type'=> 'slider-items','page'=> $paged, 'order' => 'DESC');
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post);
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-items');  
    $i++;
    $this_id = get_the_ID(); 
    global $wpdb;
    $m_name_subtitle = '';
    $tbl_postmeta = $wpdb->prefix."postmeta";           
    $meta_name_subtitle = 'meta-subtitle-slider';           
    $query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
    $result = $wpdb->get_results($query_result);
    foreach($result as $row){
        $m_name_subtitle = $row->meta_value;
    }
?>
<!-- ---------------------------------------------------------------------- -->
    <?php echo $large_image_url[0]; ?> // Image Link করার জন্য ... 
    <?php the_title(); ?></h2> // Title দেখানোর জন্য ... 
    <?php echo $m_name_subtitle; ?> // Sub Title দেখানোর জন্য... 
    <?php the_permalink(); ?> // Read More / Slider টির Details দেখার জন্য - [N.B. single-slider-items.php নামক আরেকটি php ফাইল বানাতে হবে - নিম্নে উল্লেখিত ] 
<!-- ---------------------------------------------------------------------- -->
<?php endforeach;?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="18">
<hr/><h3>18. Tag List Show করার জন্য  </h3><hr/>
<p>
<h4>Show All Tags </h4>
<textarea class="form-control" style="min-height:80px; " readonly> 
<?php wp_tag_cloud('format=list'); ?>
</textarea>
<h4>Tag Under Post </h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php the_tags(); ?>
</textarea>
</p>
</div>
<!---------------------------------------------------------------->
<!---------------------------------------------------------------->
<div id="19">
<hr/><h3>Woocommerce Utility</h3><hr/>
<p>
<h4>Functions.php - Woocommerce Support Functions </h4>
<textarea class="form-control" style="min-height:190px; " readonly> 
/**
* woocommerce support.. 
*/
function myshopdt_woocommerce_support(){
    add_theme_support('woocommerce'); 
}
add_action('after_setup_theme','myshopdt_woocommerce_support'); 
</textarea>

<h4>Woocommerce Content woocommerce.php</h4>
<textarea class="form-control" style="min-height:50px; " readonly>
<?php woocommerce_content(); ?>
</textarea>

<h4>Woocommerce remove breadcums function.php </h4>
<textarea class="form-control" style="min-height:180px; " readonly>
/**
*remove breadcums 
*/
function woo_remove_breadcrumbs(){
    remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20,0); 
}
add_action('init','woo_remove_breadcrumbs'); 
</textarea>

<h4>Woocommerce breadcums style functions.php  </h4>
<textarea class="form-control" style="min-height:320px; " readonly>
/**
*breadcums utility changes  
*/
function ecom_woocommerce_breadcrumb(){
    return array(
        'delimiter' => ' &#47 ',
        'wrap_before' => '<div class="breadcrumb-inner"><ul class="list-inline list-unstyled">',
        'wrap_after' => '</ul></div>',
        'before' => '',
        'after' => '',
        'home' => _x('Home','breadcrum','woocommerce'),
    );  
}
add_filter('woocommerce_breadcrumb_defaults','ecom_woocommerce_breadcrumb');  
</textarea>

<h4>Woocommerce change number or products per row to 3 function.php </h4>
<textarea class="form-control" style="min-height:220px; " readonly>
/**
*  change number or products per row to 3 
*/
if(!function_exists('loop_columns_3')){
    function loop_columns_3(){
        return 3; //return 3 products.. 
    }
}
add_filter('loop_shop_columns','loop_columns_3'); 
</textarea>
</p>

</div>
<!---------------------------------------------------------------->
			</div>
		</div>
</div>		
	</body>
</html>