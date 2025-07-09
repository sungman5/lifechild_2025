<?php wp_head(); ?>
    <main id="grouphome-brief">
        <header class="gh-brief-header">
            <div class="gh-brief-title-area">
                <h2 class="gh-brief-title">라이프오브더칠드런 그룹홈 단신</h2>
                <p class="gh-brief-title-desc">라이프오브더칠드런이 함께한 그룹홈의 소식을 정직하게 전합니다.</p>
            </div>
            <a href="<?php echo home_url(); ?>">
                <img id="gh-brief-logo" src="<?php echo get_template_directory_uri() ?>/img/lc_logo.svg" alt="">
            </a>
        </header>
        <div class="gh-brief-container">
            <ul class="gh-brief-grid">
                <?php
                $args = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'grouphome-brief',
                        ]
                    ]
                ];

                $query = new WP_Query($args);
                ?>

                <?php if ($query->have_posts()): ?>
                    <?php while ($query->have_posts()): ?>
                        <?php $query->the_post(); ?>
                        <li class="gh-brief-item">
                            <div class="layout-gh-brief-item">
                                <h4 class="gh-brief-item-title">
                                    <?php the_title(); ?>
                                </h4>
                                <div class="layout-gh-brief-item-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="gh-brief-tags">
                            <?php
                            $tags = get_the_terms(get_the_ID(), 'post_tag');
                            if ($tags && !is_wp_error($tags)) {
                                foreach ($tags as $tag) {
                                    echo '<p class="gh-brief-item-tag">' . esc_html($tag->name) . '</p> ';
                                }
                            }
                            ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
        <?php get_template_part('template-parts/news-floating-menu') ?>
    </main>
<?php get_footer() ?>