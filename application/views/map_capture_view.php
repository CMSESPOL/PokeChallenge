<?php
    $base_url = $this->config->item('base_url');
    $resources = $this->config->item('resources');
?>

      <style>
        #map-canvas {
          width:100%;
          height:calc(100% - 0);
          position:absolute;
          right:0px;
          top:50px;
          bottom:0;
          overflow:hidden;
        }
      </style>


      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
      <script>
        var latitude;
        var longitude;
        var map,marker;
        var flag = true;

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
          latitude = position.coords.latitude;
          longitude = position.coords.longitude;

          if(flag)
            initializeMap();
        }

        function initializeMap() {

          var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(latitude, longitude)
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);


          marker = new google.maps.Marker({
              position: new google.maps.LatLng(latitude, longitude),
              map: map,
              title: 'I\'m Groot!'
          });

          flag = false;




        }

        google.maps.event.addDomListener(window, 'load', getLocation);
      </script>

      <div class="container-fluid">
      <div class="row">
        <div id="map-canvas"></div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $resources;?>plugins/bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo $resources;?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--script src="./Dashboard Template for Bootstrap_files/docs.min.js"></script-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script-->
    </body>
</html>
