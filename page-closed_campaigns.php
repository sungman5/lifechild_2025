<?php get_header(); ?>
<main id="closed-campaigns">
    <section>
        <div class="wrapper8">
            <header class="section-header">
                <h2 class="section-header-headline">종료된 캠페인</h2>
                <p class="section-header-desc">
                    종료된 캠페인입니다. 함께해주셔서 고맙습니다.
                </p>
            </header>
            <ul class="campaign-list">
                <?php
                $args = [
                    'post_type' => 'campaign',
                    'post_status' => 'publish',
                    'posts_per_page' => 7,
                    'tax_query' => [
                        [
                            'taxonomy' => 'campaign_status',
                            'field' => 'slug',
                            'terms' => 'cat-campaigns-closed'
                        ]
                    ]
                ];

                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()): ?>
                    <?php while ($query->have_posts()): ?>
                        <?php $query->the_post(); ?>
                        <li class="campaign-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <div class="campaign-content">
                                    <h3 class="campaign-title"><?php the_title(); ?></h3>
                                    <p class="campaign-excerpt"><?php echo get_the_excerpt(); ?></p>
                                    <div class="campaign-tags">
                                        <p class="campaign-active-banner campaign-closed-banner">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                 fill="#00ff26" viewBox="0 0 256 256">
                                                <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
                                            </svg>
                                            종료됨
                                        </p>
                                        <?php
                                        $tags = get_the_terms(get_the_ID(), 'post_tag');
                                        if ($tags && !is_wp_error($tags)) {
                                            foreach ($tags as $tag) {
                                                echo '<p class="campaign-tag">' . esc_html($tag->name) . '</p> ';
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
    <?php get_template_part('template-parts/campaign-sub-menu') ?>
</main>
<?php get_footer(); ?>
