<?php
/**
 * Template Name: Reservation Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akoyaspabali
 */
get_header('new'); 
wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/contact.css', array(), NULL);?>

<main id="primary">
    <section class="outer-wrapper mb-60">
        <?php if(get_field('heading_image')) : ?>
            <img src="<?= wp_get_attachment_url(get_field('heading_image')) ?>" class="w-100" style="height: 600px; object-fit: cover;" alt="">
        <?php else : ?>
            <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/hero_contact.jpg" class="w-100" style="height: 600px; object-fit: cover;" alt="">
        <?php endif; ?>
    </section>
    <section class="container mb-30">
        <div class="page-title text-lg-center text-start mb-40">
            <?php if(get_field('heading_page')) : ?>
                <h1 class="fs-h1 fw-700"><?= get_field('heading_page') ?></h1>
            <?php else : ?>
                <h1 class="fs-h1 fw-700">Reservations</h1>
            <?php endif; ?>
<div class="col-lg-8 mb-5 mx-auto justify-content-center padding-x-mobile">
	Enhance your relaxation at Akoya Spa by securing your spot a day ahead—booking in advance ensures our attentive staff is ready to curate a rejuvenating experience tailored just for you.
			 </div>
    </section>

    <section class="container mb-section form-wrapper">
        <?= do_shortcode(get_field('contact_form')) ?>
    </section>

</main>

<?php
get_footer('new');