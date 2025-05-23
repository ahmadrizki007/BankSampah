@props(['message' => ''])

<div id="red-alert" x-data="{ show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" x-transition
    class="flex w-96 shadow-lg rounded-lg fixed left-1/2 top-20 transform -translate-x-1/2 -translate-y-1/2 z-50 opacity-95 transition-transform duration-300">
    <div class="bg-red-600 py-4 px-6 rounded-l-lg flex items-center"> <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20">
            <path fill-rule="evenodd"
                d="M4.47.22A.75.75 0 015 0h6a.75.75 0 01.53.22l4.25 4.25c.141.14.22.331.22.53v6a.75.75 0 01-.22.53l-4.25 4.25A.75.75 0 0111 16H5a.75.75 0 01-.53-.22L.22 11.53A.75.75 0 010 11V5a.75.75 0 01.22-.53L4.47.22zm.84 1.28L1.5 5.31v5.38l3.81 3.81h5.38l3.81-3.81V5.31L10.69 1.5H5.31zM8 4a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 018 4zm0 8a1 1 0 100-2 1 1 0 000 2z">
            </path>
        </svg>
    </div>
    <div
        class="py-4 px-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
        <div class="italic text-black">
            {{ $message ?? "Terjadi kesalahan" }}
        </div>
        <button id="close-button" @click="show = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16" width="20"
                height="20">
                <path fill-rule="evenodd"
                    d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                </path>
            </svg>
        </button>
    </div>
</div>