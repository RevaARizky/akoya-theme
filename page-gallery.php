<?php

/**
 * Template Name: Gallery Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akoyaspabali
 */
wp_enqueue_style('gallery-css', get_template_directory_uri() . "/css/gallery.css", array(), NULL);
get_header('new');
?>

<main id="primary" style="padding-top: 165px; padding-bottom: 120px;">
    <div class="position-absolute bg-overlay-header"></div>
    
    <div class="container position-relative bg-transparent" style="z-index: 2; margin-bottom: 90px;">
        <div class="title-wrapper text-center" style="margin-bottom: 20px;">
            <h1 style="font-size: 46px; font-weight: 500;">AKOYA SPA PROVIDES YOU<br />WITH THE BEST MASSAGE IN UBUD</h1>
        </div>
        <div class="text-wrapper text-center">
            <h2 style="font-size: 20px!important; font-weight: 400;">The Akoya Spa photo gallery shows you our spa ambiance and treatment services.</h2>
        </div>
    </div>
    
    <div class="container position-relative bg-transparent" style="padding-right: 104px; padding-left: 104px; z-index: 2;">
        <div class="d-flex flex-wrap gallery-container">
            <div class="colc-4 col-mobile-6">
                <div class="image-wrapper w-100 photo-dummy">
    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-entrance-area.webp" alt="Akoya Spa Entrance">
                </div>
            </div>
            <div class="colc-4 col-mobile-6">
                <div class="image-wrapper w-100 photo-dummy">
    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-with-view.webp" alt="Akoya Spa Interior with view">
                </div>
            </div>
            <div class="colc-4 col-mobile-6">
                 <div class="image-wrapper w-100 photo-dummy">
    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-sofa.webp" alt="Akoya Spa Interior">
                </div>
            </div>
            <div class="colc-4 col-mobile-6">
               <div class="image-wrapper w-100 photo-dummy">
    			<img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-treatment-area.webp" alt="Akoya Spa Treatment area">
                </div>
            </div>
			<div class="colc-4 col-mobile-6">
             <div class="image-wrapper w-100 photo-dummy">
    			<img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-ornament.webp" alt="Akoya Spa Ornament">
                </div>
            </div>
            <div class="colc-4 col-mobile-6">
				<div class="image-wrapper w-100 photo-dummy">
					<img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-massage-room.webp" alt="Akoya Spa Massage Room">				</div>
            </div>
            <div class="colc-4 col-mobile-6">
				<div class="image-wrapper w-100 photo-dummy">
              	 <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-wall-decoration.webp" alt="Akoya Spa Wall Decoration">
				</div>
            </div>
            <div class="colc-4 col-mobile-6">
				<div class="image-wrapper w-100 photo-dummy">
               <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-head-massage.webp" alt="Akoya Spa Head Massage">
				</div>
            </div>
			<div class="colc-4 col-mobile-6">
                <div class="image-wrapper w-100 photo-dummy">
    <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-facial.webp" alt="Akoya Spa Facial">
                </div>
            </div>
            <div class="colc-4 col-mobile-6">
				<div class="image-wrapper w-100 photo-dummy">
               <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-nail-treatment.webp" alt="Akoya Spa Nail Treatment">
				</div>
            </div>
			 <div class="colc-4 col-mobile-6">
				<div class="image-wrapper w-100 photo-dummy">
               <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-light-therapy.webp" alt="Akoya Spa Light Therapy">
				</div>
            </div>
            <div class="colc-4 col-mobile-6">
				<div class="image-wrapper w-100 photo-dummy">
               <img src="https://www.akoyaspabali.com/wp-content/uploads/2023/05/akoya-spa-shoulder-massage.webp" alt="Akoya Spa Shoulder Massage">
				</div>
            </div>
			
        </div>
    </div>

</main>


<?php
get_footer('new');