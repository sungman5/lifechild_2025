<?php get_header(); ?>
<main id="donation-guide">
    <header class="donation-guide-header-grid">
        <div class="donation-guide-header-flex">
            <div class="donation-guide-header-item">
                <p>후원안내</p>
                <h2 class="donation-guide-header-title">
                    궁금해요.<span class="tossface">🤔</span><br>
                    라칠에 후원해도 괜찮은가요?
                </h2>
                <p class="donation-guide-header-desc">
                    라칠은 기업·정부의 자금 없이 후원자만을 바라보며 묵묵히 걸어왔습니다.<br>
                    그래서 괜찮다고 말할 수 있습니다.
                </p>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/img/photo-by-lc-donation-guide.jpg" alt="">
    </header>
    <section>
        <div class="wrapper">
            <header class="section-header">
                <h2 class="section-header-headline">오직 후원자의 힘으로 진심을 전합니다</h2>
                <p class="section-header-cat">
                    라이프오브더칠드런은 기업이나 정부의 지원 없이, 후원자들의 정성으로 운영됩니다.<br>
                    오직 아이들만 바라보며 한 걸음씩 나아갑니다.
                </p>
            </header>
            <div class="donation-grid">
                <div class="donation-grid-item">
                    <p class="donation-number">01</p>
                    <div class="donation-grid-item-content">
                        <h4 class="donation-grid-item-title">외부 영향 없는 독립적 운영</h4>
                        <p class="donation-grid-item-desc">
                            라이프오브더칠드런은 기업이나 정부의 지원 없이, 오직 후원금만으로 운영되는 독립 NGO입니다.
                            외부 영향 없이 후원자의 뜻에 따라 아이들을 위한 길을 정직하게 걸어갑니다.
                        </p>
                    </div>
                </div>
                <div class="donation-grid-item">
                    <p class="donation-number">02</p>
                    <div class="donation-grid-item-content">
                        <h4 class="donation-grid-item-title">투명한 재정과 활동</h4>
                        <p class="donation-grid-item-desc">
                            모든 후원금의 사용 내역과 활동 결과는 투명하게 공개합니다.
                            후원자가 안심하고 신뢰할 수 있도록, 숫자 하나, 이야기 하나까지 숨김없이 전합니다.
                        </p>
                    </div>
                </div>
                <div class="donation-grid-item">
                    <p class="donation-number">03</p>
                    <div class="donation-grid-item-content">
                        <h4 class="donation-grid-item-title">직접 뛰는 모금</h4>
                        <p class="donation-grid-item-desc">
                            라이프오브더칠드런은 모금을 외주에 맡기지 않습니다.
                            직접 고용한 활동가들이 진심을 담아 한 분 한 분께 우리의 이야기를 전합니다.
                            우리는 사람을 통해 진심을 전합니다.
                        </p>
                    </div>
                </div>
                <div class="donation-grid-item">
                    <p class="donation-number">04</p>
                    <div class="donation-grid-item-content">
                        <h4 class="donation-grid-item-title">아이에게 더 가까운 국제협력</h4>
                        <p class="donation-grid-item-desc">
                            현지에 뿌리내린 파트너와 함께합니다. 사무실보다 도움이 먼저 가야 할 곳이 있기 때문입니다.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="guide-section-bg gray-bg"
             style="background-image: url('<?php echo get_template_directory_uri() ?>/img/regular_donate_1.png')">
        <div class="wrapper">
            <header class="section-header">
                <h2 class="section-header-headline">후원 방법</h2>
                <p class="section-header-cat">
                    후원자님의 방식대로 간편하게 후원할 수 있습니다.
                </p>
            </header>
            <div class="donation-how-grid">
                <div class="donation-grid-item">
                    <div class="donation-grid-item-content">
                        <div>
                            <h4 class="donation-grid-item-title">정기후원</h4>
                            <p class="donation-grid-item-desc">
                                정기적으로 라칠의 모든 사업과 아동을 후원합니다.
                            </p>
                        </div>
                        <div class="donation-grid-item-links">
                            <a class="donation-grid-item-link"
                               href="<?php echo esc_url(home_url('/donation-regular')) ?>">
                                <p>바로 후원</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                     viewBox="0 0 256 256">
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,109.66-32,32a8,8,0,0,1-11.32-11.32L148.69,136H88a8,8,0,0,1,0-16h60.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,173.66,133.66Z"></path>
                                </svg>
                            </a>
                            <a class="donation-grid-item-link"
                               href="<?php echo esc_url(home_url('/donation-regular')) ?>">
                                <p>더 알아보기</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="donation-grid-item">
                    <div class="donation-grid-item-content">
                        <div>
                            <h4 class="donation-grid-item-title">일시후원</h4>
                            <p class="donation-grid-item-desc">
                                한 번씩 마음이 움직일 때마다
                            </p>
                        </div>
                        <div class="donation-grid-item-links">
                            <a class="donation-grid-item-link"
                               href="<?php echo esc_url(home_url('/donation-singular')) ?>">
                                <p>바로 후원</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                     viewBox="0 0 256 256">
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,109.66-32,32a8,8,0,0,1-11.32-11.32L148.69,136H88a8,8,0,0,1,0-16h60.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,173.66,133.66Z"></path>
                                </svg>
                            </a>
                            <a class="donation-grid-item-link"
                               href="<?php echo esc_url(home_url('/donation-singular')) ?>">
                                <p>더 알아보기</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="donation-grid-item">
                    <div class="donation-grid-item-content">
                        <div>
                            <h4 class="donation-grid-item-title">아동결연</h4>
                            <p class="donation-grid-item-desc">
                                현지에 뿌리내린 파트너와 함께합니다. 사무실보다 도움이 먼저 가야 할 곳이 있기 때문입니다.
                            </p>
                        </div>
                        <div class="donation-grid-item-links">
                            <a class="donation-grid-item-link"
                               href="<?php echo esc_url(home_url('/donation-supporting')) ?>">
                                <p>국내외 아동 결연하기</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                     viewBox="0 0 256 256">
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,109.66-32,32a8,8,0,0,1-11.32-11.32L148.69,136H88a8,8,0,0,1,0-16h60.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,173.66,133.66Z"></path>
                                </svg>
                            </a>
                            <a class="donation-grid-item-link"
                               href="<?php echo esc_url(home_url('/donation-supporting')) ?>">
                                <p>더 알아보기</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="donation-grid-item">
                    <div class="donation-grid-item-content">
                        <div>
                            <h4 class="donation-grid-item-title">물품후원</h4>
                            <p class="donation-grid-item-desc">
                                현지에 뿌리내린 파트너와 함께합니다. 사무실보다 도움이 먼저 가야 할 곳이 있기 때문입니다.
                            </p>
                        </div>
                        <div class="donation-grid-item-links">
                            <a class="donation-grid-item-link" target="_blank" href="mailto:korea@childrenlife.org">
                                <p>담당자에게 문의하기</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000"
                                     viewBox="0 0 256 256">
                                    <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,109.66-32,32a8,8,0,0,1-11.32-11.32L148.69,136H88a8,8,0,0,1,0-16h60.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,173.66,133.66Z"></path>
                                </svg>
                            </a>
                            <a class="donation-grid-item-link" target="_blank" href="mailto:korea@childrenlife.org">
                                <p>더 알아보기</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <?php get_template_part('template-parts/faq') ?>
        </div>
    </section>
    <?php get_template_part('template-parts/donation-sub-menu') ?>
</main>
<?php get_footer(); ?>
