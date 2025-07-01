(() => {
    /********************************************************
     * 공통 - GNB 공간을 위한 body top 패딩 확보
     ********************************************************/
    // menupadding 생성
    function setBodyTopPadding() {
        const body = document.body;
        const gnb = document.querySelector('.gnb')
        body.style.paddingTop = `${gnb.offsetHeight}px`;
    }

    document.addEventListener('DOMContentLoaded', () => {
        setBodyTopPadding();
    });
    window.addEventListener('resize', setBodyTopPadding)

    /********************************************************
     * 공통 - 스크롤에 따른 메인메뉴 표시-숨기기
     ********************************************************/
    let lastScrollY = window.scrollY;
    let accumulatedScrollDown = 0;

    function hideAndShowMainMenu() {
        const gnb = document.querySelector('.gnb');
        const currentScrollY = window.scrollY;
        const scrollDelta = currentScrollY - lastScrollY;

        if (scrollDelta > 0) {
            // 아래로 스크롤 중
            accumulatedScrollDown += scrollDelta;

            if (accumulatedScrollDown > 0) {
                gnb.style.top = `-${gnb.offsetHeight}px`; // 숨기기
            }
        } else {
            // 위로 스크롤 → 즉시 보이기 + 누적 리셋
            gnb.style.top = '0';
            accumulatedScrollDown = 0;
        }

        lastScrollY = currentScrollY;
    }

    window.addEventListener('scroll', hideAndShowMainMenu);

    /********************************************************
     * 공통 - 풀스크린메뉴 열기/닫기
     ********************************************************/
    function openFullScreenMenu() {
        let fullScreenStatus = false;
        const button = document.querySelectorAll('.gnb-fullscreen-menu-btn');
        const fullScreenMenu = document.querySelector('.fullscreen-dimmed')
        button.forEach(element => {
            element.addEventListener('click', () => {
                fullScreenStatus = !fullScreenStatus;
                fullScreenStatus ? fullScreenMenu.classList.add('active') : fullScreenMenu.classList.remove('active')
            })
        })
    }

    openFullScreenMenu();

    /********************************************************
     * 공통 - 언어변경 버튼
     ********************************************************/
    function changeLang() {
        let status = false;
        const button = document.querySelectorAll('.gnb-select-lang');
        const langSelect = document.querySelector('.lang-select')
        button.forEach(element => {
            element.addEventListener('click', () => {
                status = !status;
                status ? langSelect.classList.add('active') : langSelect.classList.remove('active');
            })
        })
    }

    changeLang();


    /********************************************************
     * 공통 - 맨 위로 버튼
     ********************************************************/
    function scrollTop() {
        const button = document.getElementById('scrollTopButton')
        button.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        })
    }

    scrollTop();
})();

(() => {
    document.addEventListener('DOMContentLoaded', () => {
        if (window.location.pathname === '/') {
            /********************************************************
             * 메인슬라이드
             ********************************************************/
            function showSlide() {
                let slideNum = 0;
                const slides = document.querySelectorAll('.slide-item');
                const totalSlides = slides.length;
                const numbers = document.querySelector('.slide-navigation-numbers');

                const prev = document.getElementById('slide-navigation-prev');
                const next = document.getElementById('slide-navigation-next');

                function updateSlide(newIndex) {
                    // 이전 슬라이드 비활성화
                    const prevSlide = slides[slideNum];
                    const prevContent = prevSlide.querySelector('.slide-item-content');
                    prevSlide.classList.remove('active');
                    prevContent.style.transform = 'translateY(10px)';
                    prevContent.style.opacity = '0';
                    prevContent.style.visibility = 'hidden';

                    // 다음 슬라이드 인덱스 설정
                    slideNum = (newIndex + totalSlides) % totalSlides;

                    // 다음 슬라이드 활성화
                    const nextSlide = slides[slideNum];
                    const nextContent = nextSlide.querySelector('.slide-item-content');
                    nextSlide.classList.add('active');
                    nextContent.style.transform = 'translateY(0)';
                    nextContent.style.opacity = '1';
                    nextContent.style.visibility = 'visible';

                    // 숫자 업데이트
                    numbers.innerText = `${String(slideNum + 1).padStart(2, '0')} / ${String(totalSlides).padStart(2, '0')}`;
                }

                // 초기 상태 표시
                updateSlide(0);

                // 자동 슬라이드
                setInterval(() => {
                    updateSlide(slideNum + 1);
                }, 5000);

                // 버튼 이벤트
                prev.addEventListener('click', () => {
                    updateSlide(slideNum - 1);
                });
                next.addEventListener('click', () => {
                    updateSlide(slideNum + 1);
                });
            }


            showSlide();


            /********************************************************
             *  슬로건 섹션 스크롤에 따른 이미지 애니메이션
             ********************************************************/
            function scaleDownImage() {
                const section = document.querySelector('.slogan-section');
                const image = document.getElementById('slogan-image');
                const scrollY = window.scrollY;

                const start = section.offsetTop;
                const end = start + section.offsetHeight * 0.2;

                if (scrollY >= start && scrollY <= end && window.innerWidth > 430) {
                    const progress = (scrollY - start) / (end - start);
                    const clamped = Math.min(Math.max(progress, 0), 1);
                    const scale = 1 - clamped * 0.3;
                    image.style.transform = `scale(${scale})`;
                } else if (scrollY < start && window.innerWidth > 430) {
                    // 초기 위치보다 위에 있을 경우 scale 초기화
                    image.style.transform = `scale(1)`;
                } else if (scrollY > end && window.innerWidth > 430) {
                    // 구간을 벗어난 경우 최종 scale 유지
                    image.style.transform = `scale(0.7)`;
                }
            }


            window.addEventListener('scroll', scaleDownImage);
            window.addEventListener('load', scaleDownImage);


            /********************************************************
             * 메인화면 캠페인 좌우로 슬라이드
             ********************************************************/
            const prev = document.getElementById('campaign-slide-btn-prev');
            const next = document.getElementById('campaign-slide-btn-next');
            const target = document.querySelector('.campaign-slide-list');
            const slideItem = document.querySelectorAll('.campaign-slide-item');
            const itemWidth = slideItem[0].offsetWidth;

            let currentIndex = 0; // 현재 슬라이드 인덱스

            function updateSlidePosition() {
                const distance = itemWidth * currentIndex * -1;
                target.style.transform = `translateX(${distance}px)`;
            }

            function campaignListMoveLeft() {
                let number;
                if (window.innerWidth > 430) {
                    number = 3;
                    console.log(number)
                } else {
                    number = 1;
                    console.log(number)
                }
                if (currentIndex < slideItem.length - number) {
                    currentIndex++;
                    updateSlidePosition();
                }
            }

            function campaignListMoveRight() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlidePosition();
                }
            }

            window.addEventListener('resize', updateSlidePosition)
            prev.addEventListener('click', campaignListMoveRight); // ← 오른쪽 버튼이 이전 항목
            next.addEventListener('click', campaignListMoveLeft);  // → 왼쪽으로 이동 (다음 항목)
        }
    });
})();


