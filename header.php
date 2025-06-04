<!doctype html>
<html <?php echo get_language_attributes() ?> lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<header class="gnb">
    <div class="newsletter-top-banner">
        뉴스레터 안녕하세요
    </div>
    <div class="gnb-menu">
        <a class="gnb-logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/img/lc_logo.svg" alt="">
        </a>
        <div class="gnb-nav">
            <div class="gnb-nav-item">
                소개
                <?php
                wp_nav_menu([
                    'theme_location' => 'intro',
                    'container' => 'nav',
                    'menu_class' => 'gnb-menu-dropdown',
                ]);
                ?>
            </div>
            <div class="gnb-nav-item">
                사업
                <?php
                wp_nav_menu([
                    'theme_location' => 'business',
                    'container' => 'nav',
                    'menu_class' => 'gnb-menu-dropdown',
                ]);
                ?>
            </div>
            <div class="gnb-nav-item">
                캠페인
                <?php
                wp_nav_menu([
                    'theme_location' => 'campaign',
                    'container' => 'nav',
                    'menu_class' => 'gnb-menu-dropdown',
                ]);
                ?>
            </div>
            <div class="gnb-nav-item">
                후원
                <?php
                wp_nav_menu([
                    'theme_location' => 'donate',
                    'container' => 'nav',
                    'menu_class' => 'gnb-menu-dropdown',
                ]);
                ?>
            </div>
            <div class="gnb-nav-item">
                소식
                <?php
                wp_nav_menu([
                    'theme_location' => 'news',
                    'container' => 'nav',
                    'menu_class' => 'gnb-menu-dropdown',
                ]);
                ?>
            </div>
            <div class="gnb-nav-item">
                참여
                <?php
                wp_nav_menu([
                    'theme_location' => 'participation',
                    'container' => 'nav',
                    'menu_class' => 'gnb-menu-dropdown',
                ]);
                ?>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256">
                <path d="M134,24V232a6,6,0,0,1-12,0V24a6,6,0,0,1,12,0Z"></path>
            </svg>
            <a id="lifechildren-outlink" class="gnb-nav-item" href="">
                <span>지역아동센터</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/arrow-up-right-light.svg" alt="">
            </a>
        </div>
        <div class="gnb-btns">
            <img src="<?php echo get_template_directory_uri() ?>/img/magnifying-glass-light.svg" alt="">
            <div class="gnb-select-lang">
                <img class="lang-flag" src="<?php echo get_template_directory_uri() ?>/img/flag-korean.png" alt="">
                <?php echo substr(get_locale(), 0, 2); ?>
                <img class="caret-down" src="<?php echo get_template_directory_uri() ?>/img/caret-down-light.svg"
                     alt="">
                <div class="lang-select">
                    <div class="lang-select-item">
                        <img class="lang-flag" src="<?php echo get_template_directory_uri() ?>/img/flag-korean.png" alt="">
                        <p>한국어</p>
                    </div>
                    <div class="lang-select-item">
                        <img class="lang-flag" src="<?php echo get_template_directory_uri() ?>/img/flag-us.png" alt="">
                        <p>English</p>
                    </div>
                </div>
            </div>
            <a href="">로그인</a>
            <a class="gnb-donation" href="">후원하기</a>
            <img class="gnb-fullscreen-menu-btn" src="<?php echo get_template_directory_uri() ?>/img/mega-menu.svg"
                 alt="">
        </div>
    </div>
</header>
<div class="fullscreen-dimmed">
    <header class="fullscreen-header">
        <a class="gnb-logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/img/lc_logo.svg" alt="">
        </a>
        <img class="gnb-fullscreen-menu-btn" src="<?php echo get_template_directory_uri() ?>/img/x-square-thin.svg"
             alt="">
    </header>
    <div class="fullscreen-grid">
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">소개</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'intro',
            ])
            ?>
        </div>
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">사업</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'business',
            ])
            ?>
        </div>
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">캠페인</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'campaign',
            ])
            ?>
        </div>
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">후원</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'donate',
            ])
            ?>
        </div>
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">소식</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'news',
            ])
            ?>
        </div>
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">아카이브</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'archive',
            ])
            ?>
        </div>
        <div class="fullscreen-grid-item">
            <h2 class="fullscreen-item-heading">제안/기타</h2>
            <?php
            wp_nav_menu([
                'theme_location' => 'participation',
            ])
            ?>
        </div>
    </div>
</div>
