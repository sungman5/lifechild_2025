<?php get_header(); ?>

<section>
    <div class="wrapper slide-wrapper">
        <ul class="slide-list">
            <?php

            $args = [
                'post_type' => 'campaign',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'tax_query' => [
                    [
                        'taxonomy' => 'campaign_status',
                        'field' => 'slug',
                        'terms' => 'cat-campaigns-active'
                    ],
                ]
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>
                    <li class="slide-item" style='background-image: url("<?php echo get_the_post_thumbnail_url() ?>")'>
                        <a href="">
                            <div class="slide-item-content">
                                <?php the_content() ?>
                                <?php the_excerpt() ?>
                            </div>
                        </a>
                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '게시물이 없습니다.';
            endif;
            ?>
        </ul>
    </div>
</section>
<section>
    <div class="wrapper">
        <header class="section-header">
            <h2 class="section-header-cat">라칠 뉴스룸</h2>
            <h3 class="section-header-desc">후원자와 함께 만들어가는 놀라운 변화</h3>
            <a href="" class="section-direct-btn">뉴스룸 더보기</a>
        </header>
        <ul class="news-list">
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'story',
                    ]
                ]
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post(); ?>

                    <li class="news-item">
                        <a href="">
                            <?php the_post_thumbnail(); ?>
                            <div class="news-item-heading">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </a>
                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '게시물이 없습니다';
            endif;
            ?>
        </ul>
    </div>
</section>
<section>
    <div class="wrapper grouphome-section">
        <div class="section-header">
            <h2 class="section-header-desc">
                매주 전해드리는<br>
                그룹홈 소식
            </h2>
            <a href="" class="section-direct-btn">뉴스룸 더보기</a>
        </div>
        <ul>
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'grouphome-news',
                    ]
                ]
            ];

            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post(); ?>

                    <li class="news-item">
                        <div class="news-item-heading">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </li>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '게시물이 없습니다';
            endif;
            ?>
        </ul>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>