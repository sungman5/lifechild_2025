<?php get_header(); ?>
<main id="history-section">
    <div class="wrapper8">
        <div class="section-header">
            <h2 class="section-header-headline">
                연혁
            </h2>
            <p class="section-header-desc">라이프오브더칠드런이 걸어온 길</p>
        </div>
        <div class="history-container">
            <ul class="history-list">
                <?php
                $args_history = [
                    'post_type' => 'history',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'order_by' => 'date',
                ];
                $query_history = new WP_Query($args_history);
                ?>
                <?php if ($query_history->have_posts()): ?>
                    <?php while ($query_history->have_posts()): ?>
                        <?php $query_history->the_post(); ?>
                        <li class="history-body">
                            <h3 class="history-year"><?php echo get_the_title() ?></h3>
                            <?php the_content() ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
    <?php get_template_part('template-parts/intro-floating-menu') ?>
</main>
<?php get_footer(); ?>
