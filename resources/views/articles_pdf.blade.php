<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laporan PDF dengan DOMPDF Laravel</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <center>
            <h5>Laporan Data Artikel</h5>
        </center>
        <br>

        <table class="table-bordered table-striped">
            <thead>
                <tr class="table-secondary">
                    <th width="20">No</th>
                    <th width="30">Nama</th>
                    <th width="100">Keterangan</th>
                    <th width="150">Gambar</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($brand as $b)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->keterangan}}</td>
                    <td><img width="150" src="{{'storage/'.$b->gambar}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>