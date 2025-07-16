<?php get_header(); ?>
<main id="donation-singular">
    <section>
        <div class="wrapper8">
            <header class="section-header">
                <h2 class="section-header-headline">일시후원</h2>
                <p class="section-header-desc">
                    갑작스러운 위기에 놓인 아이들을 위해, 한 번의 도움으로 손을 내밀 수 있습니다.<br>
                    언제든, 누구든, 참여할 수 있는 나눔입니다.
                </p>
            </header>
            <div class="donation-container">
                <div class="section-hero">
                    <img src=<?php echo get_template_directory_uri() ?>/img/photo-by-MI-PHAM-on-unsplash.jpg" alt=""
                         title="Photo-by-MI-PHAM-on unsplash">
                </div>
                <div class="donation-usage-container">
                    <h3 class="donation-usage-headline">아이들을 위한 마음, 어렵지 않게</h3>
                    <ul class="donation-usage-grid">
                        <li class="donation-usage-item"
                            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/donate_guide.png')">
                            <p class="donation-usage-title">소액 후원</p>
                            <div class="donation-usage-group">
                                <p class="donation-usage-body">
                                    작은 손길도 큰 변화를 만듭니다.<br>
                                    3,000원부터 함께하실 수 있어요.
                                </p>
                                <a href="<?php home_url(); ?>/donation-singular" class="section-direct-btn">
                                    <strong>바로가기</strong>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                         viewBox="0 0 256 256">
                                        <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li class="donation-usage-item"
                            style="background-image: url('<?php echo get_template_directory_uri() ?>/img/regular_donate_1.png')">
                            <p class="donation-usage-title">문자 후원</p>
                            <div class="donation-usage-group">
                                <p class="donation-usage-body">
                                    아동들에게 응원문자를 보내주세요!<br>
                                    문자 한 통에 2천원이 후원됩니다.
                                </p>
                                <p class="section-direct-btn">
                                    <strong>#70799191</strong>
                                </p>
                            </div>
                        </li>
                        <li class="donation-usage-item">
                            <p class="donation-usage-title">후원계좌</p>
                            <div class="donation-usage-group">
                                <p class="donation-usage-body">
                                    하나은행 <strong>204-910020-10704</strong><br>
                                    예금주: 사단법인 라이프오브더칠드런
                                </p>
                                <p class="section-direct-btn">
                                    <strong>후원문의 02-6246-9191</strong>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <p class="donation-usage-caption">
                        ※ 정기/일시후원은 구분하여 집행하지 않으며, 모든 후원금은 기관의 규정과 감사 절차에 따라<br>
                        아이들을 위한 사업 전반에 신중히 사용됩니다. 위의 구분은 자주 활용되는 대표 영역임을 안내드립니다.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper gray-bg">
            <div class="singular-container">
                <?php get_cta_button('지금, 한 번의 마음이<br>아이를 살립니다.', 'photo-by-lc-grouphome-banner.jpg', '한 번의 도움 건내기', '#', '', false); ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/donation-floating-menu') ?>
</main>
<?php get_footer(); ?>
