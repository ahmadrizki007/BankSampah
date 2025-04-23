<ul x-data="{path: window.location.pathname}"
    class="sm:w-48 sm:p-4 py-4 sm:items-start items-center sm:justify-start justify-center flex sm:flex-col sm:gap-5 bg-white sm:rounded-xl rounded-sm shadow-md sticky top-24 sm:top-32 z-10">
    <p class="text-nowrap mb-2 text-sm text-neutral-500 font-bold  hidden">
        Information Type
    </p>
    <li class="sm:w-full">
        <a 
        class="flex text-sm gap-2 rounded-md py-1 px-2 hover:bg-primary-btn-hover" 
        href="/dashboard"
        :class="{'bg-primary-btn-hover': path === '/dashboard' }"
        >
            <img src="{{ asset('icons/dashboard.svg') }}" width="20" alt="home">
            <span class="">Dashboard</span></a>
    </li>
    <li class="sm:w-full">
        <a 
        class="flex text-sm gap-2 rounded-md py-1 px-2 hover:bg-primary-btn-hover" 
        href="/transaksi"
        :class="{'bg-primary-btn-hover' : path === '/transaksi'}"
        >
            <img src="{{ asset('icons/data-transaksi.svg') }}" width="20" alt="transaksi"><span
                class="">Transaksi</span></a>
    </li>
    <li class="sm:w-full">
        <a 
        class="flex text-sm gap-2 rounded-md py-1 px-2 hover:bg-primary-btn-hover" 
        href="/penarikan"
        :class="{'bg-primary-btn-hover' : path === '/penarikan'}"
        >
            <img src="{{ asset('icons/status-penarikan.svg') }}" width="20" alt="penarikan"><span
                class="">Penarikan</span></a>
    </li>
</ul>