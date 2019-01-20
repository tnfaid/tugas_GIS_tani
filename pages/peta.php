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
<?php include_once "footer.php"; ?>