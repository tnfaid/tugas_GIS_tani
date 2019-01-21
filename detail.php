      <?php 
      $id = $_GET['id'];
      include_once "ambildata_id.php";
      $obj = json_decode($data);
      $titles="";
      $ids="";
      $kat="";
      $alamat="";
      $kec="";
      $lat="";
      $long="";
      $bibit="";

      foreach($obj->results as $item){
        $bibit.=$item->bibit_padi;
        $ids.=$item->id_lahan;
        $titles.=$item->nama_lahan;
        $alamat.=$item->alamat;
        $kec.=$item->kecamatan;
        $long.=$item->longtitude;
        $lat.=$item->latitude;
      }

      $title = "Detail dan Lokasi : ".$titles;
      ?>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa7Yh4cXFSkkBjm9ReG0GNlV8vrzGKqb4&callback=initMap"></script>

      <script>

          function initialize() {
            var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
            var mapOptions = {
              zoom: 10,
              center: myLatlng
            };



            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
                '<div id="bodyContent">'+
                '<p><?php echo $alamat ?></p>'+
                '</div>'+
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Maps Info',
                icon:'img/location1.png'
            });
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
            });
          }


          google.maps.event.addDomListener(window, 'load', initialize);

      </script>

      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <div class="img-fluid" id="map-canvas" style="width:100%;height:400px;"></div>
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">                    
                  <div class="panel-body mb-0 text-white-50">
                   <table class="table">
                     <tr>
                       <h2>Detail</h2>
                     </tr>
                     <tr>
                       <td>Nama Lahan</td>
                       <td><?php echo $alamat ?></td>
                     </tr>
                     <tr>
                       <td>Jenis Bibit</td>
                       <td><?php echo $bibit ?></td>
                     </tr>
                     <tr>
                       <td>Alamat</td>
                       <td><?php echo $alamat ?></td>
                     </tr>
                     <tr>
                       <td>Longitude</td>
                       <td><?php echo $long ?></td>
                     </tr>
                     <tr>
                       <td>Latitude</td>
                       <td><?php echo $lat ?></td>
                     </tr>
                     <tr>
                       <td>Kecamatan</td>
                       <td><?php echo $kec ?></td>
                     </tr>
                   </table>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

<br>
<br>





