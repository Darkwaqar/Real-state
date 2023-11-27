<style>
    .gm-style-iw-d {
        overflow: auto !important;
    }

    .gm-ui-hover-effect {
        display: none !important;
    }

    .gm-style .gm-style-iw-c {
        padding: 0px !important
    }
</style>



<!-- Script for Map -->
<script>
    function myMap() {

        var locations = ` <div class="feature-block">

            <div class="feature-block-one mb-0">

                <div class="inner-box map_card">

                    <div class="image-box">

                        <figure class="image"><img src="assets/images/properties/property1.jpg" alt="">
                        </figure>
                    </div>

                    <div class="lower-content pt-4 pb-0">





                        <div class="price-box mb-3 d-flex justify-content-between align-items-center">

                            <div class="price-info pull-left">



                                <h4>$45,000.00</h4>

                            </div>

                            <ul class="other-option pull-right clearfix">

                                <li><a href="#"><i class="icon-12"></i></a></li>

                                <li><a href="#"><i class="icon-13"></i></a></li>

                            </ul>

                        </div>



                        <ul class="more-details clearfix mb-2">

                            <li><i class="icon-14"></i>3 Beds</li>

                            <li><i class="icon-15"></i>2 Baths</li>

                            <li><i class="icon-16"></i>600 Sq Ft</li>

                        </ul>

                        <p> 8950 Melbourne Dr, Colorado Springs, CO 80920</p>



                    </div>

                </div>

            </div>

        </div>`;



        var data = [
            {
                s_no: '1',
                position: { lat: 32.954430818373176, lng: -96.84920783449174 },
                content: locations,
                iconImage: {
                    scaledSize: new google.maps.Size(30, 30),
                }
            }
            ,
            {
                s_no: '2',
                position: { lat: 32.956515733245226, lng: -96.88723130014336 },
                content: locations,
                iconImage: {
                    // url: "https://icon-library.com/images/view-map-icon/view-map-icon-24.jpg",
                    scaledSize: new google.maps.Size(30, 30),
                }
            }
        ];


        var mapProp = {
            center: { lat: 32.954430818373176, lng: -96.84920783449174 },
            zoom: 14,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);


        var infoWindow = new google.maps.InfoWindow({
            maxWidth: 320
        });


        for (let i = 0; i < data.length; i++) {

            addmarker(data[i]);
        }


        function addmarker(props) {

            var marker = new google.maps.Marker({
                position: props.position,
                map: map,
            });

            if (props.content) {

                // click on marker icon
                marker.addListener('click', function () {
                    infoWindow.setContent(props.content);
                    infoWindow.open(googleMap, marker);
                });

            }

            // if data has own icon
            if (props.iconImage) {
                marker.setIcon(props.iconImage);
            }

            // if map drag
            map.addListener('drag', function () {

            });

            // if map drag
            map.addListener('click', function () {
                infoWindow.close(googleMap, marker);
            });



        }
    }

</script>