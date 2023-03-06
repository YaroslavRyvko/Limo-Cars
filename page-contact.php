<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<main id="primary" class="contact-main">
	<div class="black-bg"></div>
	<?php get_template_part('views/partials/block-loader'); ?>
	<section class="section-contact">
		<div class="section-contact__container">
			<div class="contact-info">
				<div class="contact-info__container">
					<h3 class="contact-info__sub-title"><?php the_field('subtitle'); ?></h3>
					<h2 class="contact-info__title"><?php the_field('title'); ?></h2>
					<p class="contact-info__description"><?php the_field('adress'); ?></p>
					<a href="tel:<?php echo str_replace(' ', '', get_field('phone')); ?>" class="contact-info__phone"><?php the_field('phone'); ?></a>
					<div class="contact-info__line"></div>
					<h2 class="contact-info__question"><?php the_field('question'); ?>
					</h2>
					<p class="contact-info__answer"><?php the_field('answer'); ?></p>
				</div>
			</div>
			<div class="contact-form">
				<div class="contact-form__container">
					<h4 class="contact-form__title"><?php the_field('form_pretext'); ?></h4>
					<?php echo do_shortcode('[contact-form-7 id="501" title="Contact Form"]'); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>