const allElements = document.querySelectorAll('.container');

for(let i = 1; i < allElements.length; i += 2){
    allElements[i].classList.replace('left', 'right');
}