<div class="clear"></div>
</div> <!-- closes .container -->

<footer id="footer" role="contentinfo" class="footer header-footer-bgcolor">
<!-- Back to Top link placed here; not in the loop -->
	<a href="#" class="back-to-top"><?php esc_html_e( 'Back to Top', 'urban-square' ) ?></a>

	<?php if( is_active_sidebar( 'footer-widget-area' ) ) { ?>
		<ul class="footer__widgets xoxo">
			<?php dynamic_sidebar( 'footer-widget-area' ); ?>
		</ul>
	<?php } ?>
	<div id="copyright" class="footer__copyright">
		<?php urban_square_footer_info(); // This function is in the file: options -> urban_square_customizer_frontend.php ?>
	</div>
<?php urban_square_footer_credits(); // This function is in the file: options -> urban_square_customizer_frontend.php ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
