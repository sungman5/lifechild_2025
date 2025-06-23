<?php get_header(); ?>
<main id="single">
    <div class="wrapper8">
        <div class="single-container">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php the_title('<h2 class="single-title">', '</h2>'); ?>
                    <div class="article-info">
                        <div class="author-info">
                            <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                            <p><?php the_author() ?></p>
                        </div>
                        <p class="article-time">
                            <?php
                            function estimate_reading_time($content = null)
                            {
                                if (!$content) {
                                    $content = get_post_field('post_content', get_the_ID());
                                }

                                $word_count = mb_strlen(strip_tags($content)); // 한글 기준 글자 수
                                $reading_time = ceil($word_count / 400); // 분 단위, 한글 기준

                                return $reading_time . '분이면 읽을 수 있어요.';
                            }

                            ?>
                            <?php echo estimate_reading_time(); ?>
                        </p>
                    </div>
                    <p class="article-excerpt"><?php echo get_the_excerpt(); ?></p>
                    <div class="article-body">
                        <?php the_content(); ?>
                    </div>
                    <div class="article-buttons">
                        <div class="article-prev-next">
                            <?php previous_post_link(
                                '%link',
                                '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M162.83,205.17a4,4,0,0,1-5.66,5.66l-80-80a4,4,0,0,1,0-5.66l80-80a4,4,0,1,1,5.66,5.66L85.66,128Z"></path></svg> 이전',
                                true,
                            ); ?>

                            <?php next_post_link(
                                '%link',
                                '다음 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M178.83,130.83l-80,80a4,4,0,0,1-5.66-5.66L170.34,128,93.17,50.83a4,4,0,0,1,5.66-5.66l80,80A4,4,0,0,1,178.83,130.83Z"></path></svg>',
                                true
                            ); ?>
                        </div>
                        <a class="article-button-list" href="<?php echo esc_url(home_url('/category/story')) ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000"
                                 viewBox="0 0 256 256">
                                <path d="M220,128a4,4,0,0,1-4,4H40a4,4,0,0,1,0-8H216A4,4,0,0,1,220,128ZM40,68H216a4,4,0,0,0,0-8H40a4,4,0,0,0,0,8ZM216,188H40a4,4,0,0,0,0,8H216a4,4,0,0,0,0-8Z"></path>
                            </svg>
                            목록
                        </a>
                    </div>
                    <div class="page-donation-banner"
                         style="background-image: url('<?php echo get_template_directory_uri() ?>/img/photo-by-lc-single-banner.jpg')" title="사진제공 라이프오브더칠드런">
                        <div class="page-donation-banner-content">
                            <h4 class="page-donation-banner-content">후원안내</h4>
                            <p class="page-donation-banner-content">
                                우리가 아이를 품으면<br>
                                아이는 세상을 품을 수 있습니다.
                            </p>
                        </div>
                        <a href="" class="page-donation-banner-button">
                            매월 1만 원 후원하기
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
