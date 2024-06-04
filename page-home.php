<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gaia-da
 */

get_header('new'); 
wp_enqueue_style('home-css', get_template_directory_uri() . '/css/home.css', array(), NULL);?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="outer-wrapper d-flex justify-content-center align-items-center hero-header position-relative">
    <div class="container text-center bg-transparent text-white" style="z-index: 7;">
        <?php if(get_field('subheading_page')) : ?>
            <p class="fs-p3" style="margin-bottom: 8px; font-weight: 400; letter-spacing: 6px;"><?= get_field('subheading_page'); ?></p>
        <?php else : ?>
            <p class="fs-p3" style="margin-bottom: 8px; font-weight: 400; letter-spacing: 6px;">AKOYA SPA</p>
        <?php endif; ?>
        <?php if(get_field('heading_page')) : ?>
            <h1 class="fs-h1">BLISSFUL OASIS<br>OF TRANQUILITY AWAITS</h1>
        <?php else : ?>
            <h1 class="fs-h1">BLISSFUL OASIS<br>OF TRANQUILITY AWAITS</h1>
        <?php endif; ?>
    </div>
    <div class="video-header-wrapper">
        <video src="https://www.akoyaspabali.com/wp-content/uploads/2023/11/Akoya-.mp4" autoplay muted loop="true" class="position-absolute top-0 start-0 w-100 h-100 object-cover"></video>
    </div>
</div>

<div class="container py-section" style="padding-top: 80px; padding-bottom: 80px;">
    <div class="d-flex flex-mobile-wrap" style="column-gap: 126px;">
        <div class="col-lg-6 col-12 mb-mobile-60">
            <div class="title-wrapper" style="margin-bottom: 30px;">
                <?php if(get_field('left_section')['title']) : ?>
                    <h2 class="mb-0" style="font-size: 46px!important; font-weight: 500;"><?= get_field('left_section')['title'] ?></h2>
                <?php else : ?>
                    <h2 class="mb-0" style="font-size: 46px!important; font-weight: 500;">Akoya Spa</h2>
                <?php endif; ?>
            </div>
            <div class="content-wrapper" style="margin-bottom: 60px;">
            <?php if(get_field('left_section')['text']) : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;"><?= get_field('left_section')['text'] ?></p>
            <?php else : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">Akoya Spa is considered one of Bali's most tranquil settings, the perfect location for the pursuit of health and wellbeing. Exuding relaxation with its commodious couples’ massage rooms with full bath and facilities, luxurious reflexology chairs, beauty salon and easeful spaces with Zen-like water installations and sweeping valley views.</p>
            <?php endif; ?>
            </div>
            <div class="image-wrapper">
                <?php if(get_field('left_section')['image']) : ?>
                    <img src="<?= wp_get_attachment_url(get_field('left_section')['image'], 'full') ?>" alt="" class="img-fluid w-100">
                <?php else : ?>
                    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/home_1.jpg" alt="" class="img-fluid w-100">
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-6 col-12 d-mobile-flex flex-mobile-wrap">
            <div class="image-wrapper order-1" style="margin-bottom: 60px;">
                <?php if(get_field('right_section')['image']) : ?>
                    <img src="<?= wp_get_attachment_url(get_field('right_section')['image'], 'full') ?>" alt="" class="img-fluid">
                <?php else : ?>
                    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/home_2.jpg" alt="" class="img-fluid">
                <?php endif; ?>
            </div>
            <div class="content-wrapper order-0 mb-mobile-60">
                <?php if(get_field('right_section')['text']) : ?>
                    <p class="mb-0" style="font-size: 16px!important; font-weight: 400;"><?= get_field('right_section')['text']; ?></p>
                <?php else : ?>
                    <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">Treatments have been meticulously developed combining Western knowledge with traditional, time-honored Balinese wellness techniques handed down over centuries. In fact, the name Ubud for where Viceroy Bali is located, originates from the Balinese word “obat” which literally means “herb” or “medicine”. If this highland region is the centre of healing then Akoya is at its heart with unique traditions in health and healing that have given Ubud a reputation amongst spa practitioners worldwide.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- our treatment -->

