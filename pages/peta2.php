<?php
$title = "Peta Penyedia Jasa Web";
include_once "header.php";
?>
<?php
$title = "Peta Penyedia Jasa Web";
include_once "header.php";
?>

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
                  var alunalun = {lat: -7.9834408, lng: 112.6323622};
                  var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 17,
                      center: alunalun
                  });

                  var marker = new google.maps.Marker({
                    position : alunalun,
                    map : map
                  });
                  }
              </script>
              <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa7Yh4cXFSkkBjm9ReG0GNlV8vrzGKqb4&callback=initMap">

            </script>


            </div>
          </div>
        </div>
        </div>
<?php include_once "footer.php"; ?>
  <?php include_once "footer.php"; ?>