<html>

<head>
    <title>Daftar Produk PetShop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>

    <center>
        <h5>Daftar Produk PetShop</h4>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{$product->nama_barang}}</td>
                <td>Rp. {{number_format($product->harga)}}</td>
                <td>{{$product->stock_quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>