<div class="outer-wrapper" style="background-color: #FFEDDB; padding-bottom: 160px; padding-top: 92px;">
    <div class="container bg-transparent">
        <div class="title-wrapper text-center">
            <?php if(get_field('treatment_heading')) : ?>
                <h3 style="font-size: 46px; font-weight: 500;"><?= get_field('treatment_heading') ?></h3>
            <?php else : ?>
                <h3 style="font-size: 46px; font-weight: 500;">Our Treatments</h3>
            <?php endif; ?>
        </div>
        <div class="subtitle-wrapper text-center">
            <?php if(get_field('treatment_subheading')) : ?>
                <p style="font-size: 16px!important; font-weight: 400;"><?= get_field('treatment_subheading'); ?></p>
            <?php else : ?>
                <p style="font-size: 16px!important; font-weight: 400;">Magnificently atop the valley with spectacular views overlooking the tropical jungle, Akoya Spa is considered one of Bali’s most tranquil settings, the perfect location for a health and wellness transformation.</p>
            <?php endif; ?>
        </div>
        <div class="d-flex flex-mobile-wrap owl-carousel packages-carousel" style="column-gap: 24px;">
        <?php if(have_rows('treatment_packages')) : ?>
            <?php while(have_rows('treatment_packages')) : the_row(); ?>
                <div class="col-12">
                    <a href="<?= get_sub_field('link'); ?>" style="color: inherit!important;">
                        <div class="image-wrapper" style="margin-bottom: 30px;">
                            <img src="<?= wp_get_attachment_url(get_sub_field('image'), 'full'); ?>" class="img-fluid w-100" alt="">
                        </div>
                        <div class="title-wrapper text-center" style="margin-bottom: 40px;">
                            <h4 style="font-size: 24px; font-weight: 500;"><?= get_sub_field('title') ?></h4>
                        </div>
                        <!--div class="btn-wrapper text-center">
                            <a href="#" class="text-white" style="font-size: 12px; font-weight: 500; padding: 10px 24px 10px 24px; background-color: #BF9270; border-radius: 6px;">Discover More</a>
                        </div-->
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-12">
                <div class="image-wrapper" style="margin-bottom: 30px;">
                    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/massage_and_treatment.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="title-wrapper text-center" style="margin-bottom: 40px;">
                    <h4 style="font-size: 24px; font-weight: 500;">Spa Packages</h4>
                </div>
                <!--div class="btn-wrapper text-center">
                    <a href="#" class="text-white" style="font-size: 12px; font-weight: 500; padding: 10px 24px 10px 24px; background-color: #BF9270; border-radius: 6px;">Discover More</a>
                </div-->
            </div>
            <div class="col-12">
                <div class="image-wrapper" style="margin-bottom: 30px;">
                    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/spa_packages.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="title-wrapper text-center" style="margin-bottom: 40px;">
                    <h4 style="font-size: 24px; font-weight: 500;">Massages</h4>
                </div>
                <!--div class="btn-wrapper text-center">
                    <a href="#" class="text-white" style="font-size: 12px; font-weight: 500; padding: 10px 24px 10px 24px; background-color: #BF9270; border-radius: 6px;">Discover More</a>
                </div-->
            </div>
            <div class="col-12">
                <div class="image-wrapper" style="margin-bottom: 30px;">
                    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/combination_packages.jpg" class="img-fluid w-100" alt="">
                </div>
                <div class="title-wrapper text-center" style="margin-bottom: 40px;">
                    <h4 style="font-size: 24px; font-weight: 500;">Hair Treatments</h4>
                </div>
                <!--div class="btn-wrapper text-center">
                    <a href="#" class="text-white" style="font-size: 12px; font-weight: 500; padding: 10px 24px 10px 24px; background-color: #BF9270; border-radius: 6px;">Discover More</a>
                </div-->
            </div>
            <?php endif; ?>
        </div>
		<div class="subtitle-wrapper text-center mt-5">
            <div class="btn-wrapper text-center">
                    <a href="/treatments" class="d-inline-flex" style="padding: 10px 24px 10px 24px; background-color: #7e5230; border-radius: 6px; font-size: 17px; font-weight: 500; color:#ffffff;"><span style="margin-right: 10px;">Discover More</span> <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/right_arrow.svg" alt="Dicover our treatments" width="12" height="9" class="img-fluid"></a>
                </div>
        </div>
    </div>
</div>

