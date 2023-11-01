const rakDropdown = document.getElementById('rak');
const kolomDropdown = document.getElementById('kolom');

fetch('http://localhost/inventaria/app/model/') // Ganti ini dengan URL server PHP yang sesuai
  .then(response => response.json())
  .then(data => {
    const rakData = data.rak;
    const kolomData = data.kolom;
    
    rakData.forEach(rak => {
      const option = document.createElement('option');
      option.value = rak.id;
      option.textContent = 'Rak ' + rak.nama;
      rakDropdown.appendChild(option);
    });

    rakDropdown.addEventListener('change', () => {
      const selectedRakId = rakDropdown.value;
      kolomDropdown.innerHTML = ''; // Kosongkan opsi sebelumnya

      const kolomDataByRak = kolomData.filter(kolom => kolom.rak_id == selectedRakId);
      kolomDataByRak.forEach(kolom => {
        const option = document.createElement('option');
        option.value = kolom.id;
        option.textContent = kolom.nama;
        kolomDropdown.appendChild(option);
      });
    });
  })
  .catch(error => {
    console.error('Terjadi kesalahan:', error);
  });
