<?php
/**
 * Template Name: General Page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package akoyaspabali
 */
get_header('new'); ?>


    <main id="primary">

            <div class="position-absolute bg-overlay-header"></div>

            <div class="container position-relative bg-transparent mb-5" style="padding-top: 175px; z-index: 4">
                <div class="page-title text-center">
                    <h1 class="fs-h1"><?= get_the_title(); ?></h1>
                </div>
            </div>

            <div class="container position-relative bg-transparent col-12 col-lg-6 offset-lg-1 text-center mx-auto" style="z-index: 4">
                <div style="padding-bottom: 50px">
                        <?php the_content() ?>
                </div>
            </div>

    </main>


<?php
get_footer('new');