@extends('templates.layout')

@section('title')
    <title>Edit profile</title>
@endsection

@section('main')
    <div class="w-full p-6 flex items-start gap-x-8 bg-white">

        <!-- Sidebar (if you have one) -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full flex flex-col py-6 bg-main-500 rounded-xl shadow-lg">
            <div class="font-bold border-b-2 px-6 pb-4 pt-0">
                Edit Informasi Pribadi
            </div>

            <form action="{{ route('profile.update') }}" method="POST" class="px-6 py-4 space-y-6">
                @csrf
                @method('PUT')

                <div class="space-y-6">

                    <!-- nama -->
                    <div class="flex flex-col">
                        <label for="nama-lengkap" class="text-sm font-medium">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama-lengkap"
                            value="{{ old('nama_lengkap', $user->nama_lengkap) }}"
                            class="w-full p-4 border border-neutral-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2" />
                        @error('nama_lengkap')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- umur dan jenis kelamin -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- umur -->
                        <div class="flex flex-col">
                            <label for="umur" class="text-sm font-medium">Umur</label>
                            <input type="number" name="umur" id="umur" value="{{ old('umur', $user->umur) }}" min="0"
                                max="150"
                                class="w-full p-4 border border-neutral-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />
                            @error('umur')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Jenis kelamin -->
                        <div class="flex flex-col">
                            <label for="jenis-kelamin" class="text-sm font-medium">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis-kelamin"
                                class="w-full p-4 border border-neutral-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2">
                                <option value="Laki - Laki" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Laki - Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email dan telepon -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email  -->
                        <div class="flex flex-col gap-2">
                            <label for="email" class="text-sm font-medium">Email</label>
                            <input type="email" id="email" value="{{ $user->email }}" disabled
                                class="w-full p-3 border border-neutral-300 rounded-md text-sm bg-gray-100 cursor-not-allowed" />
                        </div>

                        <!-- Telepon -->
                        <div class="flex flex-col gap-2">
                            <label for="no-telepon" class="text-sm font-medium">No Telepon</label>
                            <input type="text" id="no-handphone" value="{{ $user->no_handphone }}" disabled
                                class="w-full p-3 border border-neutral-300 rounded-md text-sm bg-gray-100 cursor-not-allowed" />
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="flex flex-col">
                        <label for="alamat" class="text-sm font-medium">Alamat</label>
                        <textarea name="alamat" id="alamat"
                            class="w-full p-4 border border-neutral-300  text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2"
                            rows="4">{{ old('alamat', $user->alamat) }}</textarea>
                        @error('alamat')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-4 mt-6">
                    <a href="{{ route(name: 'profile') }}" class="text-[#FF0004] text-sm py-2">Batalkan</a>
                    <button type="submit" class="bg-primary-500 text-white py-2 px-6 rounded-md text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection