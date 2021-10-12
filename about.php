<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<?php $queried_object = get_queried_object(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

		<main class="content">

			<div class="page-header my-cover wraper-100" style="background-image: url(<?php the_field('ph-img'); ?>)">
		<h2 class="page-header-title"><?php if ( get_field('ph-title') ) {?><?php the_field('ph-title'); ?><?php } else { ?><?php the_title(); ?><?php } ?></h2> 
			</div>

		<div class="breadcrumbs-block wraper-1240">
			<div class="breadcrumbs"><ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span><a itemprop="item" href="<?php _e('/','ds'); ?>"><span itemprop="name"><?php _e('Главная','ds'); ?></span><meta itemprop="position" content="0"></a></span></li>
				<li><span><span><?php the_title(); ?></span></span></li>
			</ul></div>
		</div>

			<div class="service-text-wrap wraper-100"><div class="service-text-block wraper-1240">
				<div class="service-text">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?><?php else: ?><?php endif; ?>
				</div> 
			</div></div>

					<?php 
	$img_gallery = get_field('my-gallery');
	if ($img_gallery) { ?>
		<div class="gl-portfolio-wrap gl-portfolio-wrap-change wraper-100"><div class="gl-portfolio-block wraper-1240">
			<h2 class="gl-portfolio-title"><?php _e('Индивидуальные работы','ds'); ?></h2>
			<div class="portfolio-slider">
				<?php foreach( $img_gallery as $img ) { ?>
					<div><a href='<?php echo esc_url($img['url']); ?>' data-fancybox="gallery" class="my-cover gallery" style='background-image:url(<?php echo esc_url($img['sizes']['medium']); ?>)'></a></div>
				<?php } ?>
			</div>
			<div class="gl-portfolio-all-link"><a href="<?php _e('/nashi-raboty','ds'); ?>"><?php _e('Все работы','ds'); ?></a></div>
		</div></div>
	<?php } ?>

		</main>

	<?php include 'footer.php';?>
		
	</div><!-- wrapper -->
 
	<script src="<?php bloginfo('template_directory'); ?>/scripts/nav.jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/scripts/slick.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.fancybox.min.js"></script>
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