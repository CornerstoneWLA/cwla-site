<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
	// Detect Yoast SEO Plugin
	if (defined('WPSEO_VERSION')) {
		wp_title('');
	} else {
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'skeleton' ), max( $paged, $page ) );
	}
	?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Add CSS3 Rules here for IE 7-9
================================================== -->

<!--[if IE]>
<style type="text/css">
html.ie #navigation,
html.ie a.button,
html.ie .cta,
html.ie .wp-caption,
html.ie #breadcrumbs,
html.ie a.more-link,
html.ie .gallery .gallery-item img,
html.ie .gallery .gallery-item img.thumbnail,
html.ie .widget-container,
html.ie #author-info {behavior: url("<?php echo get_stylesheet_directory_uri();?>/PIE.php");position: relative;}</style>
<![endif]-->


<!-- Mobile Specific Metas
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 

<!-- Favicons
================================================== -->

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">

<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />
<link rel="stylesheet" id="custom" href="<?php echo home_url() .'/?get_styles=css';?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/layout.css" type="text/css" media="all">
<!-- CSS Column support for IE 9 or earlier -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/javascripts/css3-multi-column.js"></script>

<!-- Sound Manager 2
================================================== -->
<link rel="stylesheet" type="text/css" href="wp-content/plugins/soundmanager-2/360-player/360player.css">
<!-- required -->
<!--[if IE]><script type="text/javascript" src="http://sojournchurch.com/wp-content/plugins/sound-manager-2/360-player/script/excanvas.js"></script><![endif]-->
<!-- special IE-only canvas fix -->
<script type="text/javascript" src="wp-content/plugins/soundmanager-2/360-player/script/berniecode-animator.js"></script>
<!-- Apache-licensed animation library -->
<script type="text/javascript" src="wp-content/plugins/soundmanager-2/soundmanager2-nodebug-jsmin.js"></script>
<!-- SoundManager 2 library -->
<script type="text/javascript" src="wp-content/plugins/soundmanager-2/360-player/script/360player.js"></script>

<!-- 360 Player Core
================================================== -->
<!-- configure it for your use -->
<script type="text/javascript">
	soundManager.consoleOnly = true;
	soundManager.debugMode = false;
	soundManager.url = 'wp-content/plugins/soundmanager-2/'; // path to directory containing SM2 SWF
	soundManager.flashVersion = 9; // default is 9
	soundManager.useHighPerformance = true;	
</script>

<?php
	/* 
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>

</head>
<body <?php body_class(); ?>>
	<div id="wrap" class="container">
	<div class="resize"></div>
	<?php
	st_above_header();
	//Remove blog title:
	//st_header();
	st_below_header();
	?>
	
	<!-- Site Logo -->
	<a href="<?php echo home_url();?>"><img id="logo" src="wp-content/themes/skeleton_childtheme/images/cwla_logo.gif" alt="Cornerstone West LA" /></a>
	
	<!-- "Join Us" text -->
	<div id="join-us">
		JOIN US
		<div>
			<span id="services">Sunday Mornings 9am &amp; 11am</span>
			<span id="header-address">
				<span>&nbsp;&bull;&nbsp;</span>
				<span id="mailing-address">1609 S Barrington Ave Los Angeles, ca 90025</span>
			</span>
			<span id="header-email">
				<span>&nbsp;&bull;&nbsp;</span>
				<span id="email-address"><a href="mailto:info@cornerstonewla.org">info@cornerstonewla.org</a></span>
			</span>
		</div>
	</div>

	<?php st_navbar(); ?>

	<!-- Show slider if we're on the homepage -->
	<?php if ( is_front_page() ): ?>
		<?php echo '<div class="slides-wrapper">'; // Wrapper for slider positioning
			do_shortcode( '[responsive_slider]' );
			echo '</div>'; // End slider wrapper	
		?>
	<?php endif; ?>

	<!-- Not on the homepage? Show the featured image instead -->
	<?php if ( !is_front_page() ): ?>
		<?php echo '<div id="header_image" class="row sixteen columns">'.get_the_post_thumbnail( $post->ID, array("HEADER_IMAGE_WIDTH","HEADER_IMAGE_HEIGHT"), $image_attr ).'</div>'; ?>
	<?php endif; ?>
