<!DOCTYPE html>
<html>
<head>
    <title>Latihan view 02</title>
</head>
<body>

    <h2><b>Isi Table Produk</b></h2>
    <table border='1'>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Jenis</th>
            <th>Nama Produk</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>
    </thead>
    <tbody>
    @foreach($produk as $i=>$p)
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$p->id_kat}}</td>
        <td>{{$p->namaproduk}}</td>
        <td>{{$p->qty}}</td>
        <td>{{$p->harga_beli}}</td>
        <td>{{$p->harga_jual}}</td>
    </tr>
    @endforeach
    </tbody>

    </table>

</body>
</html>