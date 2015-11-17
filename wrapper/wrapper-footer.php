<?php /* Wrapper Name: Footer */ ?>

<?php if( is_front_page() ) { ?>
	<div class="footer-widgets">
		<div class="line-ver">
			<div class="row">
				
				<div class="span6">
					<div data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
						<?php dynamic_sidebar("footer-sidebar-1"); ?>
					</div>
					<!-- Social Links -->
					<div class="social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
						<?php get_template_part("static/static-social-networks"); ?>
					</div>
					<!-- /Social Links -->
				</div>
				
				<div class="span1"></div>
				
				<div class="span5" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
					<?php dynamic_sidebar("footer-sidebar-2"); ?>
				</div>
				
			</div>
		</div>
	</div>
<?php } ?>

<div class="footer_block">

	<div class="row">
		<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
			<?php dynamic_sidebar("footer-sidebar-3"); ?>
		</div>
	</div>
	
	<div class="copyright">
		<div class="row">
			<div class="span7" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
				<?php get_template_part("static/static-footer-nav"); ?>
			</div>
			<div class="span5" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
				<?php get_template_part("static/static-footer-text"); ?>
			</div>
		</div>
	</div>
	
</div>

<?php if( is_front_page() ) { ?>
	<div data-motopress-type="static" data-motopress-static-file="static/static-map.php">
		<?php get_template_part("static/static-map"); ?>
	</div>
<?php } ?>