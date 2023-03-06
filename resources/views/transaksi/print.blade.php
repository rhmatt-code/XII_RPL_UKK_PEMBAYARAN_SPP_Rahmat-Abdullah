<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{secure_asset ('css/style.css')}}"> 
    <link rel="stylesheet" href="{{secure_asset ('css/uikit.css')}}">
    <link rel="stylesheet" href="{{secure_asset ('css/bootstrap.css')}}"> 
</head>
<body onload="window.print()">
    <h1>Laporan Pembayaran SPP</h1>
    <p>Dari Tanggal: <b>{{request()->start_date}}</b></p>
    <p>Sampai Tanggal: <b>{{request()->end_date}}</b></p>
    <br>
    <br>
    <table class="display w-full text-sm text-left table text-gray-500 dark:text-gray-400" >
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
</body>
</html>