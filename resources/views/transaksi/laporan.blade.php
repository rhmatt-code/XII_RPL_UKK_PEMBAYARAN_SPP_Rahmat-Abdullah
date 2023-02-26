@extends('layouts.datatable')

@include('layouts.navbar')

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 shadow-xl rounded-lg dark:border-gray-700">
        
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            <div class="flex mb-2">
                  <svg class="mr-2 flex-shrink-0 w-8 h-8 text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm7.75 9.75a.75.75 0 000-1.5h-4.5a.75.75 0 000 1.5h4.5z"></path>
                  </svg>
                <h4 class="font-bold">Laporan</h4>
            </div>
        </caption>
        <div class="relative overflow-x-auto h-auto w-auto ">
            <table class="w-full text-sm text-left table text-gray-500 dark:text-gray-400" id="table">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Siswa
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bulan Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Dibayar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Id SPP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nominal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $data)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$data->nisn}}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->siswa->nama}}
                        </td>
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
                            {{$data->id_spp}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->jumlah_bayar}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

