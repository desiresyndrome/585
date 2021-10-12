 <?php
/*
Template Name: Single
*/
?>
<?php get_header(); ?>
<?php $category = get_the_category(); $term = get_term($category[0]->cat_ID);?>
	
	<div class="wrapper">

	<?php include 'head.php';?>

		<main class="content">

			<div class="page-header my-cover wraper-100" style="background-image: url(<?php the_field('ph-img'); ?>)">
		<h2 class="page-header-title"><?php if ( get_field('ph-title') ) {?><?php the_field('ph-title'); ?><?php } else { ?><?php the_title(); ?><?php } ?></h2> 
			</div>

			<div class="breadcrumbs-block wraper-1240"><div class="breadcrumbs"><ul>
<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span><a itemprop="item" href="<?php _e('/','ds'); ?>"><span itemprop="name"><?php _e('Главная','ds'); ?></span><meta itemprop="position" content="0"></a></span></li>
				<?php 
				$category = get_the_category(); 
				echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span><a itemprop="item" href="'.get_category_link($category[0]->cat_ID).'"><span itemprop="name">'.get_cat_name($category[0]->cat_ID).'</span><meta itemprop="position" content="1"></a></span></li>';
				?>
				<li><span><span><?php the_title(); ?></span></span></li>
			</ul></div></div>

			<div class="service-text-wrap wraper-100"><div class="service-text-block wraper-1240">
				<div class="service-text">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; ?><?php else: ?><?php endif; ?>
				</div> 
			</div></div>

		</main>

	<?php include 'footer.php';?>
		
	</div><!-- wrapper -->
 
	<script src="<?php bloginfo('template_directory'); ?>/scripts/nav.jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/my.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/maskinput.js"></script>
	<script>
	let elements = document.querySelectorAll("input[name='titleFF']");
	for (let elem of elements) {
		elem.value = document.title
	}
	document.getElementById("feedback-form1, feedback-form2").addEventListener("submit",function(a){var b=new XMLHttpRequest,c=this;a.preventDefault(),b.open("POST","<?php echo bloginfo('template_url'); ?>/scripts/contacts.php",!0),b.onreadystatechange=function(){4==b.readyState&&200==b.status&&(location.href = "/thnx")},b.onerror=function(){alert("Извините, данные не были переданы")},b.send(new FormData(c))},!1);
</script>

<?php wp_footer(); ?>
</body>
</html>