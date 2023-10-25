document.addEventListener('DOMContentLoaded', function () {
    const modeToggle = document.getElementById('mode-toggle');
    const body = document.body;

    // Cek mode saat ini pada local storage, jika tidak ada, maka gunakan mode default (light mode).
    const currentMode = localStorage.getItem('mode') || 'light-mode';
    body.classList.add(currentMode);

    // Tambahkan event listener pada tombol untuk mengganti mode.
    modeToggle.addEventListener('click', function () {
        if (body.classList.contains('light-mode')) {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            localStorage.setItem('mode', 'dark-mode');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            localStorage.setItem('mode', 'light-mode');
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const modeToggle = document.getElementById('mode-toggle');
    const inputNameButton = document.getElementById('input-name');

    // Tambahkan event listener pada tombol "Mode" untuk mengganti mode.
    modeToggle.addEventListener('click', function () {
        // Kode untuk mengubah mode di sini
    });

    // Tambahkan event listener pada tombol "Masukkan Nama" untuk prompt.
    inputNameButton.addEventListener('click', function () {
        const name = window.prompt('Masukkan nama Anda:');
        if (name) {
            alert(`Halo, ${name}! Selamat datang di LAMINTYAS MUSIC.`);
        }
    });
});