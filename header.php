<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Les_Volanteux_-_Pop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<header class="navbar">
			<button class="navbar__toggle dashicons navbar__toggle-icon" src="./assets/menu.svg"
				aria-controls="primary-menu" aria-expanded="<? echo false; ?>"></button>
			<div class="navbar__brand">
				<?php if (!empty(the_custom_logo())): ?>
					<?php the_custom_logo(); ?>
				<?php else: ?>
					<img src="<?= get_template_directory_uri() ?>/assets/logoipsum-317.svg" alt="Logo">
				<?php endif; ?>
			</div>
            <nav class="navbar__nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'walker'         => new PrimaryMenuWalker(),
                    'container'      => false, // Remove the container if not needed
                ) );
                ?>
            </nav>
			<div class="navbar__socials">
				<img class="navbar__socials--facebook dashicons" src="./assets/facebook-alt.svg" alt="Facebook">
				<img class="navbar__socials--twitter dashicons" src="./assets/twitter.svg" alt="Twitter">
			</div>
		</header>