function submitLaporan() {
    const nama = document.getElementById('nama').value;
    const kelas = document.getElementById('kelas').value;
    const target = document.getElementById('target').value;
    const progress = document.getElementById('progress').value;
    const timeline = document.getElementById('timeline').value;
    const bukti = document.getElementById('bukti').files[0];

    if (!nama || !kelas || !target || !progress || !timeline || !bukti) {
        alert('Harap isi semua field dan unggah bukti foto!');
        return;
    }

    const outputDiv = document.getElementById('output');
    outputDiv.classList.remove('d-none');
    outputDiv.innerHTML = `
        <h5>Laporan Berhasil Dikirim</h5>
        <p><strong>Nama:</strong> ${nama}</p>
        <p><strong>Kelas:</strong> ${kelas}</p>
        <p><strong>Target Progress:</strong> ${target}</p>
        <p><strong>Progress Anggota:</strong> ${progress}</p>
        <p><strong>Kesesuaian dengan Timeline:</strong> ${timeline}</p>
        <p><strong>Bukti Foto:</strong> ${bukti.name}</p>
    `;
}
