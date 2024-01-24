var selectRakEdit = document.getElementById('editBarangInput');
var inputKolomEdit = document.getElementById('editBarangInputKolom');
var selectRak = document.getElementById('inputRakBarang');
var jumlahkolominput = document.getElementById('inputKolomRak');
var id_barang = document.getElementById('id_barang');


var inputImage = document.getElementById('choose');
var previewImage = document.getElementById('imagePreview');

if(inputImage != null) {
    inputImage.addEventListener('change', () => {
        const file = inputImage.files[0];
        const reader = new FileReader();
    
        previewImage.innerHTML = "";
        
        reader.addEventListener('load', () => {
            const img = document.createElement('img');
            img.src = reader.result;
            img.classList.add('img-brg');
            img.classList.add('rounded');
            previewImage.appendChild(img);
        });
    
        reader.readAsDataURL(file);
    
    });
}


// select bertingkat edit data
if( selectRakEdit != null ) {
    
    var selectRakEditId = selectRakEdit.value;

    fetch('http://localhost/inventaria/public/dashboard/queryJumlahRak/' + selectRakEditId)
    .then(response => response.json())
    .then(data => {
        var dataKolom = data.jumlah_kolom;

        inputKolomEdit.innerHTML = "";

        fetch('http://localhost/inventaria/public/dashboard/queryKolomBarang/' + id_barang.value)
        .then( response => response.json())
        .then(dataKolomBarang => {
            
            for (let i = 1; i <= dataKolom; i++) {
    
                const optionKolomEdit = document.createElement('option');
                optionKolomEdit.value = i;
                optionKolomEdit.text = i;
                inputKolomEdit.appendChild(optionKolomEdit);
    
                if( i == dataKolomBarang.kolom ) {
                    optionKolomEdit.selected = true;
                    optionKolomEdit.value = i;
                }
    
            }

            selectRakEdit.addEventListener('click', function() {

                inputKolomEdit.innerHTML = "";

                var selectChangeId = selectRakEdit.value;

                fetch('http://localhost/inventaria/public/dashboard/queryJumlahRak/' + selectChangeId )
                .then(response => response.json())
                .then(dataKolomQuery => {

                    var jumlah_kolom = dataKolomQuery.jumlah_kolom;

                    console.log(dataKolomQuery);
                    for (let i = 1; i <= jumlah_kolom; i++) {
                        const optionSelect = document.createElement('option');
                        optionSelect.value = i;
                        optionSelect.text = i;
                        inputKolomEdit.appendChild(optionSelect);
                    }

                });

            }); 

        });
        

    });

}
//  end select bertingkat edit data

// select bertingkat tambah data
if( selectRak != null ) {
    
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
            jumlahkolominput.innerHTML = ""
            
            const KolomKosong = document.createElement('option'); 
            KolomKosong.value = 0;
            KolomKosong.textContent = 'Pilih Kolom Rak';
            jumlahkolominput.appendChild(KolomKosong);
        }
    });
    
}
// end select bertingkat tambah data

// Sidebar Script Start

const menu = document.querySelector(".menu");
const sidebar = document.querySelector("#sidebar");
var nilai = 0;

menu.addEventListener("click", function(){
    if(nilai == 0){
        sidebar.style.left = "0%";
        sidebar.style.boxShadow = "20px 0px 20px rgba(0, 0, 0, 0.3)";
        sidebar.style.transition = "all ease 1s";
        nilai = 1;
    }
    else{
        sidebar.style.left = "-100%";
        sidebar.style.boxShadow = "0px 0px 0px";
        nilai = 0;
    }
});
window.addEventListener("load", function(){
    loading.style.display = "none";
});