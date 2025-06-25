<?php get_header(); ?>

<section>
    <div class="wrapper slide-wrapper">
        <ul class="slide-list">
            <?php

            $args_campaign_showcase = [
                'post_type' => 'campaign',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'tax_query' => [
                    [
                        'taxonomy' => 'campaign_slide_accept',
                        'field' => 'slug',
                        'terms' => 'slide-publish'
                    ],
                ]
            ];

            $query_campaign_showcase = new WP_Query($args_campaign_showcase);

            if ($query_campaign_showcase->have_posts()):
                while ($query_campaign_showcase->have_posts()): $query_campaign_showcase->the_post(); ?>
                    <li class="slide-item" style='background-image: url("<?php echo get_the_post_thumbnail_url() ?>")'>
                        <a href="<?php the_permalink(); ?>">
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
        <div class="slide-navigation">
            <p class="slide-navigation-numbers">

            </p>
            <div class="slide-navigation-arrow">
                <svg id="slide-navigation-prev" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="#000000"
                     viewBox="0 0 256 256">
                    <path d="M164.24,203.76a6,6,0,1,1-8.48,8.48l-80-80a6,6,0,0,1,0-8.48l80-80a6,6,0,0,1,8.48,8.48L88.49,128Z"></path>
                </svg>
                <svg id="slide-navigation-next" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="#000000"
                     viewBox="0 0 256 256">
                    <path d="M180.24,132.24l-80,80a6,6,0,0,1-8.48-8.48L167.51,128,91.76,52.24a6,6,0,0,1,8.48-8.48l80,80A6,6,0,0,1,180.24,132.24Z"></path>
                </svg>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="wrapper">
        <header class="section-header">
            <h3 class="section-header-cat">라칠 뉴스룸</h3>
            <h2 class="section-header-headline">후원자와 함께 만들어가는 <br class="br-show-mobile">놀라운 변화</h2>
            <a href="<?php home_url(); ?>/category/story" class="section-direct-btn">뉴스룸 더보기</a>
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
                        <a href="<?php the_permalink(); ?>">
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
<section id="grouphome-section">
    <div class="wrapper grouphome-wrapper">
        <div class="grouphome-header">
            <h2 class="grouphome-header-headline">
                매주 전해드리는<br>
                그룹홈 소식
            </h2>
            <a href="<?php home_url(); ?>/category/grouphome-news" class="section-direct-btn">그룹홈 단신 모두보기</a>
        </div>
        <ul class="grouphome-news-list">
            <?php
            $args_grouphome = [
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

            $query_grouphome = new WP_Query($args_grouphome);

            if ($query_grouphome->have_posts()):
                while ($query_grouphome->have_posts()):
                    $query_grouphome->the_post(); ?>
                    <li class="grouphome-news-item">
                        <div class="grouphome-news-item-heading">
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
<section class="slogan-section">
    <div class="wrapper slogan-wrapper">
        <header class="section-header">
            <h2 class="section-header-headline">단 한 명의 어린이도 <br class="br-show-mobile">소외받지 않는 그날까지</h2>
            <h3 class="section-header-cat">
                라이프오브더칠드런은 누적 후원자 10만 명과 함께,<br>
                국내외 소외된 아이들을 품는 일에 앞장섭니다.<br>
                투명한 경영 철학으로, 아동을 위한 사업에 후원금의 85% 이상을 사용하고 있습니다.
            </h3>
            <a href="<?php home_url(); ?>/category/financial-reports" class="section-direct-btn">
                2024년 재정보고
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                    <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                </svg>
            </a>
        </header>
        <img id="slogan-image" src="<?php echo get_template_directory_uri() ?>/img/mi-pham-unsplash.jpg" alt=""
             title="Photo by MI PHAM on Unsplash">
    </div>
</section>
<section class="index-business-section">
    <div class="wrapper">


        <header class="section-header">
            <h3 class="section-header-cat">
                사업 소개
            </h3>
            <h2 class="section-header-headline">
                세상을 바꾸는 첫 걸음,<br>
                라이프오브더칠드런의 사업을 <br class="br-show-mobile">소개합니다.
            </h2>
        </header>
        <ul class="index-business-list">
            <li class="index-business-item">
                <a href="<?php home_url(); ?>/global">
                    <div class="index-business-item-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0066d9"
                             viewBox="0 0 256 256">
                            <path d="M215,168.71a96.42,96.42,0,0,1-30.54,37l-9.36-9.37a8,8,0,0,0-3.63-2.09L150,188.59a8,8,0,0,1-5.88-8.9l2.38-16.2a8,8,0,0,1,4.84-6.22l30.46-12.66a8,8,0,0,1,8.47,1.49ZM159.89,105,182.06,79.2A8,8,0,0,0,184,74V50A96,96,0,0,0,50.49,184.65l9.92-6.52A8,8,0,0,0,64,171.49l.21-36.23a8.06,8.06,0,0,1,1.35-4.41l20.94-31.3a8,8,0,0,1,11.34-2l19.81,13a8.06,8.06,0,0,0,5.77,1.45l31.46-4.26A8,8,0,0,0,159.89,105Z"
                                  opacity="0.2"></path>
                            <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,16a87.5,87.5,0,0,1,48,14.28V74L153.83,99.74,122.36,104l-.31-.22L102.38,90.92A16,16,0,0,0,79.87,95.1L58.93,126.4a16,16,0,0,0-2.7,8.81L56,171.44l-3.27,2.15A88,88,0,0,1,128,40ZM62.29,186.47l2.52-1.65A16,16,0,0,0,72,171.53l.21-36.23L93.17,104a3.62,3.62,0,0,0,.32.22l19.67,12.87a15.94,15.94,0,0,0,11.35,2.77L156,115.59a16,16,0,0,0,10-5.41l22.17-25.76A16,16,0,0,0,192,74V67.67A87.87,87.87,0,0,1,211.77,155l-16.14-14.76a16,16,0,0,0-16.93-3l-30.46,12.65a16.08,16.08,0,0,0-9.68,12.45l-2.39,16.19a16,16,0,0,0,11.77,17.81L169.4,202l2.36,2.37A87.88,87.88,0,0,1,62.29,186.47ZM185,195l-4.3-4.31a16,16,0,0,0-7.26-4.18L152,180.85l2.39-16.19L184.84,152,205,170.48A88.43,88.43,0,0,1,185,195Z"></path>
                        </svg>
                        <h4 class="index-business-item-name">해외사업</h4>
                        <p class="index-business-item-desc">전 세계 28개국 아동에게 희망을</p>
                        <div class="section-direct-btn index-business-direct-btn">
                            자세히 보기
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 viewBox="0 0 256 256">
                                <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </li>
            <li class="index-business-item">
                <a href="<?php home_url(); ?>/domestic">
                    <div class="index-business-item-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0066d9"
                             viewBox="0 0 256 256">
                            <path d="M216,120v96H40V120a8,8,0,0,1,2.34-5.66l80-80a8,8,0,0,1,11.32,0l80,80A8,8,0,0,1,216,120Z"
                                  opacity="0.2"></path>
                            <path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H48V120l80-80,80,80Z"></path>
                        </svg>
                        <h4 class="index-business-item-name">국내사업</h4>
                        <p class="index-business-item-desc">전 세계 28개국 아동에게 희망을</p>
                        <div class="section-direct-btn index-business-direct-btn">
                            자세히 보기
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 viewBox="0 0 256 256">
                                <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                            </svg>
                        </div>
                    </div>
                </a>

            </li>
            <li class="index-business-item">
                <a href="<?php home_url(); ?>/donation-supporting">
                    <div class="index-business-item-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0066d9"
                             viewBox="0 0 256 256">
                            <path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path>
                            <path d="M92,140a12,12,0,1,1,12-12A12,12,0,0,1,92,140Zm72-24a12,12,0,1,0,12,12A12,12,0,0,0,164,116Zm-12.27,45.23a45,45,0,0,1-47.46,0,8,8,0,0,0-8.54,13.54,61,61,0,0,0,64.54,0,8,8,0,0,0-8.54-13.54ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88.11,88.11,0,0,0-84.09-87.91C120.32,56.38,120,71.88,120,72a8,8,0,0,0,16,0,8,8,0,0,1,16,0,24,24,0,0,1-48,0c0-.73.13-14.3,8.46-30.63A88,88,0,1,0,216,128Z"></path>
                        </svg>
                        <h4 class="index-business-item-name">아동결연</h4>
                        <p class="index-business-item-desc">전 세계 28개국 아동에게 희망을</p>
                        <div class="section-direct-btn index-business-direct-btn">
                            자세히 보기
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 viewBox="0 0 256 256">
                                <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </li>
            <li class="index-business-item">
                <a href="<?php home_url(); ?>/emergency">
                    <div class="index-business-item-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#0066d9"
                             viewBox="0 0 256 256">
                            <path d="M224,72V200a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V72a8,8,0,0,1,8-8H216A8,8,0,0,1,224,72Z"
                                  opacity="0.2"></path>
                            <path d="M216,56H176V48a24,24,0,0,0-24-24H104A24,24,0,0,0,80,48v8H40A16,16,0,0,0,24,72V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V72A16,16,0,0,0,216,56ZM96,48a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM216,200H40V72H216V200Zm-56-64a8,8,0,0,1-8,8H136v16a8,8,0,0,1-16,0V144H104a8,8,0,0,1,0-16h16V112a8,8,0,0,1,16,0v16h16A8,8,0,0,1,160,136Z"></path>
                        </svg>
                        <h4 class="index-business-item-name">긴급구호</h4>
                        <p class="index-business-item-desc">전 세계 28개국 아동에게 희망을</p>
                        <div class="section-direct-btn index-business-direct-btn">
                            자세히 보기
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 viewBox="0 0 256 256">
                                <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
<section>
    <div class="wrapper donate-section-wrapper">
        <header class="section-header">
            <h3 class="section-header-cat">
                후원 안내
            </h3>
            <h2 class="section-header-headline">
                나눔을 고민하는 당신께
            </h2>
        </header>
    </div>
    <div class="donate-guide-btns">
        <a title="Photo by Life of the Children" href="<?php echo esc_url(home_url('/donation-guide')) ?>" class="donate-guide-btn"
           style="background-image: url('<?php echo get_template_directory_uri() ?>/img/photo-by-lc-index-donate.jpg')">
            <h3>라칠에 후원해도 괜찮은 이유 <span class="tossface">💛️</span></h3>
        </a>
        <a title="Photo by Toa-Heftiba on unsplash" href="" class="donate-guide-btn"
           style="background-image: url('<?php echo get_template_directory_uri() ?>/img/photo-by-Toa-Heftiba-on-unsplash.jpg')">
            <h3>
                라이프오브더칠드런<br>
                후원자인터뷰<span class="tossface">✨</span>
            </h3>
        </a>
    </div>
</section>
<section id="index-campaign-section">
    <div class="wrapper">
        <header class="section-header">
            <h3 class="section-header-cat">진행 중인 캠페인</h3>
            <h2 class="section-header-headline">지금 이 순간, 간절한 기다림</h2>
            <a href="" class="section-direct-btn">캠페인 전체보기</a>
        </header>
        <div class="campaign-slides">
            <div class="campaign-slides-moving">
                <ul class="campaign-slide-list">
                    <?php

                    $args_campaign = [
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

                    ?>

                    <?php $query_campaign = new WP_Query($args_campaign); ?>

                    <?php if ($query_campaign->have_posts()): ?>
                        <?php while ($query_campaign->have_posts()): ?>
                            <?php $query_campaign->the_post(); ?>
                            <li class="campaign-slide-item"
                                style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
                                <a href="">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
            </div>
            <div class="campaign-slide-btns">
                <svg id="campaign-slide-btn-prev" class="campaign-slide-btn" xmlns="http://www.w3.org/2000/svg"
                     width="48" height="48" fill="#000000" viewBox="0 0 256 256">
                    <path d="M162.83,205.17a4,4,0,0,1-5.66,5.66l-80-80a4,4,0,0,1,0-5.66l80-80a4,4,0,1,1,5.66,5.66L85.66,128Z"></path>
                </svg>
                <svg id="campaign-slide-btn-next" class="campaign-slide-btn" xmlns="http://www.w3.org/2000/svg"
                     width="48" height="48" fill="#000000" viewBox="0 0 256 256">
                    <path d="M178.83,130.83l-80,80a4,4,0,0,1-5.66-5.66L170.34,128,93.17,50.83a4,4,0,0,1,5.66-5.66l80,80A4,4,0,0,1,178.83,130.83Z"></path>
                </svg>
            </div>
        </div>
    </div>
</section>
<section id="board-container">
    <div class="wrapper">
        <header class="section-header">
            <h3 class="section-header-cat">공지/언론보도</h3>
            <h2 class="section-header-headline">알려드립니다</h2>
            <a href="<?php home_url(); ?>/category/notice" class="section-direct-btn">전체보기</a>
        </header>
        <ul class="board-list">
            <?php
            $args_index_notice = [
                'post_type' => 'post',
                'posts_per_page' => 5,
                'post_status' => 'publish',
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => ['notice', 'press']
                    ]
                ]
            ];

            $query_index_notice = new WP_Query($args_index_notice);
            ?>
            <?php if ($query_index_notice->have_posts()): ?>
                <?php while ($query_index_notice->have_posts()): ?>
                    <?php $query_index_notice->the_post(); ?>
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
    </div>
</section>
<?php get_footer(); ?>
