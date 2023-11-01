// Mengambil elemen select menggunakan ID
var rakbarang = document.getElementById('inputRakbarang');
var jumlahkolominput = document.getElementById('inputKolombarang');

fetch('js/sambungan.php')
    .then(response => response.json()) // Mengurai respons JSON
    .then(data => {
        var datamasuk = data.data;
        console.log(data);

        datamasuk.forEach(item => {
            const optionRak = document.createElement('option');
            optionRak.value = item.rak_id; 
            optionRak.textContent = item.rak_nama;
            // rakbarang.appendChild(optionRak);
        });



        // Lakukan apa pun yang diperlukan dengan data JSON di sini, seperti mengisi nilai ke elemen HTML
        
        // Menambahkan event listener untuk mengambil nilai setiap kali pilihan diubah
        rakbarang.addEventListener('change', function() {
            // Mendapatkan nilai option yang dipilih
            var selectedValue = rakbarang.value;
            jumlahkolominput.innerHTML = '';
            var selected = datamasuk.find(item => item.id_rak == selectedValue);
            console.log(selected);
            var idkolom = selected.jumlah_kolom;
            console.log(idkolom);
            
            for (let i = 1; i <= idkolom; i++) {
                const optionKolom = document.createElement('option');
                optionKolom.value = i;
                optionKolom.textContent = i;
                jumlahkolominput.appendChild(optionKolom);
              }
              
            
            // Melakukan sesuatu dengan nilai yang dipilih, misalnya menampilkannya
            // TEST ZONE
            // alert("Nilai yang dipilih: " + selectedValue);
            // console.log("Nilai yang dipilih: " + selectedValue);
    })
    // alert("Skrip terhubung dengan tampilan PHP.");
    // console.log("Skrip terhubung dengan tampilan PHP.");




    
        
});






// const pilihankolom = document.getElementById("inputKolom");
// const pilihanrak = document.getElementById("inputRak");

// fetch('http://localhost/inventaria/public/dashboard/index.php')
//     .then(response => response.json())
//     .then (data => {
//         const rakdata = data.rak;

//         rakdata.forEach(rak => {
//             const optionrak = document.createElement('option');
//             optionrak.value = rak.id_rak;
//             optionrak.textContent = rak.nama_rak;
//             pilihanrak.appendChild(optionrak);
//         });

//         pilihanrak.addEventListener('change', () =>{
//             const rakid = pilihanrak.value;
//             pilihankolom.innerHTML = '';

//             const selectedRak = rakdata.find(rak => rak.id_rak == rakid);
//             const jumlahkolom = selectedRak.jumlah_kolom;

//             for (let i = 1; i <= jumlahkolom; i++){
//                 const optionkolom = document.createElement('option');
//                 optionkolom.value = i;
//                 optionkolom.textContent = i;
//                 pilihankolom.appendChild(optionkolom);
//             }
//         })

//     })

