function showTab(index) {
    const tabs = document.querySelectorAll('.tab-button');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => tab.classList.remove('active'));
    contents.forEach(content => content.classList.remove('active'));


    tabs[index].classList.add('active');
    contents[index].classList.add('active');
}

$(document).ready(function () {
    // Menangani klik pada hamburger icon
    $('#hamburger').on('click', function () {
        // Menampilkan/menyembunyikan menu mobile
        $('#mobile-menu').toggleClass('hidden');
    });
});
