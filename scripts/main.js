// 풀스크린메뉴 열기/닫기
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

// 언어 변경 버튼
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

// 슬라이드


function showSlide(){
    let slideNum = 0;
    const slides = document.querySelectorAll('.slide-item');
    const totalSlides = slides.length;

    slides[slideNum].classList.add('active')

    setInterval(() => {
        slides[slideNum].classList.remove('active')

        slideNum = (slideNum + 1) % totalSlides;

        slides[slideNum].classList.add('active')

        console.log(slideNum)
    }, 5000)
}

showSlide();



