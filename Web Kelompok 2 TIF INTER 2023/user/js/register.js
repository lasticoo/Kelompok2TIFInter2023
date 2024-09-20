// Script ini akan menangani logika tambahan jika diperlukan di masa depan
document.addEventListener('DOMContentLoaded', function() {
    const successMessage = document.getElementById('successMessage');
    if (successMessage) {
        successMessage.classList.add('d-none'); // Sembunyikan pesan sukses awalnya
    }
});