/********************************************************
 * 각 페이지의 플로팅 서브 메뉴
 ********************************************************/
document.addEventListener('DOMContentLoaded', () => {
    const pageMenuItem = document.querySelectorAll('.floating-page-menu-item');
    const sections = document.querySelectorAll('section');

    pageMenuItem.forEach((element, index) => {
        element.addEventListener('click', (e) => {
            const isScrollLink = element.classList.contains('scroll-only');
            if (isScrollLink) {
                e.preventDefault(); // 내부 스크롤만 처리
                const targetSection = sections[index + 1];
                if (targetSection) {
                    targetSection.scrollIntoView({behavior: 'smooth', block: 'start'});
                }
            }
            // 그 외 링크는 기본 이동하게 놔둠
        });
    });
});

/********************************************************
 * 모바일 버전에서 서브 메뉴를 위한 푸터 마진 생성
 ********************************************************/

(() => {
    function setMobilePageSubMenu() {
        const footer = document.getElementById('site-footer');
        const floatingPageMenuHeight = document.querySelector('.floating-page-menu');
        if (floatingPageMenuHeight !== null) {
            const height = floatingPageMenuHeight.offsetHeight;
            if (window.innerWidth < 1440) {
                footer.style.paddingBottom = `${height}px`;
            }
        }

    }

    setMobilePageSubMenu();
})();

/********************************************************
 * 그룹홈 운영현황의 탭 기능
 ********************************************************/

(() => {
    const taps = document.querySelectorAll('.grouphome-nation-tap');
    const targets = document.querySelectorAll('.grouphome-family');

    function activeTap(e) {
        taps.forEach(el => el.classList.remove('is_active'));
        e.currentTarget.classList.add('is_active');
    }

    for (let i = 0; i < taps.length; i++) {
        taps[i].addEventListener('click', (e) => {
            activeTap(e);

            if (i === 0) {
                targets.forEach(el => el.classList.remove('is_inactive'));
            } else {
                targets.forEach(el => el.classList.add('is_inactive'));
                if (targets[i - 1]) {
                    targets[i - 1].classList.remove('is_inactive');
                }
            }
        });
    }
})();


/********************************************************
 * 아동결연 페이지 탭
 ********************************************************/
(() => {
    const taps = document.querySelectorAll('.supporting-tap');
    const items = document.querySelectorAll('.supporting-tap-content-item');

    taps.forEach((tap, index) => {
        tap.addEventListener('click', () => {
            // 탭 활성화 처리
            taps.forEach(el => el.classList.remove('active'));
            tap.classList.add('active');

            // 콘텐츠 활성화 처리
            items.forEach(el => el.classList.remove('active'));
            items[index].classList.add('active');
            items[index].classList.add('active');
        });
    });
})();

/********************************************************
 * faq 탭 기능
 ********************************************************/
(() => {
    const items = document.querySelectorAll('.faq-item');
    const bodys = document.querySelectorAll('.faq-item-content');
    const plus = document.querySelectorAll('.faq-plus');
    const minus = document.querySelectorAll('.faq-minus');

    items.forEach((tap, index) => {
        tap.addEventListener('click', () => {
            const isActive = bodys[index].classList.contains('active');
            if (isActive) {
                bodys[index].classList.remove('active');
                plus[index].classList.add('active');
                minus[index].classList.remove('active');
            } else {
                bodys.forEach(el => el.classList.remove('active'));
                plus.forEach(el => el.classList.add('active'));
                minus.forEach(el => el.classList.remove('active'));

                bodys[index].classList.add('active');
                plus[index].classList.remove('active');
                minus[index].classList.add('active');
            }
        });
    });
})();

/********************************************************
 * faq 검색 기능
 ********************************************************/
(() => {
    const headlines = document.querySelectorAll('.faq-item-title');
    const input = document.getElementById('search-input');
    let debounceTimer;

    input.addEventListener('input', () => {
        clearTimeout(debounceTimer);

        debounceTimer = setTimeout(() => {
            const query = input.value.trim().toLowerCase();
            console.log('검색어:', query);

            headlines.forEach((headline) => {
                const text = headline.textContent.toLowerCase();
                const faqItem = headline.closest('.faq-item');

                if (text.includes(query)) {
                    faqItem.style.display = '';
                } else {
                    faqItem.style.display = 'none';
                }
            });
        }, 300); // 0.5초 (500ms) 대기
    });
})();

