@extends('properties.layouts.main')

@section('content')
    <section class="styled_section">
        <div class="tour_checkout">



            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="c_carousel_wrap">
                            <h1 class="c_title">Pick A Date</h1>
                            <div class="calendarCont">
                                <div class="swiper calender_swiper">
                                    <div class="swiper-wrapper" id="dateSlider">
                                    </div>
                                    <div class="swiper-button-next">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <i class="fas fa-chevron-left"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="c_carousel_wrap">
                            <h1 class="c_title mb-0">Pick a time</h1>
                            <p class="mb-4">Guaranteed agent availability</p>
                            <div class="swiper six_item_swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>
                                    <div class="swiper-slide c_cr_inner_items">
                                        <label for="">
                                            <input type="radio" name="timer_picker">
                                            <p>10:000</p>
                                        </label>
                                    </div>

                                </div>
                                <div class="swiper-button-next">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                                <div class="swiper-button-prev">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c_carousel_wrap mb-5">

                    <button class="theme-btn btn-one">Submit</button>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 c_selected_items">
                        <h3>Homes</h3>
                        <p>1</p>
                    </div>
                    <div class="col-lg-3 c_selected_items">
                        <h3>Date</h3>
                        <p>Thu, Sep 14</p>
                    </div>
                    <div class="col-lg-3 c_selected_items">
                        <h3>Start</h3>
                        <p>-</p>
                    </div>
                    <div class="col-lg-3 c_selected_items">
                        <h3>End</h3>
                        <p>-</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            var startDate = new Date(); // Get the current date
            var endDate = new Date();
            endDate.setDate(startDate.getDate() + 15); // Set the end date as 7 days from the current date

            var currentDate = startDate;
            var dateSlider = $('#dateSlider');

            // Loop through the dates and generate the HTML dynamically
            while (currentDate <= endDate) {
                var dayOfWeek = currentDate.toLocaleDateString('en-US', {
                    weekday: 'long'
                }).toLowerCase();
                var dayOfMonth = currentDate.getDate();
                var month = currentDate.toLocaleDateString('en-US', {
                    month: 'short'
                }).toLowerCase();

                var dateBox = $('<div class="swiper-slide"></div>');
                var label = $('<label class="dateBox"></label>');
                var radio = $('<input id="date_box" type="radio" name="date">').val(currentDate.toISOString().split(
                    'T')[0]);
                var span1 = $('<span>' + dayOfWeek + '</span>');
                var h6 = $('<h6>' + dayOfMonth + '</h6>');
                var span2 = $('<span>' + month + '</span>');

                label.append(radio, span1, h6, span2);
                dateBox.append(label);
                dateSlider.append(dateBox);

                currentDate.setDate(currentDate.getDate() + 1); // Move to the next date
            }

            // Initialize the swiper slider
            var swiper = new Swiper('.calenderSwiper', {
                slidesPerView: 3,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            // Event handler for Schedule Now button
            //   $('.schedule_now').on('click', function() {
            //     var selectedDate = $('input[name="date"]:checked').val();
            //         console.log('Selected date:', selectedDate);
            //   });
        });

        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,

                nav: true,
                dots: false,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: true
                    },
                    600: {
                        items: 4,
                        nav: false
                    },
                    1000: {
                        items: 7,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>
@endsection
