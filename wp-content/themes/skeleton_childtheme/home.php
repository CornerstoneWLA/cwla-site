<?php /* Template Name: Home Page */
/**
 * The home page template.
 *
 * @author Dustin Platte
 */
// You can override via functions.php conditionals or define:
// $columns = 'four';

get_header();
st_before_content($columns='');
global $more;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args=array(
	'category_name' => 'sermon',
	'order' => 'DESC',
	'orderby' => 'date',
	'paged' => $paged,
	'posts_per_page' => 1,
	'ignore_sticky_posts' => 1
);
$temp = $wp_query; // assign orginal query to temp variable for later use  
$wp_query = null;
$wp_query = new WP_Query($args);
if(have_posts()) { 
	$more = 0; ?>
	<div class="latestSermon">
		<div class="latestSermonHeader">
			<p>LATEST SERMON</p>
		</div>
		<div class="ui360">
			<a href="/cwla-site/wp-content/uploads/2013/03/Marissa Ringtone.mp3"></a>
		</div>
		<div class="latestSermonDetails">
			<p class="sermonSeries">True Spirituality</p>
			<p class="sermonTitle">The Christ-like Life</p>
			<p class="sermonDate">August 18, 2011</p>
			<a href="">View All Sermons</a>
		</div>
		<div class="latestSermonBlurb">
			<div class="latestSermonScripture">
				<p class="sermonScripture">Colossians 1:7-13</p>
			</div>
			<p class="sermonOverview">Jesus is more than a nice example. He's the God who died for our sins. Now, when we trust in Him, our life changes-from the inside out, we live a Christ-like life.</p>
			<a href="" class="more">MORE »</a>
		</div>
	</div>
<?php }
$args=array(
	'order' => 'DESC',
	'orderby' => 'date',
	'paged' => $paged,
	'ignore_sticky_posts' => 1
);
$temp = $wp_query; // assign orginal query to temp variable for later use  
$wp_query = null;
$wp_query = new WP_Query($args); 
$posts_per_page = get_option('posts_per_page');
if( have_posts() ) {
    // Declare global $more (before the loop).
	while(have_posts()) : the_post();
		$more = 0; ?>
  		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h4><?php the_category(', ') ?></h4>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry" style="float:left;width:490px;">
 				<?php the_content('MORE »'); ?>
			</div>
			<div class="thumbnail" style="float:right; width:150px;">
				<?php the_post_thumbnail('thumbnail'); ?>
			</div>
			<br style="clear:both;" />
		</div>
	<?php endwhile; ?>
	<a href="">View All Recent Posts</a>
	<div class="navigation">
  		
	</div>
<?php } else { ?>
	<!--what to do if there are no posts-->
<?php } 
$wp_query = $temp; //reset back to original query
st_after_content();
get_sidebar('home');
get_footer();
?>