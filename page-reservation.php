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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener( 'wpcf7submit', function( event ) {
            jQuery('.invalid-time').addClass('d-none')
            if(event.detail.apiResponse.invalid_fields.length > 0) {
                event.detail.apiResponse.invalid_fields.forEach(input => {
                    if(input.field == 'treathour') {
                        jQuery('.invalid-time').removeClass('d-none')
                    }
                })
            }
         })
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            console.log(event)
            // window.location.href = '/thank-you/'
            let that = jQuery(this)
            var form = document.createElement('form');
            form.setAttribute('method', 'post');
            form.setAttribute('action', '/thank-you');
            form.style.display = 'hidden';
            event.detail.inputs.forEach(input => {
                let inputVal = document.createElement("input");
                inputVal.setAttribute("type", "hidden");
                inputVal.setAttribute("name", input.name);
                inputVal.setAttribute("value", input.value);
                form.appendChild(inputVal);
            })
            document.body.appendChild(form);
            form.submit();
        }, false );

        setTimeout(() => {
            let date = new Date();
            document.querySelector('#calendar-select').value = `${date.getFullYear()}-${date.getMonth()+1}-${`${date.getDate()}`.length >= 2 ? date.getDate() : '0' + date.getDate()}`
        }, 1000);
    })
</script>

<?php
// function wp_roles_array() {
//     $editable_roles = get_editable_roles();
//     foreach ($editable_roles as $role => $details) {
//         $sub['role'] = esc_attr($role);
//         $sub['name'] = translate_user_role($details['name']);
//         $roles[] = $sub;
//     }
//     return $roles;
// }
// var_dump(wp_roles_array());
get_footer('new');