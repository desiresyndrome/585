<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<?php $queried_object = get_queried_object(); ?>

<div class="wrapper">

	<?php include 'head.php';?>

	<main class="content">

		<?php if(get_field('con-gmap')): ?>
			<div class="gmap-wrap wraper-100"><?php the_field('con-gmap'); ?></div>
		<?php endif; ?>

		<div class="breadcrumbs-block wraper-1240">
			<div class="breadcrumbs"><ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span><a itemprop="item" href="<?php _e('/','ds'); ?>"><span itemprop="name"><?php _e('Главная','ds'); ?></span><meta itemprop="position" content="0"></a></span></li>
				<li><span><span><?php the_title(); ?></span></span></li>
			</ul></div>
		</div>

		<div class="contact-wrap wraper-100">
			<h1 class="contact-title"><?php the_title(); ?></h1>
			<div class="contact-flex wraper-1040">
				<div class="contact-item">
					<?php if(get_field('con-name1')): ?>
						<div class="contact-name"><p><?php the_field('con-name1'); ?>:</p></div>
					<?php endif; ?>
					<div class="contact-tel"><ul>
						<?php if(get_field('con-tel1')): ?>
							<li><?php the_field('con-tel1'); ?></li>
						<?php endif; ?>
						<?php if(get_field('con-tel2')): ?>
							<li><?php the_field('con-tel2'); ?></li>
						<?php endif; ?>
						<?php if(get_field('con-mail1')): ?>
							<li><a href="mailto:<?php the_field('con-mail1'); ?>"><?php the_field('con-mail1'); ?></a></li>
						<?php endif; ?>
					</ul></div>
				</div>
				<div class="contact-item">
					<?php if(get_field('con-name2')): ?>
						<div class="contact-name"><p><?php the_field('con-name2'); ?>:</p></div>
					<?php endif; ?>
					<div class="contact-tel"><ul>
						<?php if(get_field('con-tel3')): ?>
							<li><?php the_field('con-tel3'); ?></li>
						<?php endif; ?>
						<?php if(get_field('con-tel4')): ?>
							<li><?php the_field('con-tel4'); ?></li>
						<?php endif; ?>
						<?php if(get_field('con-mail2')): ?>
							<li><a href="mailto:<?php the_field('con-mail2'); ?>"><?php the_field('con-mail2'); ?></a></li>
						<?php endif; ?>
					</ul></div>
				</div>
				<div class="contact-item">
					<p class="social-contacts-title"><?php _e('Мы в соц. сетях','ds'); ?>:</p>
					<div class="social-contacts"><ul>
						<?php while(the_repeater_field('c-soc')): ?>
							<li><a href="<?php the_sub_field('c-soc-link'); ?>" target="_blank" style="background-image: url(<?php the_sub_field('c-soc-img'); ?>);"></a></li>
						<?php endwhile; ?>
					</ul><div class="clear"></div></div> 
				</div>
			</div>
		</div>

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