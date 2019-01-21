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
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="15%">Nama perusahaan</th>
                  <th width="13%">Longitude</th>
                  <th width="13%">Latitude</th>
                  <th width="10%">Kategori</th>
                  <th width="13%">Kota</th>
                  <th>Jenis Bibit</th>
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
                      <td><?php echo $item->nama_perusahaan; ?></td>
                      <td><?php echo $item->longitude; ?></td>
                      <td><?php echo $item->latitude; ?></td>
                      <td><?php echo $item->kategori; ?></td>
                      <td><?php echo $item->kota; ?></td>
                      <td><?php echo $item->provinsi; ?></td>
                      <td class="ctr">
                        <div class="btn-group">
                          <a target="_blank" href="detail.php?id=<?php echo $item->id_perusahaan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
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

        

      </div>