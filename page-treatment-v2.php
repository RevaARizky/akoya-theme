<?php
/**
 * Template Name: Treatment Page V2
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akoyaspabali
 */
wp_enqueue_style('treatment-css', get_template_directory_uri() . '/css/treatment.css', array(), NULL);
get_header('new'); ?>

<!-- <?php var_dump($_COOKIE); ?> -->

<style>
    .tab-select .active, .tab-button {
        background-color: #7e5230;
        color: white;
    }
    @media(max-width: 768px) {
        .tab-button-wrapper {
            text-align: center;
        }
    }
    
</style>

<main id="primary">
    <style>
        .select2-container--default .select2-selection--multiple {
            padding: .5rem .75rem;
            border: 0;
            border: 1px solid #e2e4e5;
        }
    </style>

    <div class="position-absolute bg-overlay-header"></div>

    <section class="container position-relative bg-transparent" id="intro-text" style="padding-top: 270px; margin-bottom: 50px; z-index: 2;">
        <div class="page-title text-lg-center text-start mb-mobile-30">
            <?php if(get_field('heading_text')) : ?>
                <h1 class="fw-mobile-700" style="font-size: 46px; font-weight: 500;"><?= get_field('heading_text'); ?></h1>
            <?php else : ?>
                <h1 class="fw-mobile-700" style="font-size: 46px; font-weight: 500;">Balinese Massage <br />Healing traditions</h1>
            <?php endif; ?>
        </div>
        <div class="page-subtitle text-lg-center text-start">
            <?php if(get_field('intro_text')) : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">
                    <?= get_field('intro_text'); ?>
                </p>
            <?php else : ?>
                <p class="mb-0" style="font-size: 16px!important; font-weight: 400;">
                    The Luxurious Akoya Spa Translated “Valley Spa” offers a wide variety of treatments from Head to Toes, spoiling you is our job. Treatments have been distinctively developed merging modern western science with theage-old wisdom of Balinese healing traditions.
                    <br /> <br />
                    Treatments have been distinctively developed merging modern western science with the age-old wisdom of Balinese healing traditions. In fact, the name of Ubud town originates from the Balinese word “obat” whichliterally means “herb” or “medicine”. If this region is the centre of healing, then Akoya Spa is at its heart with unique traditions in healing relaxation. With couples’ treatment rooms, the spa welcomes guests to a soothing, integrative surrounding at one with this region.
                    <br /> <br />
                    Ubud has been a crossroads for spa practitioners from all over the world. Our local therapists are continuously professionally trained by accredited Swiss therapists. Our spa uses local treatment products of the highestquality or from exclusive brands.
                    <br /> <br />
                    Akoya Spa treatments are also provided in the privacy of guest villas with the exception of facials and hair treatments. Please inquire at reception about availability or to make a booking.
                </p>
            <?php endif; ?>
        </div>
    </section>

    <section class="container position-relative bg-transparent" style="margin-bottom: 40px; z-index: 4;">
        <div class="d-flex flex-wrap tab-select" style="padding-bottom: 34px; border-bottom: .6px solid #B4B4B4;">
        <?php 
        $loop = new WP_Query(array(
            'post_type' => 'treatment',
            'posts_per_page' => -1,
            'post_parent' => 0,
            'order' => 'ASC',
            'post_status' => 'publish',
        ));

        if($loop->have_posts()) : $i = 0;
            while($loop->have_posts()) : $loop->the_post(); ?>
            
            <div class="item text-uppercase mb-0 col-mobile-12<?= $i++ == 0 ? ' init' : '' ?>" data-id="<?= get_the_id() ?>" id="<?= str_replace(' ', '', strtolower(get_the_title())) ?>"  style="font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 16px;">
                <?= get_the_title(); ?>
            </div>
        
        <?php endwhile;
        wp_reset_query();
        endif;
        ?>
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

    <section class="container position-relative" id="package-detail" style="z-index: 4;">
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

    <section class="container position-relative bg-transparent" id="box-wrapper" style="margin-bottom: 80px; z-index: 2;">
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

</main>


<script>


