
let slides = $('.slide-single');
(() => {
    let index = 0;
    let maxIndex = slides.length - 1;

    (() => {
        slides.hide();
        slides.eq(0).show();
    })();

    (() => {
        setInterval(() => {
            slides.eq(index).fadeOut(1000);
            index++;
            if(index > maxIndex)
                index = 0;
            slides.eq(index).fadeIn(1000);
        }, 3000)
    })();
})();