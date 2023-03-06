<footer class="footer">
	<?php $phone = get_field('footer_phone', 'options'); ?>
	<div class="footer__container">
		<div class="footer__logo">
			<a href="/">
				<img src="<?php the_field('footer_logo', 'options'); ?>" alt="logo">
			</a>
		</div>
		<a class="footer__phone-number" href="tel:<?php echo str_replace(' ', '', $phone); ?>"><?php echo $phone; ?></a>
		<div class="footer__navigation">
			<?php wp_nav_menu([
				'theme_location' => 'main-menu',
				'menu_class' => 'footer-menu',
				'container' => '',
			]); ?>
			<div class="footer__mail">
				<h4><?php the_field('footer_form_title', 'options'); ?></h4>
				<?php echo do_shortcode('[contact-form-7 id="211" title="Footer Mail Form"]'); ?>
			</div>
		</div>
		<div class="footer__bottom-block">
			<p>© Copyright <?php echo date("Y"); ?> LIMO CARS</p>
			<?php $privacy_link = get_field('privacy', 'options'); ?>
			<?php $conditions_link = get_field('conditions', 'options'); ?>
			<?php $legal_link = get_field('legal', 'options'); ?>
			<?php $cookies_link = get_field('cookies', 'options'); ?>
			<div class="footer__links">
				<a href="<?php echo $legal_link['url']; ?>"><?php echo $legal_link['title']; ?> / </a>
				<a href="<?php echo $conditions_link['url']; ?>"><?php echo $conditions_link['title']; ?> / </a>
				<a href="<?php echo $privacy_link['url']; ?>"><?php echo $privacy_link['title']; ?> / </a>
				<a href="<?php echo $cookies_link['url']; ?>"><?php echo $cookies_link['title']; ?></a>
			</div>
		</div>
	</div>

</footer>


<?php wp_footer(); ?>

</body>

</html>