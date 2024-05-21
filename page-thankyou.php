<?php /** Template Name: Thankyou Page */  get_header('new'); ?>


<?php if(!isset($_POST['treatmentnoncename']) || !isset($_POST['treatmentnoncevalue'])) {
    wp_redirect('/treatments');
    exit;
} ?>

<?php $checkNonce = WPSimpleNonce::checkNonce($_POST['treatmentnoncename'], $_POST['treatmentnoncevalue']); ?>

<?php if(!$checkNonce) {
    wp_redirect('/');
    exit;
} ?>

<?php
$check = _is_email_exists($_POST['email']);
if(!$check) {
    $insert = wp_insert_post(array(
        'post_type' => 'email_list',
        'post_title' => $_POST['email'],
        'meta_input' => array(
            '_email_user' => $_POST['email']
        )
    ));
}
?>

<style>
    .summary-box {
        max-width: 800px;
        border: 1px solid #E1E1E1;
        box-shadow: 0px 7.58261px 22.74783px 0px rgba(170, 170, 170, 0.12);
        border-radius: 16px;
        background: #fff;
    }
</style>
<main id="primary" class="pb-5">

    <div id="heading-page" class="container mb-5 text-center" style="padding-top: 80px;">

        <div class="d-flex justify-content-center">
            <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/11/Group-4864.svg" class="img-fluid" alt="">
        </div>

        <div class="summary-subtitle text-center mb-2">
            <p class="mb-0" style="font-weight: 600; font-family: 'Cormorant', serif!important; font-size: 26px;">Dear <?= $_POST['fullname'] ?></p>
        </div>
        <div class="heading-page mb-5">
            <h4 class="fs-1">Your appointment <br class="d-none d-lg-block"> booked successfully</h4>
        </div>

        <div class="subheading-page">
            <p class="">Our friendly Staff will Contact You Soon In the meantime, You might check your <br class="d-none d-lg-block"> email to check the booking receipt we’ve sent.</p>
        </div>
    </div>

    <div class="container summary-box py-5 px-5 text-center">
        <div class="summary-title mb-4" style="border-bottom: 1px solid #EDEDED; padding-bottom: 15px; margin-bottom: 15px;">
            <h2 style="font-weight: 600;">Booking Summary</h2>
        </div>
        <div class="summary-list" style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #EDEDED;;">
            <div class="d-flex justify-content-between mb-3">
                <div class="label"><p class="mb-0" style="color: #707070;">Date and Time Booked</p></div>
                <div class="value"><p class="mb-0" style="font-weight: 500; color: #000;"><?= $_POST['treatdate'] ?> | <?= $_POST['treathour'] ?></p></div>
            </div>
            <div class="d-flex justify-content-start mb-3">
                <div class="label"><p class="mb-0" style="color: #707070;">Service Booked</p></div>
            </div>
            <?php if(isset($_POST['promo-code'])) {
                $loop = new WP_Query(array(
                    'post_type' => 'discount',
                    'name' => $_POST['promo-code']
                ));
                $discountItem = false;
                if($loop->have_posts()) {
                    while($loop->have_posts()){
                        $loop->the_post();
                        
                        $discountItem = array('id' => get_field('treatment', get_the_id()), 'price' => get_field('price_to', get_the_id()));
                    }
                }
            } ?>
            <?php foreach($_POST['treatpack'] as $treatment) : ?>
                <?php 
                $args = array(
                    'post_type' => 'treatment',
                    'p' => $treatment,
                ); 

                $loop = new WP_Query($args);

                if($loop->have_posts()) :
                    while($loop->have_posts()) :
                        $loop->the_post();
                        $price = number_format(get_field('price', get_the_id()));
                        if($discountItem && $discountItem['id'] == get_the_id()) {
                            $price = '<del>' . number_format(get_field('price', get_the_id())) . '</del>' . number_format($discountItem['price']);
                        }
                ?>
            <div class="d-flex justify-content-between mb-2">
                <div class="label"><p class="mb-0" style="color: #000; font-size: 18px; font-weight: 600;"><?= get_the_title() ?></p></div>
                <div class="value"><p class="mb-0" style="color: #000; font-size: 18px; font-weight: 600;">(<?= get_field('duration', get_the_id()) ?> mins) IDR <?= $price ?> </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

</main>

<?php get_footer('new'); ?>