// 0.0 VARIABLES
let toggleButtons, bodyElement, bottomGrad, splashGrad; 

// 0.1 TARGETING
toggleElements = document.getElementsByClassName('toggle');
toggleButtons = document.getElementsByClassName('switch');
bodyElement = document.querySelector('body'); 
bottomGrad = document.querySelector('#bottom');

// 1.0 LOCAL STORAGE CHECKS
// 1.1 Gradient Check 
if(localStorage.getItem('gradient') == 'false') {
    toggleButtons[0].querySelector('input').checked = false;
    toggleFunction(bottomGrad, 'gradient', 0, 'Gradient Off', 0);
    document.querySelector('header').classList.remove('box-shadow'); 
} else {
    toggleButtons[0].querySelector('input').checked = true;
    toggleFunction(bottomGrad, 'gradient', 0, 'Gradient On', 1);
    document.querySelector('header').classList.add('box-shadow');
}

// 1.2 Theme Check 
if(localStorage.getItem('theme') == 'false') {
    toggleButtons[1].querySelector('input').checked = false;
    toggleFunction(bodyElement, 'dark-theme', 1, 'Dark', 1);
} else {
    toggleButtons[1].querySelector('input').checked = true;
    toggleFunction(bodyElement, 'dark-theme', 1, 'Light', 0);
}  


// 2.0 TOGGLES
// 2.1 Gradient Toggle
toggleButtons[0].querySelector('input').addEventListener('click', function(){
    // TODO: Add Splash Gradient Targeting
    if(!this.checked) {
        document.querySelector('header').classList.remove('box-shadow');
        toggleFunction(bottomGrad, 'gradient', 0, 'Gradient Off', 0);
        localStorage.setItem('gradient', this.checked);
    } else {
        document.querySelector('header').classList.add('box-shadow');
        toggleFunction(bottomGrad, 'gradient', 0, 'Gradient On', 1);
        localStorage.setItem('gradient', this.checked);
    }
});

// 2.2 Theme Toggle
toggleButtons[1].querySelector('input').addEventListener('click', function(){
    if(!this.checked) {
        toggleFunction(bodyElement, 'dark-theme', 1, 'Dark', 1);
        localStorage.setItem('theme', this.checked);
    } else {
        toggleFunction(bodyElement, 'dark-theme', 1, 'Light', 0);
        localStorage.setItem('theme', this.checked);
    }
});


// 3.0 LIGHTBOX
// Lightbox
Array.from(document.querySelectorAll("[data-lightbox]")).forEach(element => {
    element.onclick = (e) => {
      e.preventDefault();
      basicLightbox.create(`<img src="${element.href}">`).show();
    };
  });
  

//   4.0 MOBILE MENU
let details, main, header; 
details = document.querySelector(".mobile details");
main = document.querySelector("main");


details.addEventListener("toggle", function() {
    updateHeader();
    if(details.open) {
        main.onclick = function (e) { details.removeAttribute("open");}
    } 
})

// 5.0 HEADER MARGIN
header = document.querySelector("header");
console.log(header.offsetHeight);
updateHeader();


// Helper Functions
function updateHeader(){
    main.setAttribute("style", "padding-top: " + header.offsetHeight + "px");
}
function toggleFunction(a, b, c, d, e) {
    if(e == 1) {
        a.classList.add(b);
    } else {
        a.classList.remove(b);
    }
    toggleElements[c].querySelector('p').innerHTML = d; 

}