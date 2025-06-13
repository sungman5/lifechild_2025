<?php

// 스타일시트 삽입
function enqueue_styles(): void
{
    // 스티비 스타일
    wp_enqueue_style('stb', 'https://resource.stibee.com/subscribe/stb_subscribe_form_style.css');
    // 스타일시트
    wp_enqueue_style('style', get_stylesheet_uri());

    //Pretendard
    wp_enqueue_style('Pretendard Variable', 'https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/variable/pretendardvariable-dynamic-subset.min.css');
    wp_enqueue_style('Red Rose', 'https://fonts.googleapis.com/css2?family=Red+Rose:wght@300..700&display=swap');

    //Tossface 이모지
    wp_enqueue_style('Tossface', 'https://cdn.jsdelivr.net/gh/toss/tossface/dist/tossface.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

// 스크립트 삽입
function enqueue_scripts()
{
    wp_enqueue_script('index_script', get_template_directory_uri() . '/scripts/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');



// 메뉴 등록
function register_lc_menus()
{
    register_nav_menus(
        [
            'gnb' => '헤더에 위치하는 웹사이트 메인 메뉴',
            'intro' => 'gnb 드롭다운 메뉴:소개',
            'business' => 'gnb 드롭다운 메뉴:사업',
            'campaign' => 'gnb 드롭다운 메뉴:캠페인',
            'donate' => 'gnb 드롭다운 메뉴:후원',
            'news' => 'gnb 드롭다운 메뉴:소식',
            'participation' => 'gnb 드롭다운 메뉴:참여',
            'archive' => 'gnb 드롭다운 메뉴:아카이브',
            'hamburger' => '우측 사이드에 등장하는 전체 메뉴',
            'footer' => '푸터에 있는 메뉴(오시는 길 등)',
        ]
    );
}

add_action('init', 'register_lc_menus');


// 캠페인 포스트타입 등록
function create_campaign_post_type()
{
    $labels = array(
        'name' => _x('캠페인', 'Post type general name', 'textdomain'),
        'singular_name' => _x('캠페인', 'Post type singular name', 'textdomain'),
        'menu_name' => _x('캠페인', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('캠페인', 'Add New on Toolbar', 'textdomain'),
        'add_new' => __('새 캠페인 추가', 'textdomain'),
        'add_new_item' => __('새로운 캠페인 등록', 'textdomain'),
        'new_item' => __('새로운 캠페인', 'textdomain'),
        'edit_item' => __('캠페인 편집', 'textdomain'),
        'view_item' => __('캠페인 보기', 'textdomain'),
        'all_items' => __('모든 캠페인', 'textdomain'),
        'search_items' => __('캠페인 검색', 'textdomain'),
        'parent_item_colon' => __('상위 캠페인:', 'textdomain'),
        'not_found' => __('등록된 캠페인이 없습니다.', 'textdomain'),
        'not_found_in_trash' => __('휴지통에서 캠페인을 찾을 수 없습니다.', 'textdomain'),
        'featured_image' => _x('캠페인 커버 이미지', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image' => _x('캠페인 커버이미지 설정', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('캠페인 커버이미지 삭제', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives' => _x('캠페인 아카이브', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item' => _x('Insert into event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list' => _x('Filter events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list' => _x('Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    register_post_type('campaign', [
        'labels' => $labels,
        'description' => '캠페인 포스트타입입니다.',
        'public' => true,
        'has_archive' => true,
        'supports' => ['thumbnail', 'title', 'editor', 'excerpt'],
        'menu_icon' => 'dashicons-sos',
//        'publicly_queryable' => true,
        'show_in_rest' => true,
        'menu_position' => 4
    ]);
}

add_action('init', 'create_campaign_post_type');

// 캠페인 상태 텍소노미 등록
function create_campaign_status_taxonomy()
{
    $labels = array(
        'name' => _x('진행상태', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('진행상태', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('진행상태 검색', 'textdomain'),
        'all_items' => __('모든 진행상태', 'textdomain'),
        'parent_item' => __('상위 진행상태', 'textdomain'),
        'parent_item_colon' => __('상위 진행상태:', 'textdomain'),
        'edit_item' => __('진행상태 편집', 'textdomain'),
        'update_item' => __('진행상태 업데이트', 'textdomain'),
        'add_new_item' => __('새 진행상태 추가', 'textdomain'),
        'new_item_name' => __('새 진행상태 이름', 'textdomain'),
        'menu_name' => __('진행상태', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true, // true로 설정하면 카테고리처럼 계층적이 됩니다. false로 설정하면 태그처럼 작동합니다.
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true, // 구텐베르크 에디터와의 호환성을 위해 추가
//        'rewrite'           => array('slug' => 'campaign_status', 'with_front' => false, 'pages' => true, 'feeds' => true),
    );

    register_taxonomy('campaign_status', array('campaign'), $args);
}

add_action('init', 'create_campaign_status_taxonomy');

// 캠페인 메인 슬라이드 등록 여부
function create_campaign_slide_accept_taxonomy()
{
    $labels = array(
        'name' => _x('슬라이드게시 여부', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('슬라이드게시 여부', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('슬라이드게시 여부 검색', 'textdomain'),
        'all_items' => __('모든 슬라이드게시 여부', 'textdomain'),
        'parent_item' => __('상위 슬라이드게시 여부', 'textdomain'),
        'parent_item_colon' => __('상위 슬라이드게시 여부:', 'textdomain'),
        'edit_item' => __('슬라이드게시 여부 편집', 'textdomain'),
        'update_item' => __('슬라이드게시 여부 업데이트', 'textdomain'),
        'add_new_item' => __('새 슬라이드게시 여부 추가', 'textdomain'),
        'new_item_name' => __('새 슬라이드게시 여부 이름', 'textdomain'),
        'menu_name' => __('슬라이드게시 여부', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true, // true로 설정하면 카테고리처럼 계층적이 됩니다. false로 설정하면 태그처럼 작동합니다.
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true, // 구텐베르크 에디터와의 호환성을 위해 추가
//        'rewrite'           => array('slug' => 'campaign_status', 'with_front' => false, 'pages' => true, 'feeds' => true),
    );

    register_taxonomy('campaign_slide_accept', array('campaign'), $args);
}

add_action('init', 'create_campaign_slide_accept_taxonomy');