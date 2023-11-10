var selectRak = document.getElementById('inputRakBarang');
var jumlahkolominput = document.getElementById('inputKolomRak');

// var idRak = selectRak.value;

selectRak.addEventListener('click', function(){
    var idRak = selectRak.value;
    // console.log(idRak);
    console.log(idRak);

    if(idRak != 0 ) {
        fetch('http://localhost/inventaria/public/dashboard/queryJumlahRak/' + idRak)
        .then(response => response.json())
        .then(data => {
            var dataRak = data.jumlah_kolom;
            
            jumlahkolominput.innerHTML = "";
    
            for (let i = 1; i <= dataRak; i++) {
                const optionKolom = document.createElement('option');
                optionKolom.value = i;
                optionKolom.textContent = i;
                jumlahkolominput.appendChild(optionKolom);
              }
        })
        .catch(error => {
            console.error();
            console.log('Respons yang tidak valid:', error.responseText);
        });
    } else {
        selectRak.remove(0);
    }
    
});
