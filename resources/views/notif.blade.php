<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Notify</title>
    <style>
        body {
            background-color:#bdc3c7;
            margin:0;
        }
        .card {
            background-color:#fff;
            padding:20px;
            margin:20%;
            text-align:center;
            margin:0px auto;
            width: 580px; 
            max-width: 580px;
            margin-top:10%;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .garis {
            width: 75%;
        }
        
    </style>
</head>
<body>
    <div class="card">
        <h3 class="">Terimakasih Sudah Mendaftar Pemesanan{{$nama}}</h3>
        <hr class="garis">
        <div>
            <table class= "table">
            <tr>
                <th scope="col">No KTP{{$no_ktp}}</th>
                <th scope="col">Proyek{{$proyek}}</th>
                <th scope="col">Tipe{{$tipe}}</th>
                <th scope="col">Tanggal Pemesanan{{$created_at}}</th>
                </tr>
            </table>
        </div>
        <h4>Silahkan lengkapi persyaratan booking untuk konfrimasi pemesanan</h4>
    </div>
</body>
</html>