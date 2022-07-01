document.addEventListener("DOMContentLoaded", function(event) { 
var nav = document.querySelector('header');

// Remove Open Attribute From Subnav
document.querySelectorAll('.subnav-link').forEach(item => {
    item.addEventListener('click', event => {
        dropdown = document.querySelector('details[open]');
        dropdown.removeAttribute('open');
    })
  })

// Only Have One Details Open At Any Given Time
nav.addEventListener('toggle', function (event) {
	// Only run if the dropdown is open
	if (!event.target.open) return;

	// Get all other open dropdowns and close them
	var dropdowns = nav.querySelectorAll('details[open]');
	Array.prototype.forEach.call(dropdowns, function (dropdown) {
		if (dropdown === event.target) return;
		dropdown.removeAttribute('open');
	});

}, true);

});