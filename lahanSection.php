<div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <!-- <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">   -->
            <div class="row">
             
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong>  Data Lahan Pertanian  </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin centered panel panel-info panel-dashboard centered ">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="15%">Nama Lahan</th>
                  <th width="10%">Jenis Bibit</th>
                  <th width="13%">Alamat</th>
                  <th>Kecamatan</th>
                  <th width="13%">Longitude</th>
                  <th width="13%">Latitude</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/gis_tani/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item)
                {
              ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $item->nama_lahan; ?></td>
                      <td><?php echo $item->bibit_padi; ?></td>
                      <td><?php echo $item->alamat; ?></td>
                      <td><?php echo $item->kecamatan; ?></td>
                      <td><?php echo $item->latitude; ?></td>
                      <td><?php echo $item->longtitude; ?></td>
                      <td class="ctr">
                        <div class="btn-group">
                          <a target="_blank" href="detail.php?id=<?php echo $item->id_lahan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                          <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                        </div>
                      </td>
                  </tr>
                   <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
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
              <!-- <h4>Cari Lokasi</h4>
              <p class="text-black-50 mb-0">Lokasi Area ditunjukkan dengan adanya peta yang dapat diakses dengan menggunakan google maps</p> -->

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
                  <h4 class="text-white">Jenis Padi</h4>
                  <p class="mb-0 text-white-50">Terdapat berbagai macam jenis padi yang sering digunakan oleh petani antara lain yaitu Intani 1 dan 2, PP1, H1, Bernas Prima, Rokan, SL 8 dan 11 SHS, Segera Anak, SEMBADA B3, B5, B8 DAN B9,  Hipa4, Hipa 5 Ceva, Hipa 6 Jete, Hipa 7, Hipa 8, Hipa 9, Hipa 10, Hipa 11, Long Ping (pusaka 1 dan 2), Adirasa-1, Adirasa-64,  Hibrindo R-1, Hibrindo R-2, Manis-4 dan 5, MIKI-1,2,3, SL 8 SHS, SL 11 HSS, Maro dll.</p>
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
                  <h4 class="text-white">Malang</h4>
                  <p class="mb-0 text-white-50">Kabupaten Malang terletak pada 112 035`10090`` sampai 112``57`00`` Bujur Timur 7044`55011`` sampai 8026`35045`` Lintang Selatan. Kabupaten Malang berbatasan dengan Kota Malang tepat di tengah-tengahnya, Kabupaten Jombang, Kabupaten Pasuruan; dan Kota Batu di sebelah utara, Kabupaten Probolinggo dan Kabupaten Lumajang di sebelah timur, Kabupaten Blitar dan Kabupaten Kediri di sebelah barat, serta Samudra Hindia di sebelah selatan.
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>
