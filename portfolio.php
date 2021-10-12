 <?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
 <?php $queried_object = get_queried_object(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

	<main class="content">

		<div class="page-header my-cover wraper-100" style="background-image: url(<?php the_field('ph-img', $term); ?>)">
			<h2 class="page-header-title"><?php if ( get_field('ph-title') ) {?><?php the_field('ph-title'); ?><?php } else { ?><?php the_title(); ?><?php } ?></h2> 
		</div>

		<div class="breadcrumbs-block wraper-1240">
			<div class="breadcrumbs"><ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span><a itemprop="item" href="<?php _e('/','ds'); ?>"><span itemprop="name"><?php _e('Главная','ds'); ?></span><meta itemprop="position" content="0"></a></span></li>
				<li><span><span><?php the_title(); ?></span></span></li>
			</ul></div>
		</div>

		<div class="gallery-wrap gallery-wrap-change wraper-100"><div class="gallery-block wraper-1240">
			<div class="gallery-flex">
						<?php 
			$img_gallery = get_field('gallery');
			if ($img_gallery) { ?>
				<?php foreach( $img_gallery as $img ) { ?>
				<div class="gallery-item"><a href="<?php echo esc_url($img['url']); ?>" data-fancybox="gallery" class="gallery"><span class="my-cover lazy" data-src="<?php echo $img['sizes']['large']; ?>"></span></a></div>
	 				<?php } ?>
				<?php } ?>
			</div>
		</div></div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="my-text-wrap my-text-wrap-change wraper-100"><div class="my-text-block wraper-1240">
			<div class="my-text">
		<?php the_content(); ?>
			</div> 
		</div></div>
	<?php endwhile; ?><?php else: ?><?php endif; ?>

	</main>

	<?php include 'footer.php';?>

</div><!-- wrapper -->

<script src="<?php bloginfo('template_directory'); ?>/scripts/nav.jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.lazy.min.js"></script>
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