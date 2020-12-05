const burgerMenu = document.getElementById("burger");
const navbarMenu = document.getElementById("menu");
const containerTicketsHome = document.getElementById("containerTicketsHome")
const ctaTickets = document.getElementById("ctaTickets")
burgerMenu.addEventListener("click", (e) => {
    e.preventDefault()
    navbarMenu.classList.toggle("active");
    burgerMenu.classList.toggle("active");
    containerTicketsHome.classList.toggle("hidden")
});
ctaTickets.addEventListener("mouseover", (e) => {
    e.target.classList.add("ctaTicketsHover")
})
ctaTickets.addEventListener("mouseleave", (e) => {
    e.target.classList.remove("ctaTicketsHover")
})
