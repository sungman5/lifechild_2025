<?php get_header(); ?>
<main id="magazine">
    <div class="wrapper8">
        <header class="section-header">
            <h2 class="section-header-headline">소식지</h2>
            <p class="section-header-desc">
                아이들에게 꼭 필요한 물품을 직접 전해 따뜻한 나눔을 실천하세요.
            </p>
        </header>
        <div class="magazine-container">
            <ul class="magazine-grid">
                <?php
                $args_magazine = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'tax_query' => [
                        [
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'magazine',
                        ]
                    ]
                ];

                $query_magazine = new WP_Query($args_magazine);
                ?>

                <?php if ($query_magazine->have_posts()): ?>
                    <?php while ($query_magazine->have_posts()): ?>
                        <?php $query_magazine->the_post(); ?>
                        <li class="magazine-item">
                            <?php the_content(); ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <?php get_template_part('template-parts/news-floating-menu') ?>
</main>
<?php get_footer(); ?>
