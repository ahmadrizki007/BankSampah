@extends('templates.layout')

@section('title')
    <title>profile</title>
@endsection

@section('main')

    <div class="w-full sm:p-6 p-4 sm:flex items-start lg:gap-8 gap-4 bg-primary-bg shadow-md text-black">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full flex flex-col sm:py-6 py-3 bg-white rounded-xl shadow-md mt-6 sm:mt-0">
            <div class="font-bold border-b-2 sm:px-6 px-3 sm:pb-4 pb-3 sm:text-2xl text-lg">
                Informasi Pribadi
            </div>

            <div class="flex justify-between sm:px-6 px-3 py-2">
                <div>
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <div id="nama-lengkap" class="w-full text-neutral-500 text-sm">
                        {{ $user->name }}
                    </div>
                </div>
                <a href="{{ route('profile.edit') }}" class="text-sm text-primary-500">
                    Edit
                </a>
            </div>

            <div class="flex flex-wrap gap-y-4 sm:px-6 px-3">
                <div class="w-2/5 flex flex-col ">
                    <label for="umur"> Umur</label>
                    <div class="w-full text-neutral-500 text-sm" id="umur">
                        {{ $user->age }} Tahun
                    </div>
                </div>
                <div class="w-1/2 flex flex-col xs:max-md:w-full">
                    <label for="jenis-kelamin"> Jenis Kelamin</label>
                    <div class="w-full text-neutral-500 text-sm" id="jenis-kelamin">
                        @php
if ($user->gender == 'male') {
echo 'Laki - Laki';
} else {
echo 'Perempuan';
}
                        @endphp
                    </div>
                </div>
                <div class="w-2/5 flex flex-col">
                    <label for="email">Email</label>
                    <div class="w-full text-neutral-500 text-sm" id="email">
                        {{ $user->email }}
                    </div>
                </div>
                <div class="w-1/2 flex flex-col xs:max-md:w-full">
                    <label for="no-handphone">No Handphone</label>
                    <div class="w-full text-neutral-500 text-sm" id="no-handphone">
                        {{ $user->phone }}
                    </div>
                </div>
                <div class="w-full flex flex-col">
                    <label for="alamat">Alamat</label>
                    <div class="w-full text-neutral-500 text-sm" id="alamat">
                        @php
if (gettype($user->address) == 'NULL') {
echo '<i>Alamat kosong</i>';
} else {
echo $user->address;
}
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
