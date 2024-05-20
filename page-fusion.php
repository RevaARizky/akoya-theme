<?php
/**
 * Template Name: Fusion Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akoyaspabali
 */
wp_enqueue_style('treatment-css', get_template_directory_uri() . '/css/treatment.css', array(), NULL);
get_header('new'); ?>

<style>
    .tab-select .active {
        background-color:#7e5230;
        color: white;
    }
</style>

<main id="primary">

    <div class="position-absolute bg-overlay-header"></div>

    <section class="container position-relative bg-transparent" id="intro-text" style="padding-top: 160px; argin-bottom: 50px; z-index: 2;">
        <div class="page-title text-lg-center text-start mb-mobile-30 mb-40">
            <?php if(get_field('heading_text')) : ?>
                <h1 class="fw-mobile-700" style="font-size: 46px; font-weight: 500;"><?= get_field('heading_text'); ?></h1>
            <?php else : ?>
                <h1 class="fw-mobile-700" style="font-size: 46px; font-weight: 500;">Fusion Wellness <br /> at Akoya Spa</h1>
            <?php endif; ?>
        </div>
        <div class="page-subtitle text-lg-center text-start">
            <?php if(get_field('intro_text')) : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">
                    <?= get_field('intro_text'); ?>
                </p>
            <?php else : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">
                Let your inner health and well-being shine through. Akoya Spa and Fusion Wellness have come together to give you not only relaxation and beauty treatments, but also internal wellness. Our motto is, "If the inside shines, the outside glows."
                <br /> <br />
                Our signature selections of IV treatments are administered by fully-trained professional nurses. Certain treatments, such as Stem Cell or Peptide therapy, will be performed by licensed doctors and require appointment in advance. Our medical team is certified by Indonesia’s medical board. 
                </p>
            <?php endif; ?>
        </div>
    </section>

    <section class="container position-relative bg-transparent" style="margin-bottom: 40px; z-index: 4;">
        <div class="d-flex flex-wrap tab-select" style="padding-bottom: 34px; border-bottom: .6px solid #B4B4B4;">
       <!--  <?php 
        $loop = new WP_Query(array(
            'post_type' => 'fusion',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'post_status' => 'publish',
        ));

        if($loop->have_posts()) : $i = 0;
            while($loop->have_posts()) : $loop->the_post(); ?>
            
            <div class="item text-uppercase mb-0 col-mobile-12<?= $i++ == 0 ? ' active init' : '' ?>" data-id="<?= get_the_id() ?>"  style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                <?= get_the_title(); ?>
            </div>
        
        <?php endwhile;
        wp_reset_query();
        endif;
        ?> -->
            <!-- <div class="item text-uppercase mb-0 active" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Spa Package
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Combination Packages
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Massages
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Treatments
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Ultimate Facial
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Hair
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                Relaxation Bath
            </div>
            <div class="item text-uppercase mb-0" style="font-size: 14px!important; font-weight: 400; cursor: pointer; border-radius: 6px; padding: 16px;">
                Celebrate Your Romance
            </div> -->
        </div>
    </section>

    <section class="container position-relative bg-transparent" id="package-detail" style="z-index: 4;">
        <div class="package-title" style="margin-bottom: 40px;">
            <h2 style="font-size: 46px; font-weight: 500;">Spa Package</h2>
        </div>
        <div class="d-flex flex-mobile-wrap" style="column-gap: 85px;">
            <div class="item image-container">
            </div>
            <div class="item package-container">

                <!-- <div class="tab-package" style="margin-bottom: 30px;">
                    <div class="tab-title" style="margin-bottom: 10px;">
                        <p class="fst-italic mb-0" style="font-size: 22px!important; font-weight: 400;">The Feminine Spa Package</p>
                    </div>
                    <div class="tab-subtitle" style="padding-bottom: 12px; border-bottom: .6px solid black; margin-bottom: 20px;">
                        <p class="fst-italic mb-0" style="font-size: 18px!important; font-weight: 600;">(180 mins) 3,500,000</p>
                    </div>
                    <div class="tab-description">
                        <p class="" style="font-size: 16px!important; margin-bottom: 7px; line-height: 30px;">Designed for ladies, our unique package focuses on improving their delicate <br />
                        beauty while providing unprecedented relaxation. </p>
                        <ul class="ms-0" style="font-size: 16px!important;">
                            <li style="margin-bottom: 7px;">Refreshment on arrival</li>
                            <li style="margin-bottom: 7px;">Lady’s Scrub: Blend including Balinese scrub</li>
                            <li style="margin-bottom: 7px;">Balinese Massage with Essential Oil: Lavender, Rose, Frangipani, Jasmine, or Citrus</li>
                            <li style="margin-bottom: 7px;">All body Moisturizer: Skin replenishing Natural Yoghurt</li>
                            <li style="margin-bottom: 7px;">Bath of your choice– Cleansing Facial </li>
                        </ul>
                    </div>
                </div>
                
                <div class="tab-package" style="margin-bottom: 30px;">
                    <div class="tab-title" style="margin-bottom: 10px;">
                        <p class="fst-italic mb-0" style="font-size: 22px!important; font-weight: 400;">The Masculine Spa Package</p>
                    </div>
                    <div class="tab-subtitle" style="padding-bottom: 12px; border-bottom: .6px solid black; margin-bottom: 20px;">
                        <p class="fst-italic mb-0" style="font-size: 18px!important; font-weight: 600;">(180 mins) 3,500,000</p>
                    </div>
                    <div class="tab-description">
                        <p class="" style="font-size: 16px!important; margin-bottom: 7px; line-height: 30px;">Designed for the elegant gentleman, our package for men focuses on improving their wellbeing both on the inside and on the outside.</p>
                        <ul class="ms-0" style="font-size: 16px!important;">
                            <li style="margin-bottom: 7px;">Refreshment on arrival</li>
                            <li style="margin-bottom: 7px;">Gentleman’s Scrub: Blend including Coffee & Cocoa or Nutmeg & Candle Nut</li>
                            <li style="margin-bottom: 7px;">Balinese Massage with Essential Oil: Ginger, Vanilla, Cinnamon, Clove, or Combination</li>
                            <li style="margin-bottom: 7px;">Spice with Patchouli</li>
                            <li style="margin-bottom: 7px;">All body Moisturizer: Skin replenishing Natural Yoghurt</li>
                            <li style="margin-bottom: 7px;">Bath of your choice</li>
                            <li style="margin-bottom: 7px;">Cleansing Facial</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tab-package" style="margin-bottom: 30px;">
                    <div class="tab-title" style="margin-bottom: 10px;">
                        <p class="fst-italic mb-0" style="font-size: 22px!important; font-weight: 400;">Romantic Couples Treatment</p>
                    </div>
                    <div class="tab-subtitle" style="padding-bottom: 12px; border-bottom: .6px solid black; margin-bottom: 20px;">
                        <p class="fst-italic mb-0" style="font-size: 18px!important; font-weight: 600;">(120 mins) 5,500,000 per couple</p>
                    </div>
                    <div class="tab-description">
                        <ul class="ms-0" style="font-size: 16px!important;">
                            <li style="margin-bottom: 7px;">Balinese Massage with choice of Essential Oil</li>
                            <li style="margin-bottom: 7px;">Body Scrub with Balinese Scrub</li>
                            <li style="margin-bottom: 7px;">Body Mask with Natural Yoghurt</li>
                            <li style="margin-bottom: 7px;">Bath of your choice</li>
                            <li style="margin-bottom: 7px;">Relaxation with fresh juice</li>
                        </ul>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <section class="container position-relative bg-transparent" id="box-wrapper" style="z-index: 2;">
        <div class="d-flex align-items-stretch flex-mobile-wrap" style="column-gap: 24px; --column-gap: 24px; --col-count: 3;">
        <?php if(have_rows('package_description')) : ?>
            <?php while(have_rows('package_description')) : the_row() ?>
                <div class="colc-4 col-12 d-flex align-items-center box mb-mobile-30" style="padding-top: 30px; padding-bottom: 30px; border: 1px solid #BF9270; border-radius: 6px;">
                    <div class="text-wrapper text-center w-100">
                        <?php if(get_sub_field('title')) : ?>
                            <p style="font-size: 20px!important; font-weight: 600; margin-bottom: 16px;"><?= get_sub_field('title') ?></p>
                        <?php endif; ?>
                        <?php if(get_sub_field('text')) : ?>
                            <p class="mb-0" style="font-size: 16px!important; font-weight: 600; color: #222;"><?= get_sub_field('text') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="colc-4 col-12 d-flex align-items-center box mb-mobile-30" style="padding-top: 30px; padding-bottom: 30px; border: 1px solid #BF9270; border-radius: 6px;">
                <div class="text-wrapper text-center w-100">
                    <p class="mb-0" style="font-size: 16px!important; font-weight: 600; color: #222;">Please arrive at your appointed time 10-15 minutes beforehand, late arrivals will have<br />the time deducted from their treatment.</p>
                </div>
            </div>
            <div class="colc-4 col-12 d-flex align-items-center box mb-mobile-30" style="padding-top: 30px; padding-bottom: 30px; border: 1px solid #BF9270; border-radius: 6px;">
                <div class="text-wrapper text-center w-100">
                    <p style="font-size: 20px!important; font-weight: 600; margin-bottom: 16px;">Hours of Operation</p>
                    <p class="mb-0" style="font-size: 16px!important; font-weight: 600; color: #222;">Daily: 10:00 – 22:00<br />Last Treatment<br />commencing at 20:00</p>
                </div>
            </div>
            <div class="colc-4 col-12 d-flex align-items-center box" style="padding-top: 30px; padding-bottom: 30px; border: 1px solid #BF9270; border-radius: 6px;">
                <div class="text-wrapper text-center w-100">
                    <p class="mb-0" style="font-size: 16px!important; font-weight: 600; color: #222;">All Prices are in IDR (Indonesian Rupiah) and subject to 21% Tax &amp; Service Charge.</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="container position-relative text-center py-5">
        <p style="font-size: 20px; font-weight: 600; color: #222;">For all other treatments by Fusion please <a href="https://www.fusionwellness.club/" class="text-decoration-underline" style="color: #222;" target="_blank">see here</a></p>
    </section>

