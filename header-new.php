<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akoyaspabali
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_enqueue_style('global-css', get_template_directory_uri() . '/css/global.css', array(), NULL); ?>
	<?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta name="facebook-domain-verification" content="n7xbpfjw0nsqrjzv2xes2gmjob9hei" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<meta name="google-site-verification" content="pfsM66QxvBDANn-EG8Nzh869R_vhn9ea4ZtzAWjqr0E" />
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KHJCLVD');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" class="position-fixed top-0 start-0 end-0" style="z-index: 999; padding-top: 18px; padding-bottom: 18px;">
    <nav class="container bg-transparent">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo-wrapper">
				<a href="/" aria-label="Akoya Spa"> <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/04/akoya-spa-logo-black.png" class="img-fluid" alt="akoya spa logo" width="58" height="58"></a>
            </div>
            <div class="menu-wrapper d-none d-lg-block">
                <div class="d-flex">
                    <div class="menu-item" style="margin-right: 52px;">
                        <a href="/treatments/" class="text-decoration-none text-black" style="font-weight: 500;">Treatments</a>
                    </div>
                    <div class="menu-item" style="margin-right: 52px;">
                        <a href="/fusion-wellness/" class="text-decoration-none text-black" style="font-weight: 500;">Fusion Wellness</a>
                    </div>
                    <div class="menu-item" style="margin-right: 52px;">
                        <a href="/gallery/" class="text-decoration-none text-black" style="font-weight: 500;">Gallery</a>
                    </div>
                    <div class="menu-item" style="margin-right: 52px;">
                        <a href="/blog/" class="text-decoration-none text-black" style="font-weight: 500;">Blog</a>
                    </div>
                    <div class="menu-item">
                        <a href="/contact-us/" class="text-decoration-none text-black" style="font-weight: 500;">Contact</a>
                    </div>
                </div>
            </div>
            <div class="hamburger-wrapper d-block d-lg-none">
                <div class="hamburger">
                    <span class="d-block" style="margin-bottom: 6px;"></span>
                    <span class="d-block" style="margin-bottom: 6px;"></span>
                    <span class="d-block"></span>
                </div>
            </div>
        </div>
    </nav>
</header>

<aside id="mobile-menu" class="position-fixed text-center start-0 end-0 bottom-0 py-section">

    <div class="menu-link" style="margin-bottom: 15px;">
        <a href="/treatments/" class="text-black text-decoration-none" style="font-size: 24px;">Treatments</a>
    </div>
    <div class="menu-link" style="margin-bottom: 15px;">
        <a href="/fusion-wellness/" class="text-black text-decoration-none" style="font-size: 24px;">Fusion Wellness</a>
    </div>
    <div class="menu-link" style="margin-bottom: 15px;">
        <a href="/gallery/" class="text-black text-decoration-none" style="font-size: 24px;">Gallery</a>
    </div>
    <div class="menu-link" style="margin-bottom: 15px;">
        <a href="/blog/" class="text-black text-decoration-none" style="font-size: 24px;">Blog</a>
    </div>
    <div class="menu-link">
        <a href="/contact-us/" class="text-black text-decoration-none" style="font-size: 24px;">Contact</a>
    </div>

</aside>