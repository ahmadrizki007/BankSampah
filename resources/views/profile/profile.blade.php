@extends('templates.layout')

@section('title')
<title>profile</title>
@endsection

@section('main')

<div class="w-full p-6 flex items-start gap-x-8 bg-white">

    <!-- Side Bar -->
    <x-sidebar />

    <!-- Main Page -->
    <div class="w-full flex flex-col py-4 bg-main-500 rounded-xl shadow-lg">
        <div class="font-bold border-b-2 px-6 pb-4 pt-0">
            Informasi Pribadi
        </div>

        <div class="flex justify-between px-6 py-2">
            <div>
                <label for="nama-lengkap">Nama Lengkap</label>
                <div id="nama-lengkap" class="w-full text-neutral-500 text-sm">
                    USER 1
                </div>
            </div>
            <a href="{{ route('profile.edit') }}" class="text-xs text-primary-500">
                edit
            </a>
        </div>

        <div class="flex flex-wrap gap-y-4 px-6 ">
            <div class="w-2/5 flex flex-col ">
                <label for="umur"> Umur</label>
                <div class="w-full text-neutral-500 text-sm" id="umur">
                    21 Tahun
                </div>
            </div>
            <div class="w-1/2 flex flex-col xs:max-md:w-full">
                <label for="jenis-kelamin"> Jenis Kelamin</label>
                <div class="w-full text-neutral-500 text-sm" id="jenis-kelamin">
                    Laki-Laki
                </div>
            </div>
            <div class="w-2/5 flex flex-col">
                <label for="email">email</label>
                <div class="w-full text-neutral-500 text-sm" id="email">
                    user@gmail.com
                </div>
            </div>
            <div class="w-1/2 flex flex-col xs:max-md:w-full">
                <label for="no-handphone">No Handphone</label>
                <div class="w-full text-neutral-500 text-sm" id="no-handphone">
                    087823456890
                </div>
            </div>
            <div class="w-full flex flex-col">
                <label for="alamat">Alamat</label>
                <div class="w-full text-neutral-500 text-sm" id="alamat">
                    Jl. Airan Raya No.8, Way Huwi, lampung selatan, Kabupaten Lampung Selatan, Lampung 35141
                </div>
            </div>
        </div>
    </div>
</div>
@endsection