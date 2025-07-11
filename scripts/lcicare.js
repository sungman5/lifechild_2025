/********************************************************
 * COVER 갤러리 등장
 ********************************************************/
(() => {
    const items = document.querySelectorAll('.lcicare-gallery-item')

    window.addEventListener('DOMContentLoaded', () => {
        for(let i = 0; i<items.length; i++){
            setTimeout(() => {
                items[i].style.opacity = 1;
                items[i].style.visibility = 'visible';
                items[0].style.transform = `translate(4rem, 0) rotate(4deg)`
                items[1].style.transform = `translate(0) rotate(1deg)`
                items[2].style.transform = `translate(-4rem, 0) rotate(-4deg)`
            }, 500 * i * 0.5)
        }
    })
})();
