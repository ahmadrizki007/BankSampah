@extends('templates.layout')

@section('title')
    <title>Edit profile</title>
@endsection

@section('main')
    <div class="w-full p-6 flex items-start gap-x-8 bg-[#ececec]">

        @if (session('error'))
            <div class="border border-red-400">
                <span>
                    {{ session('error')}}
                </span>

            </div>
        @endif

        <!-- Sidebar (if you have one) -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full flex flex-col py-6 bg-white rounded-xl shadow-lg">
            <div class="font-bold border-b-2 px-6 pb-4 pt-0">
                Edit Informasi Pribadi
            </div>

            <form action="{{ route('profile.handleEdit') }}" method="POST" class="px-6 py-4 space-y-6">
                @csrf

                <div class="space-y-6">
                    <!-- nama -->
                    <div class="flex flex-col">
                        <label for="nama-lengkap" class="text-sm font-medium">Nama Lengkap</label>
                        <input type="text" name="name" id="nama-lengkap" value="{{ old('name', $user->name) }}"
                            class="w-full p-3 border-2 border-neutral-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2"
                            required />
                        @error('name')
                            <span class="italic mt-1 text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- umur dan jenis kelamin -->
                    <div class="flex gap-x-14">
                        <!-- umur -->
                        <div class="flex flex-col w-1/2">
                            <label for="age" class="text-sm font-medium">Umur</label>
                            <input type="number" name="age" id="age" value="{{ old('age', $user->age) }}" min="0" max="1000"
                                class="w-full p-3 border-2 border-neutral-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                                required />
                            @error('age')
                                <span class="italic mt-1 text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Jenis kelamin -->
                        <div class="flex flex-col w-1/2">
                            <label for="jenis-kelamin" class="text-sm font-medium">Jenis Kelamin</label>

                            <div class="relative">
                                <select name="gender" id="jenis-kelamin"
                                    class="appearance-none w-full p-3 border-2 border-neutral-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2">
                                    <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>
                                        Laki-Laki
                                    </option>
                                    <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>
                                        Perempuan
                                    </option>
                                </select>

                                <svg class="absolute right-3 top-1/2 w-4 text-gray-500 pointer-events-none" width="50"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            @error('gender')
                                <span class="italic mt-1 text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email dan telepon -->
                    <div class="flex gap-x-14">
                        <!-- Email  -->
                        <div class="flex flex-col w-1/2">
                            <label for="email" class="text-sm font-medium">Email</label>
                            <input type="email" id="email" value="{{ $user->email }}" disabled
                                class="w-full p-3 mt-2 border-2 border-neutral-300 rounded-lg text-sm bg-gray-100 cursor-not-allowed" />
                        </div>

                        <!-- Telepon -->
                        <div class="flex flex-col w-1/2">
                            <label for="no-telepon" class="text-sm font-medium">No Telepon</label>
                            <input type="text" id="no-handphone" value="{{ $user->phone }}" disabled
                                class="w-full p-3 mt-2 border-2 border-neutral-300 rounded-lg text-sm bg-gray-100 cursor-not-allowed" />
                        </div>
                    </div>

                    <!-- Alamat -->
                    <div class="flex flex-col">
                        <label for="address" class="text-sm font-medium">Alamat</label>
                        <textarea name="address" id="address"
                            class="w-full p-2 border-2 rounded-lg border-neutral-300 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 mt-2"
                            rows="4">{{ old('address', $user->address) }}</textarea>
                        @error('address')
                            <span class="italic mt-1 text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-4 mt-6 font-bold">
                    <a href="{{ route(name: 'profile') }}" class="text-[#FF0004] text-sm py-2">Batalkan</a>
                    <button type="submit" class="bg-primary-500 text-white py-2 px-6 rounded-md text-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection