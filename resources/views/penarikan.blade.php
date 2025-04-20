@extends('templates.layout')

@section('title')
    <title>Status Penarikan</title>
@endsection


@section('scripts')

    <script>
        $(document).ready(function () {

            $('#withdraw-table').DataTable({
                columnDefs: [
                    {
                        target: '_all',
                        className: '!text-center',
                    }
                ],

                stateSave: true,
            });
        });
    </script>

@endsection

@section('main')

    <div class="w-full sm:p-6 p-4 sm:flex items-start lg:gap-8 gap-4 bg-primary-bg shadow-md text-black">

        <!-- Side Bar -->
        <x-sidebar />

        <!-- Main Page -->
        <div class="w-full sm:flex mt-6 sm:mt-0 flex-col sm:p-6 p-3 bg-white rounded-xl shadow-md overflow-hidden">

            <!-- Title -->
            <div class="sm:mb-6 mb-3">
                <div class="sm:text-2xl text-lg font-bold text-primary-500">
                    Status Penarikan
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table id="withdraw-table" class="row-border">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">No</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Tanggal Transaksi</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Jumlah Penarikan</th>
                            <th class="py-3 sm:px-5 px-2 sm:font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $idx = 0;
                        @endphp

                        @foreach($data as $row)

                            <tr class="border-b border-gray-200">
                                <td class="py-3 sm:px-5 px-2">{{ ++$idx }}</td>
                                <td class="py-3 sm:px-5 px-2">{{ $row->created_at_formatted }}</td>
                                <td class="py-3 sm:px-5 px-2">
                                    Rp <span x-data="{ value: {{ $row->jumlah_penarikan }} }" x-text="$rupiah(value)"></span>
                                </td>
                                <td class="py-3 sm:px-5 px-2">

                                    @if ($row->state == 'accepted')
                                        <span class="bg-primary-500 text-white text-xs py-1 px-3 rounded-full">Berhasil</span>
                                    @elseif($row->state == 'rejected')
                                        <span class="bg-red-500 text-white text-xs py-1 px-3 rounded-full">Ditolak</span>
                                    @else
                                        <span class="bg-yellow-400 text-white text-xs py-1 px-3 rounded-full">Process</span>
                                    @endif
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection