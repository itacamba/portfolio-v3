
const   track = document.querySelector('.carousel__track'),
        slides = Array.from(track.children),
        nextBtn = document.querySelector('.carousel__button--right'),
        prevBtn = document.querySelector('.carousel__button--left'),
        slideWidth = slides[0].getBoundingClientRect().width
        
console.log(slideWidth)

// arrange the slides one to another

const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px'
}
slides.forEach(setSlidePosition)

// when right btn is clicked, I want slides to move to the right




const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = `translateX(-${targetSlide.style.left})`
    currentSlide.classList.remove('current-slide')
    targetSlide.classList.add('current-slide');
}

nextBtn.addEventListener("click", e => {
    const currentSlide = track.querySelector('.current-slide'),
    nextSlide = currentSlide.nextElementSibling;

    // move to the next slide
    moveToSlide(track, currentSlide, nextSlide)
})
prevBtn.addEventListener("click", e => {
    const currentSlide = track.querySelector('.current-slide'),
    prevSlide = currentSlide.previousElementSibling

    // move to the previous slide
    moveToSlide(track, currentSlide, prevSlide)
})







//////////// CAROUSEL 2 ////////////////////



const   track2 = document.querySelector('.track-2'),
        slides2 = Array.from(track2.children),
        nextBtn2 = document.querySelector('.btn-2-right'),
        prevBtn2 = document.querySelector('.btn-2-left'),
        slideWidth2 = slides2[0].getBoundingClientRect().width
        


// arrange the slides one to another

const setSlidePosition2 = (slide2, index) => {
    slide2.style.left = slideWidth2 * index + 'px'
}
slides2.forEach(setSlidePosition2)

// when right btn is clicked, I want slides to move to the right




const moveToSlide2 = (track2, currentSlide2, targetSlide2) => {
    track2.style.transform = `translateX(-${targetSlide2.style.left})`
    currentSlide2.classList.remove('current-slide-2')
    targetSlide2.classList.add('current-slide-2');
}

nextBtn2.addEventListener("click", e => {
    const currentSlide2 = track2.querySelector('.current-slide-2'),
    nextSlide2 = currentSlide2.nextElementSibling;

    // move to the next slide
    moveToSlide2(track2, currentSlide2, nextSlide2)
})
prevBtn2.addEventListener("click", e => {
    const currentSlide2 = track2.querySelector('.current-slide-2'),
    prevSlide2 = currentSlide2.previousElementSibling

    // move to the previous slide
    moveToSlide2(track2, currentSlide2, prevSlide2)
})



//////////// END CAROUSEL 2 ////////////////////








//////////// CAROUSEL 3 ////////////////////



const   track3 = document.querySelector('.track-3'),
        slides3 = Array.from(track3.children),
        nextBtn3 = document.querySelector('.btn-3-right'),
        prevBtn3 = document.querySelector('.btn-3-left'),
        slideWidth3 = slides3[0].getBoundingClientRect().width
        


// arrange the slides one to another

const setSlidePosition3 = (slide3, index) => {
    slide3.style.left = slideWidth3 * index + 'px'
}
slides3.forEach(setSlidePosition3)

// when right btn is clicked, I want slides to move to the right




const moveToSlide3 = (track3, currentSlide3, targetSlide3) => {
    track3.style.transform = `translateX(-${targetSlide3.style.left})`
    currentSlide3.classList.remove('current-slide-3')
    targetSlide3.classList.add('current-slide-3');
}

nextBtn3.addEventListener("click", e => {
    const currentSlide3 = track3.querySelector('.current-slide-3'),
    nextSlide3 = currentSlide3.nextElementSibling;

    // move to the next slide
    moveToSlide3(track3, currentSlide3, nextSlide3)
})
prevBtn3.addEventListener("click", e => {
    const currentSlide3 = track3.querySelector('.current-slide-3'),
    prevSlide3 = currentSlide3.previousElementSibling

    // move to the previous slide
    moveToSlide3(track3, currentSlide3, prevSlide3)
})



//////////// END CAROUSEL 3 ////////////////////