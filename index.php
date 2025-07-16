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
                <svg id="slide-navigation-prev" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                     viewBox="0 0 256 256">
                    <path d="M220,128a4,4,0,0,1-4,4H49.66l65.17,65.17a4,4,0,0,1-5.66,5.66l-72-72a4,4,0,0,1,0-5.66l72-72a4,4,0,0,1,5.66,5.66L49.66,124H216A4,4,0,0,1,220,128Z"></path>
                </svg>
                <svg id="slide-navigation-next" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                     viewBox="0 0 256 256">
                    <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                </svg>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="wrapper">
        <header class="section-header">
            <h3 class="section-header-desc">라칠 뉴스룸</h3>
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
            <a href="<?php echo home_url('/category/grouphome-brief'); ?>" class="section-direct-btn">그룹홈 단신 모두보기</a>
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
            <h3 class="section-header-desc">
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
            <h3 class="section-header-desc">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000"
                             viewBox="0 0 256 256">
                            <path d="M128,28h0A100,100,0,1,0,228,128,100.11,100.11,0,0,0,128,28Zm0,190.61c-6.33-6.09-23-24.41-31.27-54.61h62.54C151,194.2,134.33,212.52,128,218.61ZM94.82,156a140.42,140.42,0,0,1,0-56h66.36a140.42,140.42,0,0,1,0,56ZM128,37.39c6.33,6.09,23,24.41,31.27,54.61H96.73C105,61.8,121.67,43.48,128,37.39ZM169.41,100h46.23a92.09,92.09,0,0,1,0,56H169.41a152.65,152.65,0,0,0,0-56Zm43.25-8h-45a129.39,129.39,0,0,0-29.19-55.4A92.25,92.25,0,0,1,212.66,92ZM117.54,36.6A129.39,129.39,0,0,0,88.35,92h-45A92.25,92.25,0,0,1,117.54,36.6ZM40.36,100H86.59a152.65,152.65,0,0,0,0,56H40.36a92.09,92.09,0,0,1,0-56Zm3,64h45a129.39,129.39,0,0,0,29.19,55.4A92.25,92.25,0,0,1,43.34,164Zm95.12,55.4A129.39,129.39,0,0,0,167.65,164h45A92.25,92.25,0,0,1,138.46,219.4Z"></path>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000"
                             viewBox="0 0 256 256">
                            <path d="M216.49,111.51l-80-80a12,12,0,0,0-17,0l-80,80A12,12,0,0,0,36,120v96a4,4,0,0,0,4,4H216a4,4,0,0,0,4-4V120A12,12,0,0,0,216.49,111.51ZM212,212H44V120a4,4,0,0,1,1.17-2.83l80-80a4,4,0,0,1,5.66,0l80,80A4,4,0,0,1,212,120Z"></path>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000"
                             viewBox="0 0 256 256">
                            <path d="M107.19,159a56,56,0,1,0-46.38,0A91.83,91.83,0,0,0,6.88,197.81a4,4,0,1,0,6.7,4.37,84,84,0,0,1,140.84,0,4,4,0,1,0,6.7-4.37A91.83,91.83,0,0,0,107.19,159ZM36,108a48,48,0,1,1,48,48A48.05,48.05,0,0,1,36,108Zm212,95.35a4,4,0,0,1-5.53-1.17A83.81,83.81,0,0,0,172,164a4,4,0,0,1,0-8,48,48,0,1,0-17.82-92.58,4,4,0,1,1-3-7.43,56,56,0,0,1,44,103,91.83,91.83,0,0,1,53.93,38.86A4,4,0,0,1,248,203.35Z"></path>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000"
                             viewBox="0 0 256 256">
                            <path d="M84,120a4,4,0,0,1,4-4h20V96a4,4,0,0,1,8,0v20h20a4,4,0,0,1,0,8H116v20a4,4,0,0,1-8,0V124H88A4,4,0,0,1,84,120Zm168,0v64a12,12,0,0,1-12,12H219.71a28,28,0,0,1-55.42,0H107.71a28,28,0,0,1-55.42,0H32a12,12,0,0,1-12-12V72A12,12,0,0,1,32,60H184a4,4,0,0,1,4,4V76h38.58a12,12,0,0,1,11.15,7.54l14,35A4,4,0,0,1,252,120ZM188,84v32h54.09L230.3,86.51A4,4,0,0,0,226.58,84ZM32,188H52.29a28,28,0,0,1,55.42,0h56.58A28.05,28.05,0,0,1,180,166.71V68H32a4,4,0,0,0-4,4V184A4,4,0,0,0,32,188Zm68,4a20,20,0,1,0-20,20A20,20,0,0,0,100,192Zm112,0a20,20,0,1,0-20,20A20,20,0,0,0,212,192Zm32-8V124H188v40.29A28,28,0,0,1,219.71,188H240A4,4,0,0,0,244,184Z"></path>
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
            <h3 class="section-header-desc">
                후원 안내
            </h3>
            <h2 class="section-header-headline">
                나눔을 고민하는 당신께
            </h2>
        </header>
    </div>
    <div class="donate-guide-btns">
        <a title="Photo by Life of the Children" href="<?php echo esc_url(home_url('/donation-guide')) ?>"
           class="donate-guide-btn"
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
            <h3 class="section-header-desc">진행 중인 캠페인</h3>
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
            <h3 class="section-header-desc">공지/언론보도</h3>
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
