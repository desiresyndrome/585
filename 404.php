<?php get_header(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

	<main class="content">

	<div class="thnx-wrap wraper-100">
		 <div class="thnx-block">
			<h2><?php _e('<span>404</span>Страница не найдена...','ds'); ?></h2>
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