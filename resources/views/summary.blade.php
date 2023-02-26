<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HotelStar - @yield('title')</title>
    <link rel="icon" href="{{ asset("image/logo.jpeg")}}">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
        <div class="uk-section">
            <div class="uk-center">
                <p class="uk-text-bold uk-text-large uk-text-center">Payment SPP</p>
                <p class="uk-text-center"><u class=" uk-text-underline uk-text-large uk-text-center">KWITANSI PEMBAYARAN</u></p>
            </div>
        </div>
    
    <div class="uk-margin-top uk-margin-medium-left">
        <div>
            <div class="uk-margin">
                <span class="uk-text-lead">Tanggal:</span>
                <br>
                <span>{{$transaksi->tgl_bayar}}</span>
            </div>
            <div class="uk-margin">
                <span class="uk-text-lead">Nama Siswa:</span>
                <br>
                <span>{{$transaksi->siswa->nama}}</span>
            </div>
        </div>
         <div class="uk-position-right">
            <div class="uk-margin">
                <span class="uk-text-lead">NISN:</span>
                <br>
                <span>{{$transaksi->nisn}}</span>
            </div>
        </div>
    </div>
    
    
    <div class="uk-margin-top">
        <table class="table">
            <thead>
                <tr>
                    <th>Petugas</th>
                    <th>Bulan Dibayar</th>
                    <th>Tahun Dibayar</th>
                    <th>SPP</th>
                    <th>Jumlah Dibayar</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>{{$transaksi->petugas->nama_petugas}}</td>
                    <td>{{$transaksi->bulan_dibayar}}</td>
                    <td>{{$transaksi->tahun_dibayar}}</td>
                    <td>{{currency_IDR($transaksi->spp->nominal * $transaksi->spp->tahun)}}</td>
                    <td class="uk-text-bold">{{currency_IDR($transaksi->jumlah_bayar)}}</td>
                </tr>
            </tbody>
        </table>
        <div class="uk-text-right">
            <button  class="uk-button uk-button-default uk-button-large uk-text-large uk-background-secondary uk-light" disabled></button>
        </div>
    </div>
    
    <div class="uk-position-relative uk-position-z-index-zero uk-margin-top">
        <div class="uk-padding uk-height-small  uk-text-center" >
            <div class="uk-container uk-margin-top uk-margin-left ">
                <h2>Terima Kasih !!</h2>
            </div>
        </div>
    </div>
</body>
</html>
  