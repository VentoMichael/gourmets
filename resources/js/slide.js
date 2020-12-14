//slide
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

document.getElementById("next").addEventListener("click", () => {
    showSlides(slideIndex += 1);
})
document.getElementById("prev").addEventListener("click", () => {
    showSlides(slideIndex -= 1);
})

function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        console.log(slides)
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
