function goToChapter() {
            const select = document.querySelector('#chapterSelect');
            const url = select.value;
            if (url) {
                window.location.href = url
            }
        }

// Hamburger menu
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const overlay = document.querySelector('#overlay');
// show nav-menu
hamburger.addEventListener('click', (e) => {
    navMenu.classList.toggle('-left-full');
    navMenu.classList.toggle('left-0');
    overlay.classList.toggle('hidden');
})
// remove nav-menu
document.addEventListener('click', (e) => {

    if (!navMenu.contains(e.target) && navMenu.classList.contains('left-0') && !hamburger.contains(e.target)) {
        navMenu.classList.toggle('-left-full');
        navMenu.classList.toggle('left-0');       
        overlay.classList.toggle('hidden');        
    }
})
const closeNav = document.querySelector('#close-nav');
closeNav.addEventListener('click', (e) => {
    navMenu.classList.add('-left-full');
    navMenu.classList.remove('left-0');       
    overlay.classList.add('hidden');        

})

// search form
const searchButton = document.querySelector('#searchButton');
const form = document.querySelector('#form');
searchButton.addEventListener('click', (e) => {
    form.classList.add('form-active');
    form.classList.toggle('pointer-events-none');
    overlay.classList.toggle('hidden');
})
document.addEventListener('click', (e) => {
    if (!searchButton.contains(e.target) && !form.contains(e.target) && form.classList.contains('form-active')) {
        form.classList.toggle('form-active');
        form.classList.toggle('pointer-events-none');
        overlay.classList.toggle('hidden');
    }
})
const closeSearch = document.querySelector('#close-search');
closeSearch.addEventListener('click', (e) => {       
    form.classList.toggle('form-active');
    form.classList.toggle('pointer-events-none');
    overlay.classList.toggle('hidden');
})

// handle dark mode
const darkMode = document.getElementById('darkMode');
if (localStorage.getItem('theme') === 'dark') {
    darkMode.checked = true;
} else {
    darkMode.checked = false;
}
darkMode.addEventListener('change', (e) => {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark')
        localStorage.setItem('theme', 'light')
    } else {
        document.documentElement.classList.add('dark')
        localStorage.setItem('theme', 'dark')
    }
})