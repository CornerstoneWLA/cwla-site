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
	<p>LATEST SERMON</p>
	<div class="latest-sermon" style="margin-bottom:20px;">
		<div class="sermon-info" style="float:left; width:250px;">
			<?php $wp_query->the_post(); ?>
			<div class="left-sermon-info" style="float:left;width:60px;">
				<img src="http://localhost:8888/Cornerstone/trunk/wp-content/uploads/2012/12/playbutton.jpeg" height="50" width="50" />
			</div>
			<div class="right-sermon-info" style="float:left;">
				<p style="margin:0;">True Spirituality</p>
				<h4 style="margin:0;"><?php the_title_attribute(); ?></h4>
				<p style="margin-bottom:10px;"><?php the_date(); ?></p>
				<a href="">View All Sermons</a>
			</div>
		</div>
		<div class="sermon-excerpt" style="float:right; width:375px;">
			<b>Colossians 3:12-17</b>
			<?php the_content('MORE »'); ?>
		</div>
		<br style="clear:both;" />
	</div>
<?php }
$shown_categories = array();
$args=array(
	'order' => 'DESC',
	'orderby' => 'date',
	'paged' => $paged,
	'ignore_sticky_posts' => 1
);
$temp = $wp_query; // assign orginal query to temp variable for later use  
$wp_query = null;
$wp_query = new WP_Query($args); 
if( have_posts() ) {
    // Declare global $more (before the loop).
	for ($i = 0; $i < 3 ; ) {
		if($wp_query->have_posts()) {
			$wp_query->the_post(); 
			$more = 0; 
			$category = get_the_category();
			if(!in_array($category[0]->cat_name, $shown_categories)) { ?>
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
				<?php $i++; ?>
				<?php $shown_categories[] = $category[0]->cat_name; ?>
				<?php if($i == 3) { ?>
					<a href="">View All Recent Posts</a>
				<?php } ?>
				</div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
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