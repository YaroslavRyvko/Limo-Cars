<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<?php $contact_btn = get_field('contact_btn', 'options');
		$contact_btn_title = $contact_btn['title'];
		$contact_btn_url = $contact_btn['url'];	?>

		<?php $account_link = get_field('account_link', 'options');
		$account_title = $account_link['title'];
		$account_url = $account_link['url']; ?>

		<?php $phone = get_field('header_phone', 'options'); ?>


		<div class="header__inner">
			<div class="header__left">
				<div class="header__logo">
					<a href="/">
						<img src="<?php the_field('main_logo', 'options'); ?>" alt="logo">
					</a>
				</div>
				<nav class="header__navigation">
					<?php wp_nav_menu([
						'theme_location' => 'main-menu',
						'menu_class' => 'header-menu',
						'container' => '',
					]); ?>
				</nav>
			</div>
			<div class="header__right">
				<a class="contact-btn" href="<?php echo $contact_btn_url; ?>"><?php echo $contact_btn_title; ?></a>
				<div class="header__contact-links">
					<a class="my-account-link" href="<?php echo $account_url; ?>"><?php echo $account_title; ?></a>
					<span class="links-separator">
						<?php insertImage('icons/line.svg'); ?>
					</span>
					<a class="phone-number-link" href="tel:<?php echo str_replace(' ', '', $phone); ?>"><?php echo $phone; ?></a>
				</div>
			</div>
			<div class="header__mobile-bar">
				<div class="header__navigation-mobile">
					<div class="navigation-mobile__logo">
						<a href="/">
							<img src="<?php the_field('nav_menu_logo', 'options'); ?>" alt="logo">
						</a>
					</div>
					<?php wp_nav_menu([
						'theme_location' => 'main-menu',
						'menu_class' => 'header-menu-mobile',
						'container' => '',
					]); ?>
					<div class="navigation-mobile__contact-links">
						<a class="my-account-link" href="<?php echo $account_url; ?>"><?php echo $account_title; ?></a>
						<span class="links-separator"> / </span>
						<a class="phone-number-link" href="tel:<?php echo str_replace(' ', '', $phone); ?>"><?php echo $phone; ?></a>
					</div>
					<a class="contact-btn" href="<?php echo $contact_btn_url; ?>"><?php echo $contact_btn_title; ?></a>
				</div>
				<div class="navigation-btn"> </div>
				<div class="header__logo-mobile">
					<a href="/">
						<img src="<?php the_field('small_logo', 'options'); ?>" alt="logo">
					</a>
				</div>
			</div>
		</div>
	</header>