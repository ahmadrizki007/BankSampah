@props(['active' => ''])

<ul class="p-4 flex flex-col gap-5 bg-white rounded-xl shadow-md">
    <li class="text-nowrap mb-4 text-sm text-neutral-500 font-bold">
        Information Type
    </li>
    <li class="flex text-sm">
        <img src="{{ asset('icons/dashboard.svg') }}" width="20" alt="home">
        <a class="ms-2" href="{{ route("dashboard") }}">Dashboard</a>
    </li>
    <li class="flex text-sm">
        <img src="{{ asset('icons/transaksi.svg') }}" width="20" alt="transaksi">
        <a class="ms-2" href="{{ route("transaksi") }}">Transaksi</a>
    </li>
    <li class="flex text-sm">
        <img src="{{ asset('icons/penarikan.svg') }}" width="20" alt="penarikan">
        <a class="ms-2" href="{{ route("penarikan") }}">Penarikan</a>
    </li>
</ul>