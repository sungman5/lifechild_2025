<?php get_header(); ?>
<main id="story">
    <div class="wrapper8">
        <header class="section-header">
            <h2 class="section-header-headline">스토리</h2>
            <p class="section-header-desc">
                여러분의 후원이 변화의 마중물이 되었습니다.
        </header>
        <div class="story-container">
            <ul class="story-grid">
                <?php
                $args = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                    'tax_query' => [
                        [
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'story'
                        ]
                    ]
                ];

                $query = new WP_Query($args);

                ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <li class="story-grid-item">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <div class="story-item-header">
                                    <div class="story-item-author">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 24); ?>
                                        <p class="story-item-author-name"><?php the_author() ?></p>
                                        <p class="article-time">

                                        </p>
                                    </div>
                                    <?php the_title('<h2 class="story-item-title">', '</h2>') ?>
                                    <p class="story-item-excerpt"><?php echo get_the_excerpt(); ?></p>
                                    <div class="story-item-tags">
                                        <?php
                                        $tags = get_the_terms(get_the_ID(), 'post_tag');
                                        if ($tags && !is_wp_error($tags)) {
                                            foreach ($tags as $tag) {
                                                echo '<p class="story-item-tag">' . esc_html($tag->name) . '</p> ';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endwhile ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            </ul>
        </div>
    </div>
    <?php get_template_part('template-parts/news-floating-menu') ?>
</main>
<?php get_footer(); ?>
