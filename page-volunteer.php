<?php get_header(); ?>
<main id="request-support">
    <section class="suggest-cover"
             style="background-image: url('<?php echo get_template_directory_uri() ?>/img/suggest_cover_3.jpg')">
        <div class="overay"></div>
        <div class="wrapper8">
            <div class="suggest-container">
                <header class="section-header">
                    <h2 class="section-header-headline">자원봉사 신청</h2>
                    <p class="section-header-desc">
                        자원봉사가 필요하신 분은 아래 폼을 입력해주세요.
                    </p>
                </header>
                <form id="suggest-form" action="" method="POST">
                    <div class="form-item">
                        <label class="form-item-labels" for="suggest-company">기관명 <span
                                    style="color: red">*</span></label>
                        <input class="form-item-inputs" required type="text" id="suggest-company"
                               placeholder="기관명, 기업명 또는 개인">
                    </div>
                    <div class="form-item">
                        <label class="form-item-labels" for="suggest-company">주요 대상 <span
                                    style="color: red">*</span></label>
                        <input class="form-item-inputs" required type="text" id="suggest-target"
                               placeholder="기관의 주요 사업대상을 써주세요. 예)이주민, 소외계층 아동 등">
                    </div>
                    <div class="form-item">
                        <label class="form-item-labels" for="suggest-name">담당자명 <span
                                    style="color: red">*</span></label>
                        <input class="form-item-inputs" type="text" id="suggest-name" placeholder="김라칠" required>
                    </div>
                    <div class="form-item">
                        <label class="form-item-labels" for="suggest-email">이메일 <span
                                    style="color: red">*</span></label>
                        <input class="form-item-inputs" type="email" id="suggest-email" required>
                    </div>
                    <div class="form-item">
                        <label class="form-item-labels" for="suggest-phone">연락처 <span
                                    style="color: red">*</span></label>
                        <input class="form-item-inputs" type="tel" id="suggest-phone" placeholder="010-0000-0000"
                               required>
                    </div>
                    <div class="form-item">
                        <label class="form-item-labels" for="suggest-body">주요 배분 신청 물품 <span
                                    style="color: red">*</span></label>
                        <textarea class="form-item-inputs" type="text" id="suggest-body" required
                                  placeholder="궁금한점이나 제안사항을 적어주세요."></textarea>
                    </div>
                    <div class="form-item form-item-privacy">
                        <label class="form-item-labels" for="suggest-privacy">개인정보 수집 및 이용제공 동의 <span
                                    style="color: red">*</span></label>
                        <div class="form-item-group">
                            <p>동의함</p>
                            <input class="form-item-inputs" type="checkbox" id="suggest-privacy">
                        </div>
                    </div>
                    <button type="submit" class="form-submit-button">신청하기</button>
                </form>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/form-floating-menu') ?>
</main>
<?php get_footer(); ?>
