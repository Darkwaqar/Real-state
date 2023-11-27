@php
    use Illuminate\Support\Facades\Auth;
@endphp
@if (isset($properties) && isset($properties['community']))
    <?php
    $userId = Auth::check() ? Auth::user()->id : null;
    $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $propertiesPerPage = 40;
    $startIndex = ($current_page - 1) * $propertiesPerPage;
    $propertiesArray = $properties['community']->toArray(); // Convert collection to an array
    $totalPages = ceil(count($propertiesArray) / $propertiesPerPage);
    ?>

    <div class="row my_searchProperty" id="searchResultProperty">
        @php
            $propertiesToShow = array_slice($propertiesArray, $startIndex, $propertiesPerPage);
        @endphp
        @if (!empty($propertiesToShow))
            @for ($i = 0; $i < 40; $i++)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 custom_mediumCol"
                    style="padding-left: 5px; padding-right: 5px; margin-bottom:40px; ">
                    <div class="card">
                        <div style="height:250px;width:600px;" class="card-img skeleton"></div>
                        <div class="card-body">
                            <h2 class="card-title skeleton"></h2>
                            <p class="card-intro skeleton"></p>
                        </div>
                    </div>
                </div>
            @endfor
        @else
            <div class="mt-2 col-12 text-center">
                <h4>No properties found in this category</h4>
            </div>
        @endif
    </div>

    <div id="paginationContainer" class="text-center">
        <ul class="pagination " style="margin-bottom: 10px">
            @for ($i = 1; $i <= $totalPages; $i++)
                @if ($i === $current_page)
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0);"
                            data-page="{{ $i }}">{{ $i }}</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);"
                            data-page="{{ $i }}">{{ $i }}</a>
                    </li>
                @endif
            @endfor
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var userId = <?php echo json_encode($userId); ?>;
            var totalPages = <?php echo $totalPages; ?>;
            var propertiesPerPage = <?php echo $propertiesPerPage; ?>;


            function showProperties(pageNumber) {
                var startIndex = (propertiesPerPage * pageNumber) - propertiesPerPage;
                var endIndex = startIndex + propertiesPerPage;
                var propertiesToShow = <?php echo json_encode($propertiesArray); ?>;


                var propertiesHTML = '';
                propertiesToShow.slice(startIndex, endIndex).forEach(function(property) {
                    var url = '{{ route('home.property-detail', ':id') }}';
                    url = url.replace(':id', property.id);
                    const structureTypeName = (property.structure_type.length > 0) ? property
                        .structure_type[0].StructureTypeName : "Not Available";
                    var hoursAgo = getTimeSinceCreation(property.created_at);

                    propertiesHTML +=
                        '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 custom_mediumCol propertyBox prp_div_' +
                        property.id + '}" data-lat="' + property.PropertyLatitude + '" data-lng="' +
                        property.PropertyLongitude + '" data-price="' + property.PropetySellPrice + '">';
                    propertiesHTML += '<div class="feature-block">';
                    propertiesHTML +=
                        `<div id=prp_${property.id} class="feature-block-one prp_${property.id} feature_block_two rmv-border"> `;
                    propertiesHTML += `<a target="_blank" id="href_${property.id}" href="${url}">`;

                    // Image box
                    propertiesHTML += '<div class="inner-box">';
                    propertiesHTML += '<div class="image-box">';
                    if (property.preffered_media && property.preffered_media.length > 0) {

                        propertiesHTML += '<figure class="image"><img src="' + property.preffered_media[0]
                            .s3buckettempurl + '" alt=""></figure>';
                    }

                    if (property.PropetySellPrice > 1000000) {
                        propertiesHTML += '<span class="category">ARIS360 Premier</span>';
                    }
                    if (property.PublishStatus && property.PublishStatus !== '') {
                        propertiesHTML += '<span class="category2">' + property.PublishStatus + '</span>';
                    }

                    if (hoursAgo != '') {
                        propertiesHTML += '<span class="category4"> NEW ' + hoursAgo + '</span>';
                    }
                    propertiesHTML += '</a>';
                    propertiesHTML += '</div>';

                    // Lower content
                    propertiesHTML += '<div class="lower-content">';
                    propertiesHTML += '<div class="price-info custom_price_info">';
                    propertiesHTML += '<h4 class="mt-2">$ ' + property.PropetySellPrice.toLocaleString() +
                        '</h4>';
                    propertiesHTML += '<div class="fav_and_share">';
                    propertiesHTML += '<div class="share_onlyIcon">';
                    propertiesHTML += '<ul class="other-option feat_fav pull-right clearfix">';
                    if (userId) {
                        propertiesHTML += '<li>';
                        propertiesHTML += '<button id="shrBtnListed' + property.id + '"';
                        propertiesHTML += ' data-id="' + property.id + '"';
                        propertiesHTML += ' data-text="' + property.id + '"';
                        propertiesHTML += ' data-user="' + userId + '"';
                        propertiesHTML += ' href="javascript:;"';
                        propertiesHTML += ' data-toggle="modal"';
                        propertiesHTML += ' data-target="#shareModal"';
                        propertiesHTML += ' class="formShare">';
                        propertiesHTML += '<i class="far fa-share"></i>';
                        propertiesHTML += '</button>';
                        propertiesHTML += '</li>';
                    } else {
                        propertiesHTML += '<li>';
                        propertiesHTML +=
                            '<button class="shrNotLoggedIn"><i class="far fa-share"></i></button>';
                        propertiesHTML += '</li>';
                    }
                    propertiesHTML += '</ul>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '<div class="fav_onlyIcon">';
                    if (userId) {
                        if (property.favorite_property && property.favorite_property.length > 0 && property
                            .favorite_property[0].is_fav === 1 && property.favorite_property[0].user_id ===
                            userId) {
                            propertiesHTML += '<ul class="other-option feat_fav pull-right clearfix">';
                            propertiesHTML += '<li>';
                            propertiesHTML += '<button id="favBtnListed' + property.id + '"';
                            propertiesHTML += ' data-id="' + property.id + '"';
                            propertiesHTML += ' data-text="' + property.id + '"';
                            propertiesHTML += ' class="formFavourite skzfavx">';
                            propertiesHTML += '<i class="fas fa-heart"></i>';
                            propertiesHTML += '</button>';
                            propertiesHTML += '</li>';
                            propertiesHTML += '</ul>';
                        } else {
                            propertiesHTML += '<ul class="other-option feat_fav pull-right clearfix">';
                            propertiesHTML += '<li>';
                            propertiesHTML += '<button id="favBtnListed' + property.id + '"';
                            propertiesHTML += ' data-id="' + property.id + '"';
                            propertiesHTML += ' data-text="' + property.id + '"';
                            propertiesHTML += ' class="formFavourite">';
                            propertiesHTML += '<i class="far fa-heart"></i>';
                            propertiesHTML += '</button>';
                            propertiesHTML += '</li>';
                            propertiesHTML += '</ul>';
                        }
                    } else {
                        propertiesHTML += '<ul class="other-option feat_fav pull-right clearfix">';
                        propertiesHTML += '<li>';
                        propertiesHTML +=
                            '<button class="favNotLoggedIn"><i class="far fa-heart"></i></button>';
                        propertiesHTML += '</li>';
                        propertiesHTML += '</ul>';
                    }
                    propertiesHTML += '</div>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '<div>';
                    propertiesHTML +=
                        '<ul class="more-details custom_price_infoDetails bedDetail mt-2 clearfix">';
                    propertiesHTML += '<li>' + property.Bedrooms + ' Beds</li>';
                    propertiesHTML += '<li>' + property.BathroomsFull + ' Baths</li>';
                    propertiesHTML += '<li>' + property.PropertyArea + ' sq. ft</li>';
                    propertiesHTML += '</ul>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '<div class="title-text">';
                    propertiesHTML +=
                        '<h5><a href="{{ route('home.property-detail', ['id' => "' + property.id + '"]) }}">' +
                        property.PropertyAddress + '</a></h5>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '<div class="listing_key_section">';
                    propertiesHTML += '<ul>';
                    propertiesHTML += '<li>';
                    propertiesHTML += '<span class="text-danger">Property Category:</span>';
                    propertiesHTML += '</li>';
                    propertiesHTML += '<li>';
                    if (property.PropetySellPrice > 1000000) {
                        propertiesHTML += '<p>Premier Properties</p>';
                    } else {
                        propertiesHTML += '<p>' + structureTypeName + '</p>';
                    }
                    propertiesHTML += '</li>';
                    propertiesHTML += '</ul>';
                    propertiesHTML += '</ul>';
                    propertiesHTML += '<small>Listing provided by NWMLS</small>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '</a>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '</div>';
                    propertiesHTML += '</div>';
                });

                $('#searchResultProperty').html(propertiesHTML);

                $(".propertyBox").hover(function() {
                    HoverPropertyLatitude = $(this).data("lat");
                    HoverPropertyLongitude = $(this).data("lng");
                    PropertySellPrice = $(this).data("price");
                    addMarker(HoverPropertyLatitude, HoverPropertyLongitude, PropertySellPrice);
                }, function() {
                    removeMarker();
                });

                function addMarker(lat, lng, price) {
                    const label = Math.abs(price) >= 1000000 ?
                        '$' + Math.abs(price / 1000000).toLocaleString(undefined, {
                            minimumFractionDigits: 0
                        }) + "M" :
                        Math.abs(price) >= 1000 ?
                        '$' + Math.abs(price / 1000).toLocaleString(undefined, {
                            minimumFractionDigits: 0
                        }) + "k" :
                        '$' + Math.abs(price).toLocaleString();

                    const locationCoordinates = {
                        lat: lat,
                        lng: lng
                    };
                    const newMarker = new google.maps.Marker({
                        map: map,
                        position: locationCoordinates,
                        label: {
                            text: label,
                            color: "#fff",
                            // fontWeight: "500",
                            fontSize: "10.5px"
                        },
                        icon: {
                            url: '{{ asset('public/assets/images/marker-wide-img_green.png') }}',
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28),
                        },
                    });

                    markers.push(newMarker);
                }

                function removeMarker() {
                    if (markers.length > 0) {
                        const lastMarker = markers.pop(); // Get the last marker from the array
                        lastMarker.setMap(null); // Remove the marker from the map
                    }
                }

            }



            showProperties(<?php echo $current_page; ?>);

            $('#paginationContainer').on('click', 'a', function(e) {
                e.preventDefault();

                // Remove 'active' class from the previous active pagination item
                $('#paginationContainer .page-item.active').removeClass('active');

                var page = $(this).data('page');
                showProperties(page);

                // Add 'active' class to the newly clicked pagination item
                $(this).parent('.page-item').addClass('active');

                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
        });
    </script>
@endif
