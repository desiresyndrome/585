<?php get_header(); ?>
<?php $queried_object = get_queried_object(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

		<main class="content">

		<div class="page-header my-cover wraper-100" style="background-image: url(<?php the_field('ph-img', $queried_object); ?>)">
			<h2 class="page-header-title"><?php if ( get_field('ph-title', $queried_object) ) {?><?php the_field('ph-title', $queried_object); ?><?php } else { ?><?php single_cat_title(); ?><?php } ?></h2> 
		</div>

		<div class="breadcrumbs-block wraper-1240">
			<div class="breadcrumbs"><ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span><a itemprop="item" href="<?php _e('/','ds'); ?>"><span itemprop="name"><?php _e('Главная','ds'); ?></span><meta itemprop="position" content="0"></a></span></li>
				<li><span><span><?php single_cat_title(); ?></span></span></li>
			</ul></div>
		</div>

			<div class="gl-catalog-wrap gl-catalog-wrap-change wraper-100"><div class="gl-catalog-block wraper-1240">
				<div class="gl-catalog-flex">
	 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="gl-catalog-item">
						<div class="gl-catalog-item-img"><div class="my-cover" style="background-image: url(<?php if ( has_post_thumbnail()) {$full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); echo ''.$full_image_url[0] . '';} ?>);"></div></div>
						<p class="gl-catalog-item-title"><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>" class="gl-catalog-item-link"></a>
					</div>
  	<?php endwhile; ?><?php else: ?><?php endif; ?>
				</div>
			</div></div>

				<?php if(get_field('ceo-text', $queried_object)): ?>
			<div class="my-text-wrap my-text-wrap-change wraper-100"><div class="my-text-block wraper-1240">
				<div class="my-text">
					<?php the_field('ceo-text', $queried_object); ?>
				</div> 
			</div></div>
		<?php endif; ?>

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