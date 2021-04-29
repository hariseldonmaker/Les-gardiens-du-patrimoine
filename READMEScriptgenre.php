var btnradio = document.getElementById('gender')

for (var count=0; count<btnradio.length; count++) {
    btnradio[count].addEventListener('change', (Event) => {
        alert('Choix : ${event.target.value}');
    });
}
