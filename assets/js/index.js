// VARIABLES
let toggleButtons, bodyElement, bottomGrad, splashGrad; 

// TARGETING
toggleButtons = document.getElementsByClassName('switch');
bodyElement = document.querySelector('body'); 

// GRADIENT TOGGLE
toggleButtons[0].querySelector('input').addEventListener('click', function(){
    bottomGrad = document.querySelector('#bottom');

    // TODO: Add Splash Gradient Targeting
    if(!this.checked) {
        bottomGrad.classList.remove('gradient');
        toggleButtons[0].querySelector('p').innerHTML = 'Gradient Off';
        localStorage.setItem('gradient', this.checked);
    } else {
        bottomGrad.classList.add('gradient');
        toggleButtons[0].querySelector('p').innerHTML = 'Gradient On';
        localStorage.setItem('gradient', this.checked);
    }
});

// THEME TOGGLE
toggleButtons[1].querySelector('input').addEventListener('click', function(){
    if(!this.checked) {
        bodyElement.classList.add('dark-theme');
        toggleButtons[1].querySelector('p').innerHTML = 'Dark';
        localStorage.setItem('theme', this.checked);
    } else {
        bodyElement.classList.remove('dark-theme');
        toggleButtons[1].querySelector('p').innerHTML = 'Light';
        localStorage.setItem('theme', this.checked);
    }
});


