<?php wp_head(); ?>
<main id="store">
    <div class="wrapper"
         style="background-image: url('<?php echo get_template_directory_uri() ?>/img/photo-by-robert-bye-on-unsplash.jpg')">
        <div class="archive-header">
            <!--            <img class="archive-header-symbol" src="-->
            <?php //echo get_template_directory_uri() ?><!--/img/lc_logo_symbol.png" alt="">-->
            <h2 class="archive-header-headline">
                행복나눔가게
            </h2>
            <p class="archive-desc">라이프오브더칠드런 행복나눔가게</p>
        </div>
    </div>
    <div class="wrapper8">
        <div class="store-container">
            <?php
            $args_store = [
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order_by' => 'date',
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'store'
                    ]
                ]
            ];

            $query_store = new WP_Query($args_store);
            ?>
            <ul>
                <?php if ($query_store->have_posts()): ?>
                    <?php while ($query_store->have_posts()): ?>
                        <?php $query_store->the_post(); ?>
                        <li class="store-item">
                            <h3 class="store-name"><?php echo get_the_title(); ?></h3>
                            <p class="store-address"><?php echo get_the_excerpt(); ?></p>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>