</main>


<script>

const imageHandler = images => {
    jQuery('#package-detail .image-container').empty()
    console.log(images)
    images.forEach(image => {
        jQuery('#package-detail .image-container').append(`
            <div class="image-wrapper position-relative d-none d-lg-block" style="margin-bottom: 30px; padding-top: 100%;">
                <img src="${image}" class="w-100 position-absolute inset-0" style="border-radius: 6px;">
            </div>
        `)
    })
}

const packageHandler = (packages, images) => {
    jQuery('#package-detail .package-container').empty()
    let i = 0
    packages.forEach(package => {
        if(images[i]) {
            image = `<div class="image-wrapper d-block d-lg-none">
                    <img src="${images[i++]}" alt="" class="img-fluid w-100">
                </div>`
        } else {
            image = ''
        }
        jQuery('#package-detail .package-container').append(`
            <div class="tab-package" style="margin-bottom: 30px;">
                ${image}
                <div class="tab-title" style="margin-bottom: 10px;">
                    <p class="fst-italic mb-0" style="font-size: 22px!important; font-weight: 400;">${package.title}</p>
                </div>
                <div class="tab-subtitle" style="padding-bottom: 12px; border-bottom: .6px solid black; margin-bottom: 20px;">
                    <p class="fst-italic mb-0" style="font-size: 18px!important; font-weight: 600;">${package.subtitle}</p>
                </div>
                <div class="tab-description">
                    ${package.description}
                </div>
            </div>
        `)
    })
}

const ajaxCall = (id, target) => {
    jQuery.ajax({
        method: "POST",
        url: "<?= admin_url('admin-ajax.php') ?>",
        data: {
            action: 'getFusion',
            id: 6694
        },
        success: res => {
            let data = JSON.parse(res)
            jQuery(target).addClass('active')
            jQuery('.package-title h2').text(jQuery(target).text())
            imageHandler(data.image)
            packageHandler(data.package, data.image)
        }
    })
}

document.querySelectorAll('.tab-select .item').forEach((el) => {
    el.addEventListener('click', (e) => {
        if(e.target.classList.contains('active')) {
            return false
        }
        e.stopPropagation()
        let id = e.target.dataset.id
        jQuery('.tab-select .item').removeClass('active')
        ajaxCall(id, e.target)
    })
})

jQuery(document).ready(() => {
    let initEl = jQuery('.tab-select .init')
    ajaxCall(initEl.data('id'), initEl)
})

</script>

<?php

get_footer('new');