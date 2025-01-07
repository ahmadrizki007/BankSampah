<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah Sahabat Gajah</title>
    <link rel="stylesheet" href={{ asset("css/style.css")}}>

    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&family=Poppins:wght@700&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
        @endif
</head>
<body>
    <!-- Header -->
    <header class="header bg-[#276561]">
        <div class="logo">
            <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah"> 
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="about.html">Tentang Kami</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Kunjungan</a></li>
            </ul>
        </nav>
        <button class="login-btn">Login</button>
    </header>

    <!-- Hero Section -->
    <main class="hero">
        <!-- Segitiga Kiri Bawah -->
        <div class="triangle-left"></div>

        <div class="hero-content">
            <div class="reuse-image">
                <img src={{ asset("asset/RE.png") }} alt="REUSE REDUCE RECYCLE">
            </div>
            <p class="description">
                Selamat Datang di Bank Sampah Sahabat Gajah,<br>
                Melindungi Gajah dan Melindungi Alam
            </p>
            <button class="cta-btn">Selengkapnya</button>
        </div>
        <div class="hero-image">
            <img src= {{asset("asset/icon_1.png")}} alt="Ilustrasi Recycle">
        </div>

<!-- Ayo Bergabung -->
        <!-- Segitiga Kanan Atas -->
        <div class="triangle-right"></div>
    </main>
    <!-- Section Bergabung -->
<section class="join-section">
    <!-- Kotak Langkah-Langkah -->
    <div class="steps">
        <div class="step-box step-green">
            <span class="step-text bold">Pilah</span> <span class="step-text">Jenisnya</span>
        </div>
        <div class="step-box step-white">
            <span class="step-text bold">Kemas</span> <span class="step-text">Rapih</span>
        </div>
        <div class="step-box step-green">
            <span class="step-text bold">Setor</span> <span class="step-text">Sampahnya</span>
        </div>
    </div>

    <!-- Gambar Tengah -->
    <div class="elephant-image">
        <img src={{ asset("asset/gajah.png") }} alt="Gajah Menggemaskan">
    </div>

    <!-- Teks Ajak Bergabung -->
    <div class="join-text">
        <h2>Ayo Bergabung <br><span>untuk Pengelolaan Sampah yang Lebih Baik!</span></h2>
        <p>
            Ambil bagian dalam upaya melestarikan lingkungan dengan bertanggung jawab atas sampah yang Anda hasilkan 
            melalui Bank Sampah Sahabat Gajah. Ikuti langkah mudah ini untuk mulai berkontribusi.
        </p>
        <button class="join-btn">Bergabung Sekarang</button>
    </div>
</section>

<!-- Pencapaian Kami -->
<section class="achievement-section">
    <div class="triangle-right-top"></div> <!-- Segitiga atas kanan -->
    <h2 class="achievement-title">PENCAPAIAN KAMI</h2>
    <div class="achievement-boxes">
        <div class="achievement-box">
            <h3>22</h3>
            <p>Bank Sampah Unit</p>
        </div>
        <div class="achievement-box">
            <h3>7</h3>
            <p>Unit Usaha</p>
        </div>
        <div class="achievement-box">
            <h3>30</h3>
            <p>Program Pendampingan</p>
        </div>
    </div>
</section>

<!-- Keuntungan -->
<section class="benefit-section">
    <h2 class="benefit-title">KEUNTUNGAN</h2>
    <div class="benefit-container">
        <!-- Kotak 1 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Sampah Terkelola</h3>
                <p>Sampah akan dikelola secara bertanggung jawab dan mengurangi jumlah sampah yang berakhir di TPA.</p>
            </div>
            <div class="icon">
                <i class="MdRecycling"></i>
            </div>
        </div>

        <!-- Kotak 2 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Pemberdayaan Masyarakat</h3>
                <p>Masyarakat diajak terlibat langsung dan sambil menggali potensi yang dimiliki.</p>
            </div>
            <div class="icon">
                <i class="AiOutlineHome"></i>
            </div>
        </div>

        <!-- Kotak 3 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Praktis dan Mudah</h3>
                <p>Cukup pilah dan bersihkan sampah Anda di rumah dan setorkan kepada kami.</p>
            </div>
            <div class="icon">
                <i class="AiOutlineFieldTime"></i>
            </div>
        </div>

        <!-- Kotak 4 -->
        <div class="benefit-box">
            <div class="content">
                <h3>Apresiasi Reward</h3>
                <p>Masyarakat yang menyetorkan sampah akan mendapatkan reward dalam bentuk tabungan.</p>
            </div>
            <div class="icon">
                <i class="AiOutlineGift"></i>
            </div>
        </div>
    </div>
    <!-- Segitiga Kiri Bawah -->
    <div class="triangle-left-bottom"></div>
