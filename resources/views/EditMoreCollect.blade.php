<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VAS Gallery || Halaman Edit Data More Collection</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <font color="white"><h2>VAS GALLERY</h2></font>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/home1')}}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/about')}}"><i class="fas fa-info"></i> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/article')}}"><i class="fas fa-file"></i> Article</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/product')}}"><i class="fas fa-laptop"></i> Collection</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}"><i class="fas fa-address-book"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section bg-dark">
            <font color="white"><h1>FORM EDIT DATA</h1></font>
            <form action="/collect/update/{{$collection->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$collection->id}}">
                <br/>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" required="required" name="nama" value="{{$collection->nama}}">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="merk">Merk</label>
                    <input type="text" class="form-control" required="required" name="merk" value="{{$collection->merk}}">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" required="required" name="keterangan" value="{{$collection->keterangan}}">
                    <br/>
                </div>
                <button type="submit" name="edit" class="btn btn-primary"><i class="fas fa-edit"></i> Ubah Data</button>
                <a class="btn btn-primary" href="{{url('/collect')}}"><i class="fas fa-arrow-left"></i> Kembali</a>
            </form>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
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
