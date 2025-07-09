<?php get_header(); ?>
<main id="notice">
    <div class="wrapper8">
        <header class="section-header">
            <h2 class="section-header-headline">공지/언론보도</h2>
            <p class="section-header-cat">
                라이프오브더칠드런의 주요 소식과 언론 보도자료를 전해드립니다.
            </p>
        </header>
        <div class="board-list">
            <ul>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                $args_notice = [
                    'post_type' => 'post',
                    'posts_per_page' => 8,
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'tax_query' => [
                        [
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => ['notice', 'press']
                        ]
                    ]
                ];

                $query_notice = new WP_Query($args_notice);

                ?>
                <?php if ($query_notice->have_posts()): ?>
                    <?php while ($query_notice->have_posts()): ?>
                        <?php $query_notice->the_post(); ?>
                        <li class="board-item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="board-item-terms">
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'category');
                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            if ($term->slug == 'notice' || $term->slug == 'press') {
                                                echo esc_html($term->name);
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                                <p class="board-item-title"><?php the_title(); ?></p>
                                <p class="board-item-time"><?php the_time('Y-m-d') ?></p>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="board-pagination">
                <?php
                $big = 999999999; // unique number for replacement

                echo paginate_links([
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $query_notice->max_num_pages,
                    'prev_next' => false,
                ]);
                ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/news-floating-menu') ?>
</main>
<?php get_footer(); ?>