<!-- Promotional -->
<div class="container py-section">
    <div class="d-flex flex-mobile-wrap" style="column-gap: 20px;">
        <!--div class="col-lg-8 col-12 order-1 order-lg-0">
            <div class="image-wrapper w-100 position-relative" style="padding-top: 100%;">
            <img src="https://www.akoyaspabali.com/wp-content/uploads/2024/05/akoya-spa-reflexology.webp" class="img-fluid position-absolute h-100" style="inset: 0; object-fit: cover;" alt="">
            </div>
        </div-->
		 <div class="col-lg-6 col-12 order-0 order-lg-1 mb-5 mb-lg-0 px-2 pb-2" style="border: solid 1px #ddd">
			 <div class="image-wrapper w-100 position-relative" style="padding-top:5px; margin-bottom:30px;">
            <img src="https://www.akoyaspabali.com/wp-content/uploads/2024/05/akoya-spa-reception-promo.webp" class="img-fluid"  alt="Akoya Spa - Reflexology">
            </div>
            <div class="title-wrapper" style="margin-bottom: 20px;">
                <h4 class="mb-0 text-center" style="font-size: 36px!important; font-weight: 500;">Exclusive Offers for New Customers!</h4>
            </div>
            <div class="content-wrapper" style="margin-bottom: 42px;">
				<p class="mb-0" style="font-size: 16px!important; font-weight: 400;">We understand the unique challenges Bali's stunning landscapes and sunshine can present. Whether it's dullness from the sun or fatigue from exploration, we're here to help you stay refreshed and radiant.</p><br>
<strong>Here's your exclusive welcome offer:</strong>
	<ul style="list-style-type: circle;">
		<li>Free 30-Minute Express Facial or Reflexology for spending equal or above IDR 1 million</li>
		<li>Free upgrade 90 minutes treatment for 60 minutes traditional balinese massage booking</li>
	</ul>
<strong>Terms &amp; Conditions:</strong>
<ul style="list-style-type: circle;">	<li>This offer cannot be combined with other promotions.</li>
	<li>Valid for new guests only.</li>
	<li>Promotion is valid from January to December 2024.</li></ul>
            </div>
            <div class="btn-wrapper  text-center">
                <a href="/new-reservation/" class="d-inline-flex" style="padding: 10px 24px 10px 24px; background-color: #7e5230; border-radius: 6px; font-size: 17px; font-weight: 500; color:#ffffff;"><span style="margin-right: 10px;">Book Now</span> <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/right_arrow.svg" alt="Book Now" width="12" height="9" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-6 col-12 order-0 order-lg-1 mb-5 mb-lg-0 px-2 pb-2" style="border: solid 1px #ddd">
			 <div class="image-wrapper w-100 position-relative" style="padding-top:5px;margin-bottom:30px;">
            <img src="https://www.akoyaspabali.com/wp-content/uploads/2024/05/balinese-massage-promo.webp" class="img-fluid"  alt="Akoya Spa - Balinese Massage">
            </div>
            <div class="title-wrapper" style="margin-bottom: 20px;">
                <h4 class="mb-0 text-center" style="font-size: 36px!important; font-weight: 500;">Spread the Love with Akoya Spa!</h4>
            </div>
            <div class="content-wrapper" style="margin-bottom: 42px;">
			<strong>Refer friends using the code 'AKOYA2024' to receive:</strong>
	<ol Style="list-style-type: alpha;"><li>Both you and your friend get 20% off any treatments.</li>
		<li>Refer 3 friends to get a free 30-minute Balinese massage, reflexology, or facial.</li>
	</ol>
<strong>Terms &amp; Conditions:</strong>
<ul style="list-style-type: circle;">	<li>Refer as many friends as possible to earn more discounts.</li>
<li>The 20%  discount will be credited to both the referrer and the recipient's account once the Referral Code is successfully entered during registration.</li>
<li>To redeem rewards, they must be applied to any purchase transaction with a minimum of IDR 1,000,000 (price before discount) under a receipt.</li>
<!--li>Rewards are valid for all items at normal prices.</li-->
<li>The validity period of rewards is 90 days from the date of issue.</li>
<li>Rewards cannot be combined with any other promotions.</li>
<li>This offer is valid for new and existing members.</li></ul>
            </div>
            <div class="btn-wrapper text-center">
                <a href="/new-reservation/" class="d-inline-flex" style="padding: 10px 24px 10px 24px; background-color: #7e5230; border-radius: 6px; font-size: 17px; font-weight: 500; color:#ffffff;"><span style="margin-right: 10px;">Refer Friends Now</span> <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/right_arrow.svg" alt="Book Now" width="12" height="9" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>
