<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3 align="center">Data Product</h3>
    
    <table border="1" cellpadding="10" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Price</th>
            <th>Stok</th>
            <th>Nama Toko</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($product as $prod)
        <tr>
            <td>{{$no}}</td>
            <td>{{$prod->nama}}</td>
            <td>{{$prod->jenis}}</td>
            <td>{{$prod->price}}</td>
            <td>{{$prod->stok}}</td>
            <td>{{$prod->penjual->nama_toko}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>