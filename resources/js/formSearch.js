//form search
let formSearchInput = document.querySelector(".expo-searchId");
let searchFilter = document.querySelector(".searchFilterId");
let labelBefore = document.querySelector(".searchFilter");
let containerFilters = document.querySelector(".containerFilters");
let allDivsFilters = document.querySelectorAll(".containerFilters span");
console.log(document.getElementById("searchFilter"))
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
