<?php get_header(); ?>
<main id="donation-singular">
    <section>
        <div class="wrapper8">
            <header class="section-header">
                <h2 class="section-header-headline">일시후원</h2>
                <p class="section-header-cat">마음이 움직일 때마다</p>
            </header>
            <div class="donation-container">
                <div class="section-hero">
                    <img src=<?php echo get_template_directory_uri() ?>/img/photo-by-MI-PHAM-on-unsplash.jpg" alt=""
                         title="Photo-by-MI-PHAM-on unsplash">
                </div>
                <p class="donation-intro-desc">
                    정기후원은 아이들의 삶에 지속적인 변화를 만들어냅니다.<br>
                    여러분의 꾸준한 후원은 생계, 교육, 건강, 긴급구호 등<br>
                    라이프오브더칠드런의 모든 공익사업에 분배되어 사용됩니다.
                </p>
                <a class="donation-btn" href="">
                    일시후원하기
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                        <path d="M218.83,130.83l-72,72a4,4,0,0,1-5.66-5.66L206.34,132H40a4,4,0,0,1,0-8H206.34L141.17,58.83a4,4,0,0,1,5.66-5.66l72,72A4,4,0,0,1,218.83,130.83Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper8 gray-bg">
            <div class="donation-content-container">
                <header class="section-header">
                    <h2 class="section-header-headline">한 번의 도움, 커다란 변화</h2>
                    <p class="section-header-cat">
                        갑작스런 의료비, 보호가 필요한 아동, 긴급한 위기 상황.<br>
                        여러분의 후원은 가장 필요한 곳에, 가장 빠르게 쓰입니다.
                    </p>
                </header>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper8">
            <div class="donation-content-container">
                <header class="section-header">
                    <h2 class="section-header-headline">아이들을 위한 마음, 어렵지 않게</h2>
                    <p class="section-header-cat">
                        라이프오브더칠드런은 언제든지 자신에게 맞는 방식으로 후원할 수 있도록<br>
                        다양한 길을 열어두었습니다.
                    </p>
                </header>
                <ul class="singular-grid">
                    <li class="singular-grid-item">
                        소액 후원
                    </li>
                    <li class="singular-grid-item">문자 후원</li>
                    <li class="singular-grid-item">후원 계좌</li>
                </ul>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/donation-sub-menu') ?>
</main>
<?php get_footer(); ?>
