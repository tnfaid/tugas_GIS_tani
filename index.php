<?php
  session_start();
    mysql_connect( "localhost", "root", "" );
    mysql_select_db( "database_sistem" ) or die ( "<script>alert('Database tidak di temukan');</script>" );
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GIS Padi Kab.Malang</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistem Informasi Geografis Padi</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#lahan">Data Lahan Pertanian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#peta">Peta Lahan Pertanian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#bibit">Data Bibit</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">GIS PADI</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Sistem Informasi Geografis Persebaran Padi di Area Malang</h2>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
        </div>
      </div>
    </header>

    <!-- peta Section -->
    <section id="peta" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Cari Lokasi :)</h2>
            <p class="text-white-50">Pencarian Lokasi dapat di lihat pada peta yang sudah tersedia data yang ditampilkan. Penandaan lokasi ditandai dengan pola polygon</p>

            <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>

<script>
                  function initMap() {
                  var smp6 = {lat: -8.0177765, lng: 112.6445628};
                  var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 15,
                      center: smp6
                  });

                  var smp6 = {lat: -8.0077765, lng: 112.6445628 };
                  var conkspeed = {lat: -8.0157491, lng: 112.6356273};
                  var gor = {lat: -8.0278302, lng: 112.6422605};
                  var btscoverage = new google.maps.Polygon({
                    path: [smp6,  conkspeed, gor],
                    draggable: true,
                    editable: true, 
                    strokeColor: "#0000F7",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#0000F7",
                    fillOpacity: 0.3
                  });
                  btscoverage.setMap(map);

                  var jaya  = {lat: -7.9732216, lng: 112.5728808 };
                  var rawon = {lat: -7.9824311, lng: 112.5713519};
                  var sumur = {lat: -7.9825907, lng: 112.5816748};
                  var btscoverage = new google.maps.Polygon({
                    path: [jaya,rawon, sumur],
                    draggable: true,
                    editable: true, 
                    strokeColor: "#0000F7",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#0000F7",
                    fillOpacity: 0.3
                  });
                  btscoverage.setMap(map);

                  var kalisongo  = {lat: -7.9578615, lng: 112.5759583};
                  var karangwidoro = {lat: -7.9578615, lng: 112.5759583};
                  var brightown = {lat: -7.95723, lng: 112.5769458};
                  var btscoverage = new google.maps.Polygon({
                    path: [kalisongo,karangwidoro, brightown],
                    draggable: true,
                    editable: true, 
                    strokeColor: "#0000F7",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#0000F7",
                    fillOpacity: 0.3
                  });
                  btscoverage.setMap(map);

                  var smp13  = {lat: -7.9457745, lng: 112.5729957};
                  var grand = {lat: -7.9474674, lng: 112.570357};
                  var behaestex = {lat: -7.9402387, lng: 112.5687596};
                  var btscoverage = new google.maps.Polygon({
                    path: [smp13,grand, behaestex],
                    draggable: true,
                    editable: true, 
                    strokeColor: "#0000F7",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: "#0000F7",
                    fillOpacity: 0.3
                  });
                  btscoverage.setMap(map);


                  }


              </script>
              <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa7Yh4cXFSkkBjm9ReG0GNlV8vrzGKqb4&callback=initMap">

            </script>


            </div>
          </div>
        </div>
        </div>
              <div class="panel-body">
            </div>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
      </div>
    </section>

    <!-- lahan Section -->
    <section id="lahan" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <!-- <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">   -->
            <div class="row">
              <?php
                 $tampil=mysql_query("select * from jasaweb");
              ?>
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>  Data Lahan Pertanian  </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="15%">Nama perusahaan</th>
                  <th width="13%">Longitude</th>
                  <th width="13%">Latitude</th>
                  <th width="10%">Kategori</th>
                  <th width="13%">Kota</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  while ($hasil=mysql_fetch_array($tampil)) 
                  {?>
                    <tr>
                      <td><?php print"$hasil[id_perusahaan]"?></td>
                      <td><?php print"$hasil[nama_perusahaan]"?></td>
                      <td><?php print"$hasil[longitude]"?></td>
                      <td><?php print"$hasil[latitude]"?></td>
                      <td><?php print"$hasil[kota]"?></td>
                      <td><?php print"$hasil[alamat]"?></td>
                      <td class="ctr">
                        <div class="btn-group">
                          <a target="_blank" href="detail.php?id=<?php echo $hasil->id_perusahaan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                          <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                        </div>
                      </td>
                  </tr><?php 
                }?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
          </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Cari Lokasi</h4>
              <p class="text-black-50 mb-0">Lokasi Area ditunjukkan dengan adanya peta yang dapat diakses dengan menggunakan google maps</p>

            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Misty</h4>
                  <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Mountains</h4>
                  <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- bibit Section -->
    <section id="bibit" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">4923 Market Street, Orlando FL</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">hello@yourdomain.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+1 (555) 902-8832</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Your Website 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
