// check comic type
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