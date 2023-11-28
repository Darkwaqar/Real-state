<!-- Script for Map -->
<script>
    function featuredMap() {
  
  
            var data = [
              @foreach($properties['FeturedProperties'] as $property)
              {
                  s_no: {{$property->id}},
                  position: { lat:{{$property->PropertyLatitude}}, lng:{{$property->PropertyLongitude}} },
                  
                  content:`<div class="feature-block">
                              <div class="feature-block-one mb-0">
                                  <div class="inner-box map_card">                                   
                                      <div class="lower-content pt-4 pb-0">
                                          <div class="price-box mb-3 d-flex justify-content-between align-items-center">
                                              <div class="price-info pull-left">
                                                  <h4>${{$property->PropetySellPrice}}</h4>
                                              </div>
                                              <ul class="other-option pull-right clearfix">
                                                  <li><a href="#"><i class="icon-12"></i></a></li>
                                                  <li><a href="#"><i class="icon-13"></i></a></li>
                                              </ul>
                                          </div>
                                          <ul class="more-details clearfix mb-2">
                                              <li><i class="icon-14"></i>${{$property->Bedrooms}} Beds</li>
                                              <li><i class="icon-15"></i>${{$property->BathroomsFull}} Baths</li>
                                              <li><i class="icon-16"></i>${{$property->PropertyArea}} ${{$property->PropertyAreaUnits}}</li>
                                          </ul>
                                          <p> ${{$property->PropertyAddress}}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>`,
  
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
    }
  
  </script>
  
  
  
  <div id="googleMap"></div>
  
  
  <!-- main-js -->
  
  
  
  
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXxZfe3ydEUow5-Qa0S69FEddWOj-ut2k&callback=https://maps.googleapis.com/maps/api/js?key=AIzaSyBXxZfe3ydEUow5-Qa0S69FEddWOj-ut2k&callback=featuredMap"></script>