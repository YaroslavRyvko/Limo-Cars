<?php $fields = $args['fields']; ?>
<?php if (!empty($fields)) : ?>
	<section class="section-front">
		<div class="section-front__bg">
			<?php if (!empty($fields['background_desktop'])) : ?>
				<?php insertImage($fields['background_desktop'], 'background-desktop') ?>
			<?php endif ?>
			<?php if (!empty($fields['background_mobile'])) : ?>
				<?php insertImage($fields['background_mobile'], 'background-mobile') ?>
			<?php endif ?>
		</div>
		<div class="section-front__container">
			<div class="section-front__logo">
				<img src="<?php the_field('main_logo', 'options'); ?>" alt="logo">
			</div>
			<div class="section-front__text">
				<?php if (!empty($fields['subtitle'])) : ?>
					<h4 class="section-front__sub-title sub-title_default"><?php echo $fields['subtitle']; ?></h4>
				<?php endif ?>
				<?php if (!empty($fields['title'])) : ?>
					<h1 class="section-front__title title_default"><?php echo $fields['title']; ?></h1>
				<?php endif ?>
				<?php if (function_exists('yoast_breadcrumb') && is_front_page() != true) {
					yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
				} ?>
			</div>
			<div class="section-front__form-wrapper">
				<h4 class="form-wrapper__sub-title sub-title_default"><?php the_field('form_subtitle', 'options'); ?></h4>
				<h3 class="form-wrapper__title title_default"><?php the_field('form_title', 'options'); ?></h3>
				<div class="form-wrapper__form-tabs">
					<div class="form-wrapper__tab-btn active"><?php the_field('left_btn', 'options'); ?></div>
					<div class="form-wrapper__tab-btn"><?php the_field('right_btn', 'options'); ?></div>
				</div>
				<div class="form-wrapper__form form-wrapper__form-left">
					<?php echo do_shortcode('[contact-form-7 id="209" title="Contact form 1"]'); ?>
				</div>
				<div class="form-wrapper__form form-wrapper__form-right">
					<?php echo do_shortcode('[contact-form-7 id="210" title="À L’heure Form"]'); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif ?>