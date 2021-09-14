<html>

<head>
    <title>Daftar User PetShop</title>
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
        <h5>Daftar User PetShop</h4>
        </h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->profil->alamat}}</td>
                <td>{{$user->profil->nomor_hp}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>