function showTab(index) {
    // Ambil semua elemen tab dan konten
    const tabs = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content');

    // Hapus kelas "active" dari semua tab dan konten
    tabs.forEach(tab => tab.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));

    // Tambahkan kelas "active" ke tab dan konten yang dipilih
    tabs[index].classList.add('active');
    contents[index].classList.add('active');
}