<!-- end promotional-->

<hr>
<div class="container py-section">
    <div class="d-flex align-items-center flex-mobile-wrap" style="column-gap: 120px;">
        <div class="col-lg-5 col-12 order-1 order-lg-0">
            <div class="image-wrapper w-100 position-relative" style="padding-top: 100%;">
            <?php if(get_field('1_2-image-text')['image']) : ?>
                <img src="<?= wp_get_attachment_url(get_field('1_2-image-text')['image'], 'full'); ?>" class="img-fluid position-absolute h-100" style="inset: 0; object-fit: cover;" alt="">
            <?php else : ?>
                <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/combination_packages.jpg" class="img-fluid position-absolute h-100" style="inset: 0; object-fit: cover;" alt="">
            <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-7 col-12 order-0 order-lg-1 mb-5 mb-lg-0">
            <div class="title-wrapper" style="margin-bottom: 30px;">
            <?php if(get_field('1_2-image-text')['title']) : ?>
                <h4 class="mb-0" style="font-size: 46px!important; font-weight: 500;"><?= get_field('1_2-image-text')['title'] ?></h4>
            <?php else : ?>
                <h4 class="mb-0" style="font-size: 46px!important; font-weight: 500;">Ubud Best Spa</h4>
            <?php endif; ?>
            </div>
            <div class="content-wrapper" style="margin-bottom: 42px;">
            <?php if(get_field('1_2-image-text')['text']) : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;"><?= get_field('1_2-image-text')['text'] ?></p>
            <?php else : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">Bali has also been a crossroads for spa practices with a variety of techniques from Asia and Europe. Considered the finest Ubud spa, Akoya’s local therapists as an example have been professionally trained over the years by accredited Swiss therapists.<br>Note: Akoya Spa treatments are also provided in the privacy of guest villas with the exception of facials and hair treatments.</p>
            <?php endif; ?>
            </div>
            <div class="btn-wrapper">
                <a href="<?= get_field('1_2-image-text')['button_link'] ? get_field('1_2-image-text')['button_link'] : '/treatments' ?>" class="d-inline-flex" style="padding: 10px 24px 10px 24px; background-color: #7e5230; border-radius: 6px; font-size: 17px; font-weight: 500; color:#ffffff;"><span style="margin-right: 10px;"><?= get_field('1_2-image-text')['button_text'] ? get_field('1_2-image-text')['button_text'] : 'Discover More' ?></span> <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/right_arrow.svg" alt="Discover our spa" width="12" height="9" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>

<section class="outer-wrapper position-relative bg-black-before py-main bg-mask" id="appointment">
    <div class="container bg-transparent">
        <div class="col-12 text-center text-white">
            <div class="title-wrapper" style="margin-bottom: 30px;">
                <h4 style="font-size: 46px; font-weight: 500;"><?= get_field('appointment_heading') ? get_field('appointment_heading') : 'Make an Appointment' ?></h4>
            </div>
            <div class="content-wrapper mb-section">
                <?php if(get_field('appointment_description')) : ?>
                    <p class="mb-0" style="font-size: 16px; font-weight: 400;"><?= get_field('appointment_description') ?></p>
                <?php else : ?>
                    <p class="mb-0" style="font-size: 16px; font-weight: 400;">Akoya Spa treatments are also provided in the privacy of guest villas with the exception of facials and hair treatments. Please inquire at reception about availability or to make a booking.</p>
                <?php endif; ?>
            </div>
            <div class="btn-wrapper">
                <a href="<?= get_field('appointment_cta_link') ? get_field('appointment_cta_link') : '/contact-us' ?>" style="padding: 10px 24px; background-color: #7e5230; border-radius: 6px; font-size: 17px; font-weight: 500; color:#ffffff;"><?= get_field('appointment_cta') ? get_field('appointment_cta') : 'Contact us' ?></a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

jQuery(document).ready($ => {
    $('.packages-carousel').owlCarousel({
        responsive: {
            0: {
                center: true,
                items: 1,
                margin: 20,
                stagePadding: 60
            },
            1024: {
                items: 3,
                margin: 24,
            },

        }
    })
})

</script>

<?php

get_footer('new');