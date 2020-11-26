<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VAS Gallery || Laporan Data User</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/user.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <center>
            <h5>Laporan Data User</h5>
        </center>
        <br>
        @php $i=1 @endphp
        @foreach($user as $u)
        <div class="card" style="width:400px">
            <div class="card-header bg-info">
                <h5>User {{ $i++ }}<h5>
            </div>
            <div class="card-body">
                <img class="card-img-top" src="{{'storage/'.$u->foto}}" alt="">
            </div>
            <div class="card-footer">
                <p>Nama  : {{$u->name}} <br>
                   Email : {{$u->email}} <br>
                   Roles :{{$u->roles}}</p>
            </div>
        </div>
        @endforeach
    
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
