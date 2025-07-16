<footer id="site-footer">
    <div class="footer-top">
        <nav class="footer-nav">
            <div class="footer-text">
                <p>후원문의</p>
                <p>02-6248-9191 <span>(평일 09:00 ~ 18:00 / 12:00~13:00 점심시간 / 주말 및 공휴일 휴무)</span></p>
            </div>
            <ul class="footer-links">
                <li class="footer-links-item">
                    <a href="<?php echo home_url('/lcicare'); ?>">
                        지역아동센터
                    </a>
                </li>
                <li class="footer-links-item">
                    <a href="">
                        기부금 영수증
                    </a>
                </li>
                <li class="footer-links-item">
                    <a href="">
                        뉴스레터
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="footer-middle">
        <div class="footer-middle-wrap">
            <nav class="footer-middle-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer-middle-nav-list'
                ])

                ?>
            </nav>
             <div class="footer-middle-info-group">
                <h3><a href="<?php echo home_url(); ?>">사단법인 라이프오브더칠드런</a></h3>
                <div class="footer-middle-info">
                    <p>(우)08360 서울특별시 구로구 연동로 13길 7, 5층</p>
                    <p>대표번호 02-6246-9191</p>
                    <p>사업자등록번호 108-82-10899</p>
                </div>
                <p>라이프오브더칠드런은 유엔경제사회이사회(UN ECOSOC)의 특별협의지위(Special Consultative Status)를 획득한 단체입니다.</p>
            </div>
            <p>Copyright &copy; Life of the Children <?php echo date('Y') ?>. All Rights Reserved.</p>
        </div>
    </div>
    <div class="footer-bottom">
        <ul class="footer-bottom-list">
            <li class="footer-bottom-item">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/kakao_logo.png" alt="">
                </a>
            </li>
            <li class="footer-bottom-item">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/insta_logo.png" alt="">
                </a>
            </li>
            <li class="footer-bottom-item">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/youtube_logo.png" alt="">
                </a>
            </li>
            <li class="footer-bottom-item">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/blog_logo.png" alt="">
                </a>
            </li>
            <li class="footer-bottom-item">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/kakako_together_logo.png" alt="">
                </a>
            </li>
            <li class="footer-bottom-item">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/img/happybean_logo.png" alt="">
                </a>
            </li>
        </ul>
        <svg title="맨 위로" id="scrollTopButton" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
             viewBox="0 0 256 256">
            <path d="M210.83,194.83a4,4,0,0,1-5.66,0L128,117.66,50.83,194.83a4,4,0,0,1-5.66-5.66l80-80a4,4,0,0,1,5.66,0l80,80A4,4,0,0,1,210.83,194.83ZM48,76H208a4,4,0,0,0,0-8H48a4,4,0,0,0,0,8Z"></path>
        </svg>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
