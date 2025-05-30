<!-- Footer -->
<footer class="bg-primary-500 overflow-hidden">
    <div
        class="flex lg:justify-between md:justify-around flex-wrap justify-center sm:gap-10 pt-8 pb-16 px-5 max-w-6xl mx-auto">
        <!-- Kolom Alamat -->
        <div class="flex sm:flex-col gap-5">
            <a href="{{ route('/') }}">
                <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah" class="sm:max-w-44 max-w-36"
                    alt="Sahabat Gajah Lampung Logo">
            </a>
            <p class="sm:max-w-72">
                Jl. Airan Raya No.8, Way Huwi, lampung selatan, Kabupaten Lampung Selatan, Lampung 35141
            </p>
        </div>
        <!-- Kolom Link -->
        <div class="flex flex-col gap-3 pt-11 sm:items-start items-center">
            <h3 class="font-bold">BANK SAMPAH SAHABAT GAJAH</h3>
            <ul class="mt-2 space-y-2 text-center sm:text-left">
                <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                <li><a href="{{ route('produk') }}">Produk</a></li>
                <li><a href="https://www.instagram.com/reloop.market/">Reloop Market</a></li>
            </ul>
        </div>
        <!-- Kolom Kontak -->
        <div class="flex flex-col gap-3 pt-11 sm:items-start items-center">
            <h3 class="font-bold">IKUTI KAMI</h3>

            <ul class="mt-2 space-y-2 text-center sm:text-left">
                <li class="space-x-2"><i class="fa-solid fa-envelope text-lg"></i><a
                        href="mailto:banksampahsahabatgajah@gmail.com">banksampahsahabatgajah@gmail.com</a></li>

                <li class="space-x-2">
                <i class="fa-solid fa-phone text-lg">
                </i>
                    <a href="tel:+6281234567890">
                        +62 821 8552 6668
                    </a>
                </li>
            </ul>
            <li class="list-none mt-5">
                <a href="https://www.instagram.com/banksampah_sahabatgajah/"
                    class="bg-black/20 rounded-3xl py-2 px-3 text-xl"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@bank_sampah_sagah?_t=ZS-8uOyyUJQouF&_r=1"
                    class="bg-black/20 rounded-3xl py-2 px-3 text-xl"><i class="fa-brands fa-tiktok"></i></a>
            </li>
        </div>
    </div>

    <!-- Copyright -->
    <div class="py-3 bg-black/20 text-center">
        <p>© 2025 Sahabat Gajah. All Rights Reserved</p>
    </div>
</footer>

<script>
    $('nav ul li a').on('click', function () {

    });
</script>