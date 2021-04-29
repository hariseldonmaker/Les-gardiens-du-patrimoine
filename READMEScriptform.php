let form = document.querySelector('form');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    console.log('Formulaire envoyé');
}); 

let submitbutton = document.querySelector('')

setTimeout(() => {
    form.submit();
}, 2000);
