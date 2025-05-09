// Check comic type
const comicsType = document.querySelectorAll('#type');
comicsType.forEach((comic, i) => {
    let comicType = comic.textContent.toLowerCase();
 if (comicType === 'manhua') {
    comic.classList.add('manhua');  
} else if (comicType === 'manhwa') {
     comic.classList.add('manhwa');  
 } else if (comicType === 'manga') {
     comic.classList.add('manga');  
 }
})

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