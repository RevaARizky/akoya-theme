<?php
/**
 * Template Name: Contact Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akoyaspabali
 */
get_header('new'); 
wp_enqueue_style('contact-css', get_template_directory_uri() . '/css/contact.css', array(), NULL);?>

<style>
    
</style>

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
                <h1 class="fs-h1 fw-700">Contact Us</h1>
            <?php endif; ?>
        </div>
        <div class="page-subtitle text-lg-center text-start mb-40">
            <?php if(get_field('address_text')) : ?>
                <h2 style="font-size:20px;">Contact Akoya Spa to experience a sense of true wellbeing. </h2>
                Jalan Lanyahan, Banjar Nagi, Ubud, Bali <br/>
                Phone/ WhatsApp: +62 361 970 777
            <?php else : ?>
                <p>Contact Akoya Spa to experience a sense of true wellbeing. <br />
                Jalan Lanyahan, Banjar Nagi, Ubud, Bali <br/>
                Phone/ WhatsApp: +62 361 970 777</p>
            <?php endif; ?>
        </div>
        <div class="page-description text-lg-center text-start">
            <?php if(get_field('address_subtext')) : ?>
                <p><?= get_field('address_subtext'); ?></p>
            <?php else : ?>
                <p>You can also contact our person in charge for specific enquiry.</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="container mb-lg-main mb-40">
        <div class="d-flex flex-mobile-wrap" style="row-gap: 24px; column-gap: 24px; --column-gap: 24px; --col-count: 3;">
        <?php if(have_rows('more_contact')) : ?>
            <?php while(have_rows('more_contact')) : the_row(); ?>
                <div class="colc-4 col-12" style="padding-top: 44px; padding-bottom: 44px; border: 1px solid #BF9270; border-radius: 6px;">
                    <div class="text-wrapper text-center">
                        <div class="title">
                            <p class="fs-p1 fw-600"><?= get_sub_field('title') ?></p>
                        </div>
                        <div class="description">
                            <p class="fw-600" style="color: #222222;"><?= get_sub_field('contact') ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="colc-4 col-12" style="padding-top: 44px; padding-bottom: 44px; border: 1px solid #BF9270; border-radius: 6px;">
                <div class="text-wrapper text-center">
                    <div class="title">
                        <p class="fs-p1 fw-600">General Manager</p>
                    </div>
                    <div class="description">
                        <p class="fw-600" style="color: #222;">Amanda Syrowatka<br />(Ms.)gm@akoyabalispa.com</p>
                    </div>
                </div>
            </div>
            <div class="colc-4 col-12" style="padding-top: 44px; padding-bottom: 44px; border: 1px solid #BF9270; border-radius: 6px;">
                <div class="text-wrapper text-center">
                    <div class="title">
                        <p class="fs-p1 fw-600">Public Relations</p>
                    </div>
                    <div class="description">
                        <p class="fw-600" style="color: #222;">Surya<br />(Ms.)pr@akoyabalispa.com</p>
                    </div>
                </div>
            </div>
            <div class="colc-4 col-12" style="padding-top: 44px; padding-bottom: 44px; border: 1px solid #BF9270; border-radius: 6px;">
                <div class="text-wrapper text-center">
                    <div class="title">
                        <p class="fs-p1 fw-600">Reservations</p>
                    </div>
                    <div class="description">
                        <p class="fw-600" style="color: #222;">Krisna<br />(Ms.)res@akoyabalispa.com</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="container mb-section form-wrapper">
        <div class="d-flex align-items-center flex-mobile-wrap" style="column-gap: 120px; --column-gap: 120px; --col-count: 2;">
            <div class="colc-6">
                <?= do_shortcode('[contact-form-7 id="6642" title="Contact"]') ?>
            </div>
            <div class="colc-6 image-wrapper">
                <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-contact.webp" class="w-100 object-cover" style="object-fit: cover;" alt="">
            </div>
        </div>
    </section>

    <section class="outer-wrapper" id="location">
        <!-- <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/dummy_map.jpg" class="w-100" style="object-fit: cover;" alt=""> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d7891.9598524161565!2d115.2658383266768!3d-8.501329425551848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x2dd23d739f22c9c3%3A0x54a38afd6b773d1c!2sUbud%2C+Gianyar%2C+Bali!3m2!1d-8.5068536!2d115.2624778!4m5!1s0x2dd23d575303250f%3A0xf11ac59f142c7fd1!2sLembah+Spa%2C+Viceroy+Bali%2C+Jl.+Lanyahan%2C+Banjar+Nagi%2C+Ubud%2C+Petulu%2C+Kec.+Gianyar%2C+Kabupaten+Gianyar%2C+Bali+80571!3m2!1d-8.493711!2d115.277974!5e0!3m2!1sen!2sid!4v1541594245421" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 65vh;" allowfullscreen="" title="googlemap"></iframe>
    </section>

</main>

<?php
get_footer('new');