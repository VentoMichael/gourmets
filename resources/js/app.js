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
