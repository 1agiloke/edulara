<!-- views/login.ejs -->
<!doctype html>
<html>

<head>
    <% include ../partials/header.ejs %>
        <style>
            body {
                padding-top: 80px;
            }
        </style>
</head>
<% include ../partials/script.ejs %>
     <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCqyHnFl67BB_SNzzypnd35t7rAXP0pCTQ&libraries=places"></script>
    <script>
        var source, destination;
        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        google.maps.event.addDomListener(window, 'load', function () {
            new google.maps.places.SearchBox(document.getElementById('txtSource'));
            //            new google.maps.places.SearchBox(document.getElementById('txtDestination'));
            directionsDisplay = new google.maps.DirectionsRenderer({
                'draggable': true
            });
        });

        function GetRoute() {
            var medan = new google.maps.LatLng(3.5951956, 98.6722227);
            var mapOptions = {
                zoom: 10
                , center: medan
            };
            map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
            directionsDisplay.setMap(map);
            directionsDisplay.setPanel(document.getElementById('dvPanel'));
            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("txtSource").value;
            //            destination = document.getElementById("txtDestination").value;
            destination = "Jl. Bahagi, Cinta Damai, Medan City, North Sumatra, Indonesia";
            var request = {
                origin: source
                , destination: destination
                , travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source]
                , destinations: [destination]
                , travelMode: google.maps.TravelMode.DRIVING
                , unitSystem: google.maps.UnitSystem.METRIC
                , avoidHighways: false
                , avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration.text;
                    var dvDistance = document.getElementById("dvDistance");
                    dvDistance.innerHTML = "";
                    dvDistance.innerHTML += "Distance: " + distance + "<br />";
                    dvDistance.innerHTML += "Duration:" + duration;

                } else {
                    alert("Unable to find the distance via road.");
                }
            });
        }
    </script>

    <body>
        <div id="navbar-full">
            <div id="navbar">
                <% include ../partials/nav.ejs %>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <h2>Cek Lokasi</h2>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Lokasi Anda</label>
                        <input type="text" class="form-control" id="txtSource" name="username">
                    </div>

                </div>
            </div>
            <div class="col-md-12" style="margin-bottom:10px;">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-flat btn-default hijau form-control" onclick="GetRoute()">Cek Rute</button>
                </div>
                 <div class="col-md-2">
                    <a href="/donasibarang" class="btn btn-flat btn-default  form-control">Kembali</a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div id="dvMap" style="height:500px;"></div>
                </div>
                <div class="col-md-6">
                    <div id="dvPanel" style="height:500px;overflow:auto;"></div>

                </div>
            </div>
            <div id="dvDistance" style="margin-bottom:10px;"></div>

        </div>
        <% include ../partials/footer.ejs %>

    </body>

</html>
