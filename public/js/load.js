document.addEventListener('DOMContentLoaded', () => {
    const toggleTexts = document.querySelectorAll('.toggle-text');
    const contentDisplay = document.querySelector('.content-display');
    const contentTitle = document.querySelector('.content-title');
    const contentImage = document.querySelector('.content-image');
    const contentDescription = document.querySelector('.content-description');
    const kepalaDesaContent = document.querySelector('#kepala-desa-content');

    let currentTarget = null; // Variable untuk menyimpan target konten yang sedang ditampilkan

    const showContent = (target) => {
        toggleTexts.forEach(toggleText => {
            if (toggleText.getAttribute('data-target') === target) {
                toggleText.classList.add('text-green-600'); // Tambahkan kelas text-green-600 untuk warna hijau
            } else {
                toggleText.classList.remove('text-green-600');
            }
        });

        if (target !== currentTarget) {
            currentTarget = target; // Perbarui currentTarget dengan target yang baru

            if (target === 'Struktur Organisasi') {
                contentTitle.textContent = 'Struktur Organisasi';
                contentImage.innerHTML = '<img src="images/strukturdesa.png" alt="Struktur Organisasi">';
                contentDescription.innerHTML = ''; // Clear description if any
            } else if (target === 'Kepala Desa') {
                contentTitle.textContent = kepalaDesaContent.querySelector('h1').textContent;
                contentImage.innerHTML = kepalaDesaContent.querySelector('img').outerHTML;
            }

            // Tambahkan class 'show' untuk menampilkan konten
            contentDisplay.classList.add('show');
            contentTitle.classList.add('show');
            contentImage.classList.add('show');
            contentDescription.classList.add('show');
        } else {
            // Jika target yang diklik sama dengan yang sedang ditampilkan, sembunyikan konten
            contentDisplay.classList.remove('show');
            contentTitle.classList.remove('show');
            contentImage.classList.remove('show');
            contentDescription.classList.remove('show');

            // Kembalikan warna teks ke warna asli
            toggleTexts.forEach(toggleText => {
                toggleText.classList.remove('text-green-600');
            });

            currentTarget = null; // Reset currentTarget
        }
    };

    toggleTexts.forEach(toggleText => {
        toggleText.addEventListener('click', () => {
            const target = toggleText.getAttribute('data-target');
            showContent(target);
        });
    });

    // Tampilkan "Struktur Organisasi" saat halaman dibuka
    showContent('Struktur Organisasi');
});
