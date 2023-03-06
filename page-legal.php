<?php /* Template Name: Legal Notice */ ?>

<?php get_header('small'); ?>

<main id="primary" class="legal-main">
	<?php get_template_part('views/partials/block-loader'); ?>
	<section class="section-content">
		<?php the_content(); ?>
	</section>
</main>

<?php get_footer(); ?>