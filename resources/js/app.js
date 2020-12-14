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
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}


//form search
let formSearchInput = document.querySelector(".expo-searchId");
let searchFilter = document.querySelector(".searchFilterId");
let labelBefore = document.querySelector(".searchFilter");
let containerFilters = document.querySelector(".containerFilters");
let allDivsFilters = document.querySelectorAll(".containerFilters span");
labelBefore.addEventListener('click', () => {
    labelBefore.classList.add('loupeItem')
    formSearchInput.classList.add('open')
    formSearchInput.focus()
    searchFilter.classList.add('searchFilterActif')
    containerFilters.classList.add('containerFiltersActif')
    for (let i = 0; i <= allDivsFilters.length; i++) {
        allDivsFilters[i].classList.add('filtersExposants')
    }
})

// menu
const burgerMenu = document.querySelector(".burgerId");
const navbarMenu = document.querySelector(".menuId");
const containerTicketsHome = document.querySelector(".containerTicketsHomeId")
const ctaTickets = document.querySelector(".ctaTicketsId")
burgerMenu.addEventListener("click", (e) => {
    e.preventDefault()
    navbarMenu.classList.toggle("active");
    burgerMenu.classList.toggle("active");
    containerTicketsHome.classList.toggle("notVisible")
    document.querySelector(".navbarId").classList.toggle("menuOpenNavbar")
});
ctaTickets.addEventListener("mouseover", (e) => {
    e.target.classList.add("ctaTicketsHover")
})
ctaTickets.addEventListener("mouseleave", (e) => {
    e.target.classList.remove("ctaTicketsHover")
})