const formatMoney = (amount, decimalCount = 0, decimal = ".", thousands = ",") => {
  try {
    decimalCount = Math.abs(decimalCount);
    decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

    const negativeSign = amount < 0 ? "-" : "";

    let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
    let j = (i.length > 3) ? i.length % 3 : 0;

    return negativeSign +
      (j ? i.substr(0, j) + thousands : '') +
      i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) +
      (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
  } catch (e) {
    console.log(e)
  }
};

Number.isInteger = Number.isInteger || function(value) {
  return typeof value === 'number' && 
    isFinite(value) && 
    Math.floor(value) === value;
};

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
        var subtitle = ''
        if(package.duration) {
            if(package.toHour) {
                var hour = package.duration / 60
                if(Number.isInteger(hour)) {
                    subtitle += `(${hour} Hours)`
                } else {
                    subtitle += `(${hour} Hours ${hour % 1 *60} Minutes)`
                }
            } else {
                subtitle += `(${package.duration} mins)`
            }
        }
        if(package.price) {
            subtitle += ` IDR ${formatMoney(package.price)}`
        }
        jQuery('#package-detail .package-container').append(`
            <div class="tab-package" style="margin-bottom: 30px;">
                ${image}
                <div class="tab-title" style="margin-bottom: 10px;">
                    <p class="fst-italic mb-0" style="font-size: 22px!important; font-weight: 400;">${package.title}</p>
                </div>
                <div class="tab-subtitle" style="padding-bottom: 12px; border-bottom: .6px solid black; margin-bottom: 20px;">
                    <p class="fst-italic mb-0" style="font-size: 18px!important; font-weight: 600;">${subtitle}</p>
                </div>
                <div class="tab-description mb-4">
                    ${package.description}
                </div>
                <div class="tab-button-wrapper">
                    <a href="/new-reservation" data-price="${package.subtitleurl}" data-objectid="${package.id}" data-parentid="${package.parentId}" data-treatment="${package.titleurl}" class="tab-button post-button" style="color: #fff; font-size: 14px!important; font-weight: 400; margin-right: 4px; cursor: pointer; border-radius: 6px; padding: 12px 20px;">Book Now</a>
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
            action: 'getPackage_v2',
            id: id
        },
        success: res => {
            let data = JSON.parse(res)
            console.log(data)
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

const getParameter = (name) => {
    if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search)) return decodeURIComponent(name[1])
}

jQuery(document).ready(() => {
    var param
    if(param = getParameter('treatment')) { 
        ajaxCall(jQuery(`#${param}`).data('id'), `#${param}`)
    } else {
        let initEl = jQuery('.tab-select .init')
        ajaxCall(initEl.data('id'), initEl)
    }
})

jQuery('main#primary').on('click', '.post-button', function(e) {
    e.preventDefault()
    let that = jQuery(this)
    var form = document.createElement('form');
    var inputPrice = document.createElement("input");
    inputPrice.setAttribute("type", "hidden");
    inputPrice.setAttribute("name", "price");
    inputPrice.setAttribute("value", that.data('price'));
    var inputTreatment = document.createElement("input");
    inputTreatment.setAttribute("type", "hidden");
    inputTreatment.setAttribute("name", "treatment");
    inputTreatment.setAttribute("value", that.data('treatment'));
    var idTreatment = document.createElement("input");
    idTreatment.setAttribute("type", "hidden");
    idTreatment.setAttribute("name", "id");
    idTreatment.setAttribute("value", that.data('objectid'));
    var parentTreatment = document.createElement("input");
    parentTreatment.setAttribute("type", "hidden");
    parentTreatment.setAttribute("name", "parentid");
    parentTreatment.setAttribute("value", that.data('parentid'));
    form.setAttribute('method', 'post');
    form.setAttribute('action', '/new-reservation');
    // form.setAttribute('action', '/reservations');
    form.style.display = 'hidden';
    form.appendChild(inputPrice);
    form.appendChild(inputTreatment);
    form.appendChild(idTreatment);
    form.appendChild(parentTreatment);
    document.body.appendChild(form);
    form.submit();
    return false;
})

</script>

<?php

get_footer('new');