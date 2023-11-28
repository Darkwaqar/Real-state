<!-- Script for Map -->
<script>
    function myMap() {


            var data = [
              @foreach ($agentlistings as $property)
              {
                  s_no: {{$property->id}},
                  position: { lat:{{$property->PropertyLatitude}}, lng:{{$property->PropertyLongitude}} },

                  content:`
                  <div class="feature-block">
          <div class="feature-block-one">
              <div class="inner-box">
                  <div class="image-box">
                      <a href="{{ route('home.property-detail', ['id' => $property->id]) }}"></a>
                      <span class="category">Active</span>
                  </div>
                  <div class="lower-content mb-2 pb-0">
                      <div class="price-info custom_price_info">
                          <h6 class="mt-2">$ ${{number_format($property->PropetySellPrice)}}</h6>
                      </div>
                      <div>
                          <ul class="more-details custom_price_infoDetails map_sect_moreDetail mt-2 mb-0 clearfix">
                              <li> ${{$property->Bedrooms}} Beds</li>
                              <li> ${{$property->BathroomsFull}} Baths</li>
                              <li> ${{$property->PropertyArea}}+ '' ${{$property->PropertyAreaUnits}}</li>
                          </ul>
                      </div>
                      <div class="title-text">
                          <p class="mb-0"><a href="#">{{$property->PropertyAddress}}</a></p>
                      </div>
                      <div class="listing_key_section">
                          <ul>
                              <li>
                                  <p>#{{$property->ListingKeyNumeric}}</p>
                              </li>
                              <li>
                                  <p>House</p>
                              </li>
                              <li>
                                  <img src="public/assets/images/NWMLS2.jpeg" class="img-fluid">
                              </li>
                          </ul>
                      </div>
                      <p class="mt-2 mb-0">Listing Firm: Windermere RE West Sound Inc.</p>
                  </div>

              </div>

          </div>



      </div>
                  `,

                  iconImage: {
                      scaledSize: new google.maps.Size(30, 30),
                  }
              },
              @endforeach
            ];

      var mapProp = {
        center: { lat:  47.612235, lng: -122.345191 },
        zoom: 8,
      };
      var map = new google.maps.Map(
        document.getElementById("googleMap"),
        mapProp
      );

      var infoWindow = new google.maps.InfoWindow({
        maxWidth: 360,
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
          marker.addListener("click", function () {
            infoWindow.setContent(props.content);
            infoWindow.open(googleMap, marker);
          });
        }

        // if data has own icon
        if (props.iconImage) {
          marker.setIcon(props.iconImage);
        }

        // if map drag
        map.addListener("drag", function () {});

        // if map drag
        map.addListener("click", function () {
          infoWindow.close(googleMap, marker);
        });
      }

      var autocomplete;

         var search6 = document.getElementById('search');

             autocomplete = new google.maps.places.Autocomplete(
                 /** @type {!HTMLInputElement} */
                 (search6), {
                     types: ['geocode']
             });
    }

  </script>



  <div id="googleMap"></div>


  <!-- main-js -->





  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=myMap" defer></script>
