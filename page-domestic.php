<?php get_header(); ?>
<section>
    <div class="wrapper">
        <header class="section-header">
            <h2 class="section-header-headline">국내사업</h2>
            <p class="section-header-cat">국내 소외계층을 위한 따뜻한 동행, 희망을 만드는 국내사업</p>
        </header>
        <div class="section-hero">
            <img src=<?php echo get_template_directory_uri() ?>/img/photo-by-Yonghua-Fu-on-unsplash.jpg" alt=""
                 title="Photo-by-傅甬 华(Yonghua Fu) on unsplash">
        </div>
    </div>
</section>
<section>
    <div class="wrapper">
        <header class="section-header">
            <h2 class="section-header-headline">교육비 지원사업</h2>
            <p class="section-header-cat">소외계층 아동 자립에 응원을 더합니다</p>
        </header>
        <div class="education">
            <img src=<?php echo get_template_directory_uri() ?>/img/photo-by-Yonghua-Fu-on-unsplash.jpg" alt=""
                 title="Photo-by-傅甬 华(Yonghua Fu) on unsplash">
            <div class="education-number-grid">
                <div class="education-number-item">

                </div>
                <div class="education-number-item">

                </div>
                <div class="education-number-item">

                </div>
            </div>
        </div>
    </div>
</section>
<nav class="floating-page-menu">
    <div class="floating-menu-accordion">
        <?php
        wp_nav_menu([
            'theme_location' => 'business',
            'container' => false,
            'menu_class' => 'floating-menu-list'
        ])

        ?>
        <div class="floating-menu-current-page">
            <p><?php the_title() ?></p>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256">
                <path d="M210.83,162.83a4,4,0,0,1-5.66,0L128,85.66,50.83,162.83a4,4,0,0,1-5.66-5.66l80-80a4,4,0,0,1,5.66,0l80,80A4,4,0,0,1,210.83,162.83Z"></path>
            </svg>
        </div>
    </div>
    <ul class="floating-page-menu-list">
        <li class="floating-page-menu-item">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                    <path d="M249.88,92.47l-120-64a4,4,0,0,0-3.76,0l-120,64a4,4,0,0,0,0,7.06L36,115.47v50.82a11.92,11.92,0,0,0,3,8c12.65,14.09,41,37.73,89,37.73,21,0,38.2-4.52,52-10.79V240a4,4,0,0,0,8,0V197.18a111.64,111.64,0,0,0,29-22.91,11.94,11.94,0,0,0,3-8V115.47l29.88-15.94a4,4,0,0,0,0-7.06ZM128,204c-44.83,0-71.25-22-83-35.08a3.92,3.92,0,0,1-1-2.63V119.73l82.12,43.8a4,4,0,0,0,3.76,0L180,136.8v55.53C166.58,199,149.39,204,128,204Zm84-37.71a4,4,0,0,1-1,2.64,103.32,103.32,0,0,1-23,19v-55.4l24-12.8Zm-24.59-42.51a4,4,0,0,0-1.53-1.44l-56-29.87a4,4,0,0,0-3.76,7.06L179.5,128,128,155.47,16.5,96,128,36.53,239.5,96Z"></path>
                </svg>
                <p>교육비</p>
            </a>
        </li>
        <li class="floating-page-menu-item">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                    <path d="M216,160a8,8,0,1,1-8-8A8,8,0,0,1,216,160Zm-4.17,35.79A44.06,44.06,0,0,1,168,236H144a44.05,44.05,0,0,1-44-44V147.85A60,60,0,0,1,44,88V40a4,4,0,0,1,4-4H72a4,4,0,0,1,0,8H52V88a52,52,0,0,0,52.69,52C133,139.63,156,115.93,156,87.17V44H136a4,4,0,0,1,0-8h24a4,4,0,0,1,4,4V87.17c0,32-24.84,58.59-56,60.69V192a36,36,0,0,0,36,36h24a36.05,36.05,0,0,0,35.8-32.25,36,36,0,1,1,8,0ZM236,160a28,28,0,1,0-28,28A28,28,0,0,0,236,160Z"></path>
                </svg>
                <p>의료비</p>
            </a>
        </li>
        <li class="floating-page-menu-item">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256">
                    <path d="M216,76H166.81a50.54,50.54,0,0,0,12.63-8A25.53,25.53,0,0,0,188,49.44,28.62,28.62,0,0,0,158.56,20,25.53,25.53,0,0,0,140,28.56c-5.91,6.67-9.63,15.36-12,23.69-2.35-8.33-6.07-17-12-23.69A25.53,25.53,0,0,0,97.44,20,28.62,28.62,0,0,0,68,49.44,25.53,25.53,0,0,0,76.56,68a50.54,50.54,0,0,0,12.63,8H40A12,12,0,0,0,28,88v32a12,12,0,0,0,12,12h4v68a12,12,0,0,0,12,12H200a12,12,0,0,0,12-12V132h4a12,12,0,0,0,12-12V88A12,12,0,0,0,216,76ZM146,33.86A17.59,17.59,0,0,1,158.8,28h.61A20.62,20.62,0,0,1,180,49.2,17.6,17.6,0,0,1,174.14,62c-12.09,10.7-33.07,13.21-42,13.79C132.76,66.93,135.26,46,146,33.86ZM76,49.2A20.62,20.62,0,0,1,96.59,28h.61A17.59,17.59,0,0,1,110,33.86c10.71,12.09,13.21,33.07,13.79,42-8.89-.58-29.87-3.09-42-13.79A17.6,17.6,0,0,1,76,49.2ZM36,120V88a4,4,0,0,1,4-4h84v40H40A4,4,0,0,1,36,120Zm16,80V132h72v72H56A4,4,0,0,1,52,200Zm152,0a4,4,0,0,1-4,4H132V132h72Zm16-80a4,4,0,0,1-4,4H132V84h84a4,4,0,0,1,4,4Z"></path>
                </svg>
                <p>희망나눔</p>
            </a>
        </li>
    </ul>
</nav>
<?php get_footer(); ?>
