if(localStorage.getItem('gradient') == 'false') {
    document.getElementById('background').classList.add('display-none');
}

toggleEffects.forEach(item => {
        item.querySelector('input').addEventListener('click', function(){ 
        if(!this.checked) {
            document.getElementById('background').classList.remove('display-none');
            
        } else {
            document.getElementById('background').classList.add('display-none');
        }
    });
});