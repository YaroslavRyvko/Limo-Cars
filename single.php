<?php get_header('small'); ?>
<?php
$args = array(
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'suppress_filters' => false,
	'paged' => $paged,
	'relation' => 'OR',
	'post_type' => 'post',
);

$query = new WP_Query();
$posts = $query->query($args);
?>

<main class="post-main">
	<?php get_template_part('views/partials/block-loader'); ?>
	<section class="section-post">
		<?php while (have_posts()) : ?>
			<div class="section-post__info">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				<?php the_post(); ?>
				<time datetime="<?php echo the_time('Y-m-d'); ?>">
					<?php echo the_time('j F Y'); ?>
				</time>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<div class="section-post__socials">
					<p>Partager</p>
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post->ID) ?>" target="_blank">
						<?php insertImage('icons/fb.svg'); ?>
					</a>
					<a href="">
						<?php insertImage('icons/insta.svg'); ?>
					</a>
					<a href="">
						<?php insertImage('icons/linkedin.svg'); ?>
					</a>
					<a href="">
						<?php insertImage('icons/mail-share.svg'); ?>
					</a>
				</div>
			</div>
			<div class="section-post__content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</section>
	<section class="section__recent-posts">
		<h4 class="sub-title_default">Dans le même thème</h4>
		<h3 class="title_default">Nos autres actualités</h3>
		<div class="posts__wrapper">
			<?php foreach ($posts as $post) : ?>
				<div class="posts-item">
					<a href="<?php echo get_permalink($post->ID) ?>" class="posts-item__image"><?php echo get_the_post_thumbnail($post->ID); ?></a>
					<div class="posts-item__info">
						<time datetime="<?php echo get_the_date('Y-m-d', $post->ID) ?>" class="posts-item__date">
							<?php echo get_the_date('j F Y', $post->ID)  ?>
						</time>
						<a href="<?php echo get_permalink($post->ID) ?>" class="posts-item__title"><?php echo $post->post_title ?></a>
						<div class="posts-item__text"><?php echo custom_excerpt(['maxchar' => 160]); ?></div>
						<a href="<?php echo get_permalink($post->ID) ?>" class="posts-item__link">
							<span class="posts-item__link-icon"><?php insertImage('/icons/arrow-right-black.svg') ?></span>
							<span class="posts-item__link-title">Lire l’article</span>
						</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</section>
</main><!-- #main -->

<?php get_footer();
