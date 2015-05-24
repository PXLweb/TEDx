

<!DOCTYPE html>
<html>
    <head>

        <title><?php echo basename(__FILE__); ?></title>
        <meta charset="utf-8">
        <style type="text/css">
            .calendar{
                font-family: Arial;
                font-size: 12px;

            }
            table.calendar{
                margin: auto;
                border-collapse: collapse;
            }
            .calendar .days td{
                width: 80px;
                height: 80px;
                padding: 4px;
                border: 1px solid #999;
                vertical-align: top;
                background-color: #DEF;
            }
            .calendar .days td:hover
            {
                background-color: #FFF;

            }
            .calendar .highlight {
                font-weight: bold;
                color: red;
            }
            html, body, #map-canvas  {
                margin: 0;
                padding: 0;
                height: 100%;
            }

            #map-canvas {
                width:500px;
                height:480px;
            }

        </style>  
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
        <script>
            var geocoder;
            var map;
            var marker;
            function initialize() {
                geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(50.93, 5.33);
                marker = new google.maps.Marker({
                    position: latlng
                });
                var mapOptions = {
                    zoom: 8,
                    center: latlng
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            }

            function codeAddress() {
                var address = document.getElementById('location').value;
                geocoder.geocode({'address': address}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        map.setCenter(results[0].geometry.location);
                        marker.setMap(null);
                        marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert('locatie bestaat niet');
                    }
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

    </head>
    <body>  
        <?php echo $calendar; ?>

        <script type="text/javascript">
            function getDate()
            {
                var query = window.location.href;
                var vars = query.length;
                var month;
                var year;
                if (vars === 44)
                {
                    var str = query.substring(37);
                    var varp = str.split("/");
                    year = varp[0];
                    month = varp[1];
                } else
                {
                    month = "05";
                    year = "2015";
                }
                return year + "-" + month;

            }

            $(document).ready(function ()
            {

                $('.calendar .day').click(function () {
                    day_num = $(this).find('.day_num').html();

                    document.getElementById('datum').value = getDate() + '-' + day_num;


                    $('#myModal').modal('toggle');

                });
            });
        </script>


        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-body">
                        <div>
                            <?php
                            echo form_open('events/getData', [
                                'class' => 'form-signin',
                                'role' => 'form',
                                'id' => 'myForm'
                            ]);
                            ?> 

                            <input name="my_id" id="datum" type="text" value="Datum variable van post" />
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Ok</button>


                        </div><!--end form-->
                        <div id="map-canvas" style="width:500px;height:180px;" ></div>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    <div class="modal-footer">   
                    </div>
                </div> 
            </div>
        </div>





    </body>
</html>