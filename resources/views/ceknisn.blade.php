@extends('layouts.master')

@section('title', 'Home')

@include('layouts.navbar')

<div class="p-4 sm:ml-64">
    <div class="p-4 bg-white dark:border-gray-700 transition-transform border-2 border-gray-200 rounded-lg">
        
        
        <form class="flex items-center" action="{{route('ceknisn')}}">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
        @if(isset($siswa))
            <div class="relative overflow-x-auto mb-10">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg">
                    <caption class="mb-2 ml-2 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Siswa
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                NISN
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NIS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat  
                            </th>
                            <th scope="col" class="px-6 py-3">
                                SPP  
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            @foreach ($siswa as $data)
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$data->nisn}}
                            </th>
                            <td class="px-6 py-4">
                                {{$data->nis}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->kelas->nama_kelas}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->kelas->kompetensi_keahlian}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->alamat}}
                            </td>
                            <td class="px-6 py-4">
                                {{$data->spp->tahun}} Tahun - {{ currency_IDR($data->spp->nominal)}}
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg">
                <caption class="mb-2 ml-2 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Laporan Pembayaran
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Petugas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Bayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bulan Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Dibayar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pembayaran as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$data->petugas->nama_petugas}}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->tgl_bayar}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->bulan_dibayar}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->tahun_dibayar}}
                        </td>
                        <td class="px-6 py-4">
                            {{currency_IDR($data->jumlah_bayar)}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900 dark:text-white">
                        <th scope="row" class="px-6 py-3 text-base">Total</th>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3"></td>
                        <td class="px-6 py-3">
                        @foreach ($siswa as $data)
                            @if($total > $data->spp->nominal)
                            <span class="text-green-600"> Lunas</span> {{currency_IDR($total)}}
                            @else
                                <span class="text-red-600"> Belum Lunas</span> {{ currency_IDR($total)}} 
                                <p>Kurang:  {{currency_IDR($data->spp->nominal * $data->spp->tahun - $total)}} </p>
                            @endif
                        @endforeach
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    @endif
    </div>
</div>