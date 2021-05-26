var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}



var slideIndex_top1 = 1;
showSlides_top1(slideIndex_top1);

function currentSlide_top1(n) {
    showSlides_top1(slideIndex_top1 = n);
}

function showSlides_top1(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides-top1");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex_top1 = 1 }
    if (n < 1) { slideIndex_top1 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex_top1 - 1].style.display = "block";
    dots[slideIndex_top1 - 1].className += " active";
}

var slideIndex_top2 = 1;
showSlides_top2(slideIndex_top2);

function currentSlide_top2(n) {
    showSlides_top2(slideIndex_top2 = n);
}

function showSlides_top2(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides-top2");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex_top2 = 1 }
    if (n < 1) { slideIndex_top2 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex_top2 - 1].style.display = "block";
    dots[slideIndex_top2 - 1].className += " active";
}

var slideIndex_top3 = 1;
showSlides_top3(slideIndex_top3);

function currentSlide_top3(n) {
    showSlides_top3(slideIndex_top3 = n);
}

function showSlides_top3(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides-top3");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex_top3 = 1 }
    if (n < 1) { slideIndex_top3 = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex_top3 - 1].style.display = "block";
    dots[slideIndex_top3 - 1].className += " active";
}

function currentSlide_home2(n) {
    var i = n
    currentSlide_top3(i);
    currentSlide_top2(i);
    currentSlide_top1(i);
}

function scroll_to_home2(n) {
    window.scrollTo(0, n);
}