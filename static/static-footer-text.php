<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>

	<?php if($myfooter_text){?>
		<?php echo $myfooter_text; ?>
	<?php } else { ?>
	
		<strong><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a></strong> &copy; <?php echo date ('Y'); ?> <a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a>
		
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		More <a rel="nofollow" href="http://www.templatemonster.com/category/construction-company-wordpress-themes/" target="_blank">Construction Company WordPress Themes at TemplateMonster.com</a>
	<?php } ?>
</div>