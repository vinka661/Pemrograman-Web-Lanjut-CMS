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
            <h5>Laporan Data User</h5>
        </center>
        <br>

        <table class="table-bordered table-striped">
            <thead>
                <tr class="table-secondary">
                    <th width="20">No</th>
                    <th width="30">Nama</th>
                    <th width="100">Email</th>
                    <th width="300">Roles</th>
                    <th width="350">Foto</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($user as $u)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->roles}}</td>
                    <td><img width="150" src="{{'storage/'.$u->foto}}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>