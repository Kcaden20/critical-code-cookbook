if(localStorage.getItem('gradient') == 'false') {
    toggleButtons[0].querySelector('input').checked = false;
    document.getElementById('background').classList.add('display-none');
}


toggleButtons[0].querySelector('input').addEventListener('click', function(){ 
    if(!this.checked) {
        document.getElementById('background').classList.add('display-none');
    } else {
        document.getElementById('background').classList.remove('display-none');
    }
});