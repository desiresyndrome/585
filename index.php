<?php get_header(); ?>
<?php $queried_object = get_queried_object(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

	<?php if(get_field('ts-slide')): ?>
		<div class="gl-main-slider-wrap wraper-100">
			<div class="gl-main-slider">
				<?php while(the_repeater_field('ts-slide')): ?>
					<div><div class="my-cover" style="background-image: url(<?php the_sub_field('ts-slide-img'); ?>);"><div class="gl-main-slider-text wraper-1240"><p><?php the_sub_field('ts-slide-text'); ?></p></div></div></div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>

	<div class="gl-catalog-wrap wraper-100"><div class="gl-catalog-block wraper-1240">
		<h2 class="gl-catalog-title"><?php _e('Каталоги ювелирных изделий и украшений','ds'); ?></h2>
		<div class="gl-catalog-flex">
			<?php 
			$arg_category = array('orderby' => 'none', 'hide_empty' => 0, 'exclude' => '1,8', 'taxonomy' => 'category',);
			$categories = get_categories($arg_category);
			?>
			<?php 
			if($categories){foreach($categories as $cat){
				echo '<div class="gl-catalog-item">
				<div class="gl-catalog-item-img"><div class="my-cover" style="background-image: url('.get_field("cat-img",'category_'.$cat->term_id).');"></div></div>
				<p class="gl-catalog-item-title">'.$cat->name.'</p>
				<a href="'.get_category_link($cat->term_id).'" class="gl-catalog-item-link"></a>
				</div>';	
			}}
			?>
		</div>
	</div></div>

	<?php if(get_field('preim')): ?>
		<div class="gl-adv-wrap wraper-100"><div class="gl-adv-block wraper-1040">
			<h2 class="gl-adv-title"><?php _e('Наши преимущества','ds'); ?></h2>
			<div class="gl-adv-flex">
				<?php while(the_repeater_field('preim')): ?>
					<div class="gl-adv-item">
						<h3><?php the_sub_field('preim-title'); ?></h3>
						<p><?php the_sub_field('preim-text'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div></div>
	<?php endif; ?>

	<?php 
	$img_gallery = get_field('my-gallery');
	if ($img_gallery) { ?>
		<div class="gl-portfolio-wrap wraper-100"><div class="gl-portfolio-block wraper-1240">
			<h2 class="gl-portfolio-title"><?php _e('Индивидуальные работы','ds'); ?></h2>
			<div class="portfolio-slider">
				<?php foreach( $img_gallery as $img ) { ?>
					<div><a href='<?php echo esc_url($img['url']); ?>' data-fancybox="gallery" class="my-cover gallery" style='background-image:url(<?php echo esc_url($img['sizes']['medium']); ?>)'></a></div>
				<?php } ?>
			</div>
			<div class="gl-portfolio-all-link"><a href="<?php _e('/nashi-raboty','ds'); ?>"><?php _e('Все работы','ds'); ?></a></div>
		</div></div>
	<?php } ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="my-text-wrap wraper-100"><div class="my-text-block wraper-1240">
			<div class="my-text">
				<?php the_content(); ?>
			</div> 
		</div></div>
	<?php endwhile; ?><?php else: ?><?php endif; ?>

	<?php include 'footer.php';?>

</div><!-- wrapper -->

<script src="<?php bloginfo('template_directory'); ?>/scripts/nav.jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/slick.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.fancybox.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/my.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/maskinput.js"></script>
<script>
	document.getElementById("feedback-form1, feedback-form2").addEventListener("submit",function(a){var b=new XMLHttpRequest,c=this;a.preventDefault(),b.open("POST","<?php echo bloginfo('template_url'); ?>/scripts/contacts.php",!0),b.onreadystatechange=function(){4==b.readyState&&200==b.status&&(location.href = "/thnx")},b.onerror=function(){alert("Извините, данные не были переданы")},b.send(new FormData(c))},!1);
</script>

<?php wp_footer(); ?>
</body>
</html>