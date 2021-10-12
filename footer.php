<footer class="footer-wrap wraper-100"><div class="footer-block wraper-1240">
	<div class="footer-flex">
		<div class="footer-form">
			<h4 class="footer-form-title"><?php _e('Есть вопросы?','ds'); ?></h4>
			<form id="feedback-form1" action="<?php echo bloginfo('template_url'); ?>/scripts/<?php _e('contacts.php','ds'); ?>" enctype="multipart/form-data" method="post" class="feedback-form placeholder_dark" autocomplete="off">
				<input type="hidden" name="titleFF">
				<input name="nameFF" type="text" placeholder="<?php _e('Имя','ds'); ?>" required/>
				<input name="telFF" class="m-tel" type="tel" placeholder="<?php _e('Телефон','ds'); ?>" required/>
				<textarea name="msgFF"  placeholder="<?php _e('Сообщение...','ds'); ?>"></textarea>
				<input class="feedback-form-btn" name="send" type="submit" value="<?php _e('Отправить','ds'); ?>" /> 
			</form>
		</div>
		<div class="footer-menu-flex">
			<div class="footer-menu">
				<h4 class="footer-menu-title"><?php _e('Меню','ds'); ?></h4>
<?php wp_nav_menu(array('theme_location' => 'footer-menu1','container' => false)); ?>
			</div>
			<div class="footer-menu">
				<h4 class="footer-menu-title"><?php _e('Каталоги','ds'); ?></h4>
<?php wp_nav_menu(array('theme_location' => 'footer-menu2','container' => false)); ?>
			</div>
			<div class="footer-menu">
				<h4 class="footer-menu-title"><?php _e('Услуги','ds'); ?></h4>
<?php wp_nav_menu(array('theme_location' => 'footer-menu3','container' => false)); ?>
			</div>
		</div>
	</div>
	<div class="footer-bottom-flex">
		<div class="footer-contacts-block">
			<p class="footer-contacts-title"><?php _e('Мы в соц. сетях','ds'); ?>:</p>
			<div class="footer-contacts"><ul>
					<?php while(the_repeater_field('c-soc', 138)): ?>
								<li><a href="<?php the_sub_field('c-soc-link'); ?>" target="_blank" style="background-image: url(<?php the_sub_field('c-soc-img'); ?>);"></a></li>
							<?php endwhile; ?>
			</ul><div class="clear"></div></div> 
		</div>
		<div class="footer-cop-block">
			<div class="footer-cop"><p>© Copyright 2015-<?php echo date('Y'); ?></p></div>
			<div class="footer-madeby"><p><?php _e('Разработка','ds'); ?>: <a href="https://web-desire.com/" target="_blank">Web-Desire</a></p></div>
		</div>
	</div>
</div></footer>

<div class="click-pop" id="bg-popup"></div>
<div id="window">
	<h4 class="pop-form-title"><?php _e('Есть вопросы?','ds'); ?></h4>
	<form id="feedback-form2" action="<?php echo bloginfo('template_url'); ?>/scripts/<?php _e('contacts.php','ds'); ?>" enctype="multipart/form-data" method="post" class="feedback-form placeholder_dark" autocomplete="off">
		<input type="hidden" name="titleFF">
		<input name="nameFF" type="text" placeholder="<?php _e('Имя','ds'); ?>" required/>
<input name="telFF" class="m-tel" type="tel" placeholder="<?php _e('Телефон','ds'); ?>" required/>
		<textarea name="msgFF"  placeholder="<?php _e('Сообщение...','ds'); ?>"></textarea>
		<input class="feedback-form-btn" name="send" type="submit" value="<?php _e('Отправить','ds'); ?>" /> 
	</form>
</div>

<a href='javascript:void(0)' class="btn-open-pop click-pop"></a>
<a href='javascript:void(0)' class="tops"></a>