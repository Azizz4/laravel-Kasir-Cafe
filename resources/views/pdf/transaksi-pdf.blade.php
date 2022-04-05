<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>
<body>
    <h1 style="text-align:center">Laporan ygy</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Nama Menu</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Nama Pegawai</th>
                <th>Tanggal transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $d)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$d->nama_pelanggan}}</td>
                <td>{{$d->nama_menu}}</td>
                <td>{{number_format($d->jumlah)}}</td>
                <td>{{number_format($d->total_harga)}}</td>
                <td>{{$d->nama_pegawai}}</td>
                <td>{{$d->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>