</section>

<!-- Cara Menyiapkan Sampah -->
<section class="prepare-section">
    <h2 class="prepare-title">CARA MENYIAPKAN SAMPAH</h2>
    <div class="prepare-container">
        <!-- Kolom Kiri -->
        <div class="prepare-left">
            <div class="prepare-box">
                <h3>1. Bersihkan Sampah</h3>
                <p>Pastikan sampah yang akan dikirim dalam keadaan bersih guna menghindari penyebaran kuman.</p>
            </div>
            <div class="prepare-box">
                <h3>2. Pastikan Sampah Kering</h3>
                <p>Sampah yang akan dikirimkan harus dalam keadaan kering, tidak basah, atau pun lembab.</p>
            </div>
        </div>

        <!-- Gambar Tengah -->
        <div class="prepare-image">
            <img src= {{ asset("asset/protecting the environment-amico.png") }} alt="Protecting the Environment">
        </div>

        <!-- Kolom Kanan -->
        <div class="prepare-right">
            <div class="prepare-box">
                <h3>3. Remas dan Lipat</h3>
                <p>Remas dan lipat sampah untuk memaksimalkan ruang dan volume pengiriman.</p>
            </div>
            <div class="prepare-box">
                <h3>4. Kemas Rapi</h3>
                <p>Kemas sampah menggunakan kardus atau kemasan lain.</p>
            </div>
        </div>
    </div>
</section>

<!-- Partner -->
<section class="partner-section">
    <h2 class="partner-title">Partner</h2>
    <div class="partner-container">
        <div class="partner-box">
            <img src={{ asset("asset/G1.jpg") }} alt="Partner 1">
        </div>
        <div class="partner-box">
            <img src={{ asset("asset/G2.jpg") }} alt="Partner 2">
        </div>
        <div class="partner-box">
            <img src={{ asset("asset/G3.png") }} alt="Partner 3">
        </div>
        <div class="partner-box">
            <img src={{ asset("asset/G4.jpg") }} alt="Partner 4">
        </div>
    </div>
    <!-- Segitiga Kiri Bawah -->
    <div class="triangle-left-bottom"></div>
</section>

<!-- Donasi -->
<section class="donation-section">
    <div class="donation-container">
        <!-- Bagian Teks -->
        <div class="donation-text">
            <div class="line"></div>
            <div class="text-content">
                <h2>Bantu Gajah dari Rumah</h2>
                <p>
                    Lakukan aksi nyata dalam upaya menjaga gajah untuk hidup lebih baik bersama 
                    Bank Sampah Sahabat Gajah
                </p>
                <button class="donation-button">Donasi Sekarang</button>
            </div>
        </div>
        <!-- Bagian Gambar -->
        <div class="donation-image">
            <img src={{ asset("asset/G6.png") }} alt="Bantu Gajah">
        </div>
    </div>
</section>

<!-- Reloop Market -->
<section class="reloop-section">
    <div class="reloop-container">
        <!-- Judul -->
        <h2 class="reloop-title">Reloop Market</h2>
        <!-- Gambar Poster -->
        <div class="reloop-image">
            <img src={{ asset("asset/G8.jpg") }} alt="Reloop Market">
        </div>
    </div>
    <!-- Segitiga Dekoratif -->
    <div class="triangle-left"></div>
    <div class="triangle-right"></div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <!-- Kolom Alamat -->
        <div class="footer-column">
            <img src={{ asset("asset/logo.png") }} alt="Logo Bank Sampah" class="footer-logo">
            <p class="footer-address">
                Jl. Airan Raya No.8, Way Huwi, lampung selatan, Kabupaten Lampung Selatan, Lampung 35141
            </p>
        </div>
        <!-- Kolom Link -->
        <div class="footer-column">
            <h3>BANK SAMPAH SAHABAT GAJAH</h3>
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Reloop Market</a></li>
            </ul>
        </div>
        <!-- Kolom Kontak -->
        <div class="footer-column">
            <h3>IKUTI KAMI</h3>
            <ul>
                <li><a href="mailto:banksampahsahabatgajah@gmail.com">banksampahsahabatgajah@gmail.com</a></li>
                <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
                <li>
                    <a href="#"><img src={{ asset("asset/instagram-icon.png") }} alt="Instagram"></a>
                    <a href="#"><img src={{ asset("asset/tiktok-icon.png") }} alt="TikTok"></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-bottom">
        <p>© 2025 Sahabat Gajah. All Rights Reserved</p>
    </div>
</footer>

</body>
</html>