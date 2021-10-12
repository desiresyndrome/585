<header class="header-wrap my-active wraper-100"><div class="header-block">
	<?php 
	if(is_front_page()){echo '<div class="header-logo"></div>';}
	else {echo '<a href="/" class="header-logo"></a>';}
	?>
	<button class="nav-button cmn-toggle-switch"><span></span></button>
	<nav class="header-nav flexscroll"><?php wp_nav_menu(array('theme_location' => 'header-nav','container' => false)); ?></nav>
	<div class="header-right">
		<div class="header-tel"><ul>
			<li><?php the_field('con-tel1', 138); ?></li>
			<li><?php the_field('con-tel3', 138); ?></li>
		</ul></div>
		<div id="languages">
			<?php echo do_shortcode("[wpml_custom_lang_ISO]"); ?>
		</div>
	</div>
</div></header>
<div class="header-padding"></div>