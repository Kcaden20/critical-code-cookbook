// 0.0 VARIABLES
let toggleButtons, bodyElement, bottomGrad, splashGrad; 

// 0.1 TARGETING
toggleButtons = document.getElementsByClassName('switch');
bodyElement = document.querySelector('body'); 
bottomGrad = document.querySelector('#bottom');


toggleEffects = document.querySelectorAll('.effects');
toggleTheme = document.querySelectorAll('.themes');

if (localStorage.getItem("gradient") === null && localStorage.getItem("theme") === null) {
    localStorage.setItem("gradient", 'false');
    localStorage.setItem('theme', 'true');
  }

// 1.0 LOCAL STORAGE CHECKS
// 1.1 Gradient Check 
if(localStorage.getItem('gradient') == 'false') {
    toggleEffects.forEach(item => {
        item.querySelector('input').checked = false; 
        item.querySelector('p').innerHTML = 'Effects Off'; 
    });
    toggleFunction(bottomGrad, 'gradient', 0, 'Effects Off', 0);
    document.querySelector('header').classList.remove('box-shadow'); 
} else {
    toggleEffects.forEach(item => {
        item.querySelector('input').checked = true; 
        item.querySelector('p').innerHTML = 'Effects On'; 
    });
    toggleFunction(bottomGrad, 'gradient', 0, 'Effects On', 1);
    document.querySelector('header').classList.add('box-shadow');
}

// 1.2 Theme Check 
if(localStorage.getItem('theme') == 'false') {
    toggleTheme.forEach(item => {
        item.querySelector('input').checked = false; 
        item.querySelector('p').innerHTML = 'Dark'; 
    });
    toggleFunction(bodyElement, 'dark-theme', 1, 'Dark', 1);
} else {
    toggleTheme.forEach(item => {
        item.querySelector('input').checked = true; 
        item.querySelector('p').innerHTML = 'Light'; 
    });
    toggleFunction(bodyElement, 'dark-theme', 1, 'Light', 0);
}  


// 2.0 TOGGLES
// 2.1 Gradient Toggle
toggleEffects.forEach(item => {
    item.querySelector('input').addEventListener('click', function(){
        if(!this.checked) {
            document.querySelector('header').classList.remove('box-shadow');
            toggleFunction(bottomGrad, 'gradient', item, 'Effects Off', 0);
            localStorage.setItem('gradient', this.checked);

            toggleEffects.forEach(swi => {
                swi.querySelector('input').checked = false;
                swi.querySelector('p').innerHTML = 'Effects Off'; 
            })
        } else {
            document.querySelector('header').classList.add('box-shadow');
            toggleFunction(bottomGrad, 'gradient', item, 'Effects On', 1);
            localStorage.setItem('gradient', this.checked);

            toggleEffects.forEach(swi => {
                swi.querySelector('input').checked = true;
                swi.querySelector('p').innerHTML = 'Effects On'; 
            })
        }
    });
});

// 2.2 Theme Toggle
toggleTheme.forEach(item => {
    item.querySelector('input').addEventListener('click', function(){
        if(!this.checked) {
            toggleFunction(bodyElement, 'dark-theme', item, 'Dark', 1);
            localStorage.setItem('theme', this.checked);
            item.querySelector('p').innerHTML = 'Dark'; 

            toggleTheme.forEach(swi => {
                swi.querySelector('input').checked = false;
                swi.querySelector('p').innerHTML = 'Dark'; 
            })
        } else {
            toggleFunction(bodyElement, 'dark-theme', item, 'Light', 0);
            localStorage.setItem('theme', this.checked);

            toggleTheme.forEach(swi => {
                swi.querySelector('input').checked = true;
                swi.querySelector('p').innerHTML = 'Light'; 
            })
        }
    });
})


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
main = document.querySelector("main");


document.querySelectorAll('details').forEach(item => {
    console.log(item);
    main.addEventListener('click', function(){
        if(item.open) {
            item.removeAttribute("open");
        }
    })
})

// 5.0 HEADER MARGIN
header = document.querySelector("header");
// updateHeader();

// Helper Functions
// function updateHeader(){
//     main.setAttribute("style", "padding-top: " + header.offsetHeight + "px");
// }

function toggleFunction(a, b, c, d, e) {
    if(e == 1) {
        a.classList.add(b);
    } else {
        a.classList.remove(b);
    }

}