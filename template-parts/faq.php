<header class="section-header">
    <h2 class="section-header-headline">자주 묻는 질문</h2>
    <div id="faq-search" role="search">
        <input type="text" id="search-input" placeholder="검색어를 입력하세요"/>
        <label for="search-input">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"
                 aria-hidden="true">
                <path d="M226.83,221.17l-52.7-52.7a84.1,84.1,0,1,0-5.66,5.66l52.7,52.7a4,4,0,0,0,5.66-5.66ZM36,112a76,76,0,1,1,76,76A76.08,76.08,0,0,1,36,112Z"></path>
            </svg>
        </label>
    </div>
</header>
<div class="faq-container">
    <ul class="faq-list">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args_notice = [
            'post_type' => 'post',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'paged' => $paged,
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => 'faq'
                ]
            ]
        ];

        $query_notice = new WP_Query($args_notice);

        ?>
        <?php if ($query_notice->have_posts()): ?>
            <?php while ($query_notice->have_posts()): ?>
                <?php $query_notice->the_post(); ?>
                <li class="faq-item">
                    <div class="faq-item-header">
                        <h3 class="faq-item-title"><?php the_title(); ?></h3>
                        <svg class="faq-plus active" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             fill="#000000"
                             viewBox="0 0 256 256">
                            <path d="M220,128a4,4,0,0,1-4,4H132v84a4,4,0,0,1-8,0V132H40a4,4,0,0,1,0-8h84V40a4,4,0,0,1,8,0v84h84A4,4,0,0,1,220,128Z"></path>
                        </svg>
                        <svg class="faq-minus" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             fill="#000000"
                             viewBox="0 0 256 256">
                            <path d="M220,128a4,4,0,0,1-4,4H40a4,4,0,0,1,0-8H216A4,4,0,0,1,220,128Z"></path>
                        </svg>
                    </div>
                    <div class="faq-item-content"><?php the_content() ?></div>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</div>
