const rakDropdown = document.getElementById('rak');
const kolomDropdown = document.getElementById('kolom');

fetch('/data.php') // Ganti ini dengan URL server PHP yang sesuai
  .then(response => response.json())
  .then(data => {
    const rakData = data.data;

    rakDropdown.innerHTML = '';
    kolomDropdown.innerHTML = '';

    // Mengisi dropdown rak dan kolom berdasarkan data yang diperoleh
    rakData.forEach(item => {
      const optionRak = document.createElement('option');
      optionRak.value = item.rak_id;
      optionRak.textContent = item.rak_nama;
      rakDropdown.appendChild(optionRak);
    });
  })
  .catch(error => {
    console.error('Terjadi kesalahan:', error);
  });

rakDropdown.addEventListener('change', () => {
  const selectedRakId = rakDropdown.value;
  kolomDropdown.innerHTML = '';

  // Mengisi dropdown kolom berdasarkan rak yang dipilih
  rakData.forEach(item => {
    if (item.rak_id == selectedRakId) {
      const optionKolom = document.createElement('option');
      optionKolom.value = item.rak_id; // Atur nilai sebagai ID rak, atau sesuaikan dengan kebutuhan Anda
      optionKolom.textContent = `Rak: ${item.rak_nama}, Jumlah Kolom: ${item.jumlah_kolom}`;
      kolomDropdown.appendChild(optionKolom);
    }
  });
});



const rakDropdown = document.getElementById('rak');
const kolomDropdown = document.getElementById('kolom');

fetch('/data.php') // Ganti ini dengan URL server PHP yang sesuai
  .then(response => response.json())
  .then(data => {
    const rakData = data.data;

    rakDropdown.innerHTML = '';
    kolomDropdown.innerHTML = '';

    // Mengisi dropdown rak dan kolom berdasarkan data yang diperoleh
    rakData.forEach(item => {
      const optionRak = document.createElement('option');
      optionRak.value = item.rak_id;
      optionRak.textContent = item.rak_nama;
      rakDropdown.appendChild(optionRak);
    });
  })
  .catch(error => {
    console.error('Terjadi kesalahan:', error);
  });

rakDropdown.addEventListener('change', () => {
  const selectedRakId = rakDropdown.value;
  kolomDropdown.innerHTML = '';

  // Mengambil data jumlah kolom berdasarkan rak yang dipilih
  const selectedRak = rakData.find(item => item.rak_id == selectedRakId);
  const jumlahKolom = selectedRak.jumlah_kolom;
  

  // Mengisi dropdown kolom sesuai dengan jumlah kolom
  for (let i = 1; i <= jumlahKolom; i++) {
    const optionKolom = document.createElement('option');
    optionKolom.value = i;
    optionKolom.textContent = i;
    kolomDropdown.appendChild(optionKolom);
  }
});

