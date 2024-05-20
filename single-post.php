<?php 

/**
 * Single page for post
 * 
 * @package akoyaspabali
 */

 get_header('new'); ?>

<?php if(have_posts()) : ?>
    <main id="primary">
        <?php while(have_posts()) : the_post(); ?>

            <div class="position-absolute bg-overlay-header"></div>

            <div class="container position-relative bg-transparent mb-main" style="padding-top: 235px; z-index: 4">
                <div class="page-title text-center">
                    <h1 class="fs-h1 text-uppercase"><?= get_the_title(); ?></h1>
                </div>
            </div>

            <div class="container position-relative bg-transparent" style="z-index: 4">
                <div class="d-flex" style="column-gap: 60px; --column-gap: 60px; --col-count: 2;">
                    <div class="colc-7">
                        <div class="image-wrapper">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="w-100 img-fluid object-cover" style="height: 400px; border-radius: 6px;">
                        </div>
                        <?php the_content() ?>
                    </div>
                    <div class="colc-5">
                        <div class="sidebar-title mb-60">
                            <h4 class="fs-h2">Spa Blog</h4>
                        </div>
                        <?php 
                        
                        $loop = new WP_Query(array(
                            'post_type' => 'post',
                            'post__not_in' => array(get_the_id()),
                            'posts_per_page' => 3
                        ));

                        if($loop->have_posts()) :
                            while($loop->have_posts()) :
                                $loop->the_post(); ?>

                                <div class="item d-flex align-items-center mb-30" style="column-gap: 20px; --column-gap: 20px; --col-count: 2;">
                                    <div class="col-5">
                                        <div class="image-wrapper">
                                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid w-100 object-cover" style="border-radius: 6px;">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="text-wrapper">
                                            <a href="<?= get_the_permalink() ?>" class="fw-500 fs-p2 text-decoration-none text-black">
                                                <?= get_the_title() ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            <?php
                            endwhile;
                        endif;
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </main>
<?php endif; ?>

<?php
get_footer('new');