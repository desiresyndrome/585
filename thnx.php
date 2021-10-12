<?php
/*
Template Name: Thnx
*/
?>
<?php get_header(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

	<main class="content">

	<div class="thnx-wrap wraper-100">
		 <div class="thnx-block">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?><?php else: ?><?php endif; ?>
			<div class="thnx-block-link"><a href="<?php _e('/','ds'); ?>"><?php _e('На главную','ds'); ?></a></div>
		</div>
	</div>

	</main>

	<?php include 'footer.php';?>

</div><!-- wrapper -->


<script src="<?php bloginfo('template_directory'); ?>/scripts/nav.jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/my.js"></script>

<?php wp_footer(); ?>
</body>
</html>