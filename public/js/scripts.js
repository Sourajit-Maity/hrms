var showTimeout = setTimeout(function() {
    $('#pageLoader').fadeIn(500);
}, 2700);
jQuery(window).load(function () {
    clearTimeout(showTimeout);
    $('#pageLoader').fadeOut(1000);
});

$(document).ready(function() {
	
	$('.slider .sliderList').slick({
        infinite: true,
        slide: 'li',
        slidesToShow: 1,
        speed: 1500,
        fade: true,
        dots: true,
        arrows: false,
        autoplaySpeed: 6000,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnDotsHover: true,
        pauseOnHover: false,
		customPaging: function(slider, i) {
    		return '<p>' + (i + 1) + '</p>';
		},
    });
    var propertyArrow = '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.8 257.6" style="enable-background:new 0 0 451.8 257.6;" xml:space="preserve">' +
    '<g><path d="M203.6,248.3L9.3,54C-3.1,41.7-3.1,21.6,9.3,9.3C21.6-3.1,41.7-3.1,54,9.3l171.9,171.9L397.8,9.3 c12.4-12.4,32.4-12.4,44.7,0c12.4,12.4,12.4,32.4,0,44.8L248.3,248.3c-6.2,6.2-14.3,9.3-22.4,9.3 C217.8,257.6,209.7,254.5,203.6,248.3z"/>' +
    '</g></svg>';
    $('.propertyGallery').slick({
        infinite: true,
        slide: 'li',
        slidesToShow: 1,
        speed: 1500,
        fade: true,
        dots: false,
        arrows: true,
        autoplaySpeed: 6000,
        slidesToScroll: 1,
        autoplay: false,
        pauseOnDotsHover: true,
        pauseOnHover: false,
        prevArrow: '<span class="prev">' + propertyArrow  + '</span>',
        nextArrow: '<span class="next">' + propertyArrow  + '</span>',
    });

    /* TOGGLE NAVIGATION */
    $('.navToggle svg').click(function() {
        $('#holder').addClass('openNav');
        $('body').addClass('backgroundNav');
    });
    $('.closeNav svg').click(function() {
        $('#holder').removeClass('openNav');
        setTimeout(function() {
            $('body').removeClass('backgroundNav');
        }, 400);        
    });
    $('.quicksearchToggle svg').click(function() {
        $('.quicksearch').toggleClass('open');
    });
    /* QUICK SEARCH FORM */
    $('.datePicker').each(function() {
        var nextID = $(this).next('input').attr('id');
        $(this).datepicker({ 
            minDate: 0,
            dateFormat: 'd/m/yy',
            altField: "#" + nextID,
            altFormat: "mm/dd/yy",            
        });
    });
    $("#expiry").MonthPicker({ 
        Button: false
    });
    $(document).on('click', '#expiry, .month-picker .ui-button', function() {
        $('.month-picker').find('.ui-state-disabled').removeClass('ui-state-disabled');
    });
    $('.tooltip').tooltip({
        show: null,
        position: {
            my: "center bottom-20",
            at: "center top",
            using: function( position, feedback ) {
                $( this ).css( position );
                $( "<div>" )
                .addClass( "arrow" )
                .addClass( feedback.vertical )
                .addClass( feedback.horizontal )
                .appendTo( this );
            }
        },        
    });

    //PROPERTY MEDIA TOGGLE
    $('.panelToggle').click(function() {
        $('.tabContainer').slideToggle(200);
        $(this).toggleText('+', '-').toggleClass('hidePanel');
        if($('.availabilityTab').hasClass('active') && !$(this).hasClass('hidePanel')) {
            $('.openBook').hide();
        } else {
            $('.openBook').show();
        }
    });
   
    var firstMedia = $('.propertyMediaToggle li').first().data('media');
    if(firstMedia != 'tour') {
        $('.propertyMedia .propertyBack').first().addClass('active');
        $('.propertyMediaToggle li').first().addClass('active');
    }

    $('.propertyGallery.active').slick('slickPlay');
    $('.propertyMediaToggle li').click(function() {
        var activeMedia = $('.propertyMediaToggle li.active').data('media');
        $('.propertyGallery.' + activeMedia).slick('slickPause');
        $('.propertyGallery.' + activeMedia).slick('slickGoTo', 0);
        $('.propertyMediaToggle li').removeClass('active');
        $(this).addClass('active');
        $('.propertyBack').removeClass('active');
        var mediaClass = $(this).data('media');
        $('.propertyBack.' + mediaClass).addClass('active');        
        if(mediaClass == 'internal' || mediaClass == 'external') {
            $('.propertyGallery.' + mediaClass).slick('slickPlay');
        }
        if(mediaClass == 'tour') {
            var latitude = $(this).data('latitude');
            var longitude = $(this).data('longitude');
            virtual_tour(latitude, longitude)
        }
    });

    //TABS
    if($('ul.tabs.parent').hasClass('submitted') || getUrlVars()["availability"] == "open" ) {
        $('ul.tabs li.tabLink.availSection, .tabPanels .tabContent.availSection').addClass('active');
        $('ul.tabs.child li.tabLink:first-child, .tabPanels.inner .tabContent:first-child').addClass('active');
    } else {
        $('ul.tabs li.tabLink:first-child, .tabPanels .tabContent:first-child').addClass('active');
    }
    $('ul.tabs li.tabLink').click(function() {
        $('.tabContainer').slideDown(500);
        $('.panelToggle').text('-').removeClass('hidePanel');
        var tabID = $(this).data('tab');
        $(this).parent('ul.tabs').children('li').removeClass('active');
        $(this).parent('ul.tabs').siblings('.tabPanels').children('.tabContent').removeClass('active');
        $(this).addClass('active');
        $("#" + tabID).addClass('active');
        if($(this).hasClass('availabilityTab')) {
            $('.openBook').hide();
        } else {
            $('.openBook').show();
        }
    });
    if(getUrlVars()["availability"] == "open") {
        $('.openBook').hide();
    }


    /********************************/
    /********* CALENDAR FORM ********/
    /********************************/
    $('.calOptions .next').click(function() {
        var currentMonth = $('.currentMonth').val();
        var currentYear = $('.currentYear').val();
        var id = $('#availability-tab').data('id');
        var selectedDay = $('.selectedDay').val();
        if(currentMonth == 12) {
            currentMonth = 1;
            currentYear++;
        } else {
            currentMonth++;
        }
        $('.currentMonth').val(currentMonth);
        $('.currentYear').val(currentYear);
        var calData = {
            'action'  : 'load_booking_calendar',
            'month'   : currentMonth,
            'year'    : currentYear,
            'id'      : id,
        }   
        var monthData = {
            'action' : 'load_text_month',
            'month'  : currentMonth
        }  
        $.post(carlval_adminurl, monthData, function(month) {
            $('.calOptions .month').html(month);
            $('.calOptions .year').text(currentYear);
        });    
        $.post(carlval_adminurl, calData, function(calendar) {
            $('.calCanvas').html(calendar);
        }).done(function() {
            $('.calendar tr td').each(function() {
                var afternoonTag = $(this).find('.afternoon').length;
                var morningTag = $(this).find('.morning').length;
                if(morningTag == 0 && afternoonTag == 1) {
                    $(this).addClass('pseudoSelect').removeClass('selectable');
                }
                if(morningTag == 1 && afternoonTag == 1) {
                    $(this).removeClass('selectable');
                }
                var thisDay = $(this).data('date');
                if(selectedDay == thisDay) {
                    $(this).addClass('selected');
                }
            });
        });
    });
    $('.calOptions .prev').click(function() {
        var currentMonth = $('.currentMonth').val();
        var currentYear = $('.currentYear').val();
        var id = $('#availability-tab').data('id');
         var selectedDay = $('.selectedDay').val();
        if(currentMonth == 1) {
            currentMonth = 12;
            currentYear--;
        } else {
            currentMonth--;
        }
        $('.currentMonth').val(currentMonth);
        $('.currentYear').val(currentYear);
        var calData = {
            'action'  : 'load_booking_calendar',
            'month'   : currentMonth,
            'year'    : currentYear,
            'id'      : id,
        }  
        var monthData = {
            'action' : 'load_text_month',
            'month'  : currentMonth
        } 
        $.post(carlval_adminurl, monthData, function(month) {
            $('.calOptions .month').html(month);
            $('.calOptions .year').text(currentYear);
        });
        $.post(carlval_adminurl, calData, function(calendar) {
            $('.calCanvas').html(calendar);
        }).done(function() {
            $('.calendar tr td').each(function() {
                var afternoonTag = $(this).find('.afternoon').length;
                var morningTag = $(this).find('.morning').length;
                if(morningTag == 0 && afternoonTag == 1) {
                    $(this).addClass('pseudoSelect').removeClass('selectable');
                }
                if(morningTag == 1 && afternoonTag == 1) {
                    $(this).removeClass('selectable');
                }
                var thisDay = $(this).data('date');
                if(selectedDay == thisDay) {
                    $(this).addClass('selected');
                }
            });
        });
    });
    $('.calendar tr td').each(function() {
        var selectedDate = $('.selectedDay').val();
        var fieldDate = $(this).data('date');
        if(fieldDate != undefined && selectedDate == fieldDate) {
            $(this).addClass('selected');
        }
        var afternoonTag = $(this).find('.afternoon').length;
        var morningTag = $(this).find('.morning').length;
        if(morningTag == 0 && afternoonTag == 1) {
            $(this).addClass('pseudoSelect').removeClass('selectable');
        }
        if(morningTag == 1 && afternoonTag == 1) {
            $(this).removeClass('selectable');
        }
    });
    $(document).on('click', '.calendar-day.selectable', function() {        
        $('.calendar-day').removeClass('selected').removeAttr('title');
        $(this).addClass('selected');
        $(this).attr('title', 'Check In'); 
        var thisDay = $(this).data('date');
        $('.selectedDay').val(thisDay);
    });
    $('.openBook').click(function() {
        $('.tabContainer').slideDown(500);
        $('.panelToggle').text('-').removeClass('hidePanel');
        $('ul.tabs.parent').children('li').removeClass('active');
        $('ul.tabs.parent').siblings('.tabPanels').children('.tabContent').removeClass('active');
        $('.availabilityTab').addClass('active');
        $("#availability-tab").addClass('active');
        $(this).hide();
    });
    $('.scrollToBook').click(function(event) {
        event.preventDefault();
        var id = $(this).attr('href');
        $("html, body").delay(200).animate({
            scrollTop: $(id).offset().top - 50 
        }, 1000);
    }); 
    
    /********************************/
    /******* END CALENDAR FORM ******/
    /********************************/

    /********************************/
    /********* BOOKING FORM *********/
    /********************************/
    //Guests Booking

    $(document).on('change', '.totalSubmit', function() {
        var depositRate = parseInt($('.depositRate').val());
        var total = parseInt($('.totalSubmitVal').val());
        var deposit =  depositRate * total / 100;
        var roundPrice = deposit.toFixed(2);
        $('.depositPriceVal').val(roundPrice);
    });
    if($('.submittedForm').val() == 'submitted') {
        $('.propertyList').removeClass('single').addClass('list');
        if($('.propertyList li').length >= 3) {
            $('.propertyDetails').addClass('showTab');
        } else if($('.propertyList li').length >= 2) {
            $('.propertyList').addClass('double');
        }
    }
    /********************************/
    /******* END BOOKING FORM *******/
    /********************************/
    load_property_content_height();

    $(document).on('click', '.selectedBooking.removable', function() {
        var id = $(this).data('id');
        $('.propertyList #property-' + id + ' .bookingStatus').text('Add to Booking').removeClass('selected');
        $('.propertyList #property-' + id).removeClass('selected');
        var bookingPrice = $('.propertyList #property-' + id).find('.price').data('price');
        var subtractPrice = Number($('.totalSubmitVal').val()) - Number(bookingPrice); 
        var discount = $('.voucherVal').val();
        if(discount == undefined) {
            discount = 0;
        } else {
            discount = Number(discount);
        }
        var subtractPriceDisplay = subtractPrice - discount;
        var roundPriceDisplay = subtractPriceDisplay.toFixed(2);
        var roundPrice = subtractPrice.toFixed(2);
        $('.totalSubmitVal').val(roundPrice);
        $('.totalSubmit').val(roundPriceDisplay).trigger('change');

        $('.propertyList #property-' + id).find('.extras').removeClass('enable').addClass('disable');
        $('.propertyList #property-' + id).find('.extras').find('input:checked').each(function() {
            var property = $(this).parents('.property').find('.bookingStatus').data('id');
            var extra = $(this).val();
            var data = {
                'action'        : 'load_add_property_extra_prices',
                'property_id'   : property, 
                'extra'         : extra
            }            
            $.post(carlval_adminurl, data, function(cost) {
                //Total
                var subtractPrice = Number($('.totalSubmitVal').val()) - Number(cost);
                var discount = $('.voucherVal').val();
                if(discount == undefined) {
                    discount = 0;
                } else {
                    discount = Number(discount);
                }
                var subtractPriceDisplay = subtractPrice - discount;
                var roundPriceDisplay = subtractPriceDisplay.toFixed(2);
                var roundPrice = subtractPrice.toFixed(2);
                $('.totalSubmitVal').val(roundPrice);
                $('.totalSubmit').val(roundPriceDisplay).trigger('change');
            });
        });
        $('.propertyList #property-' + id).find('.extras').find('input:checked').removeAttr('checked');
        $(this).remove(); 
        var sleeps = $('.propertyList #property-' + id + ' .bookingStatus').data('sleeps');
        var totalSleeps = $('.sleepsValid').val();
        var newSleeps = parseInt(totalSleeps) - parseInt(sleeps);
        var guests = $('.numberGuests').val();
        $('.sleepsValid').val(newSleeps);
        if(guests > newSleeps) {
            var guestDiff = guests - newSleeps;
            $('.guestNumLeft').text(guestDiff);
            $('.guestMessage').show();
            if(guestDiff == 1) {
                    $('.peoplePlural').text('person');
                } else {
                    $('.peoplePlural').text('people');
                }
        } else {
            $('.guestMessage').hide();
        }
         
    });
    $('.bookingList li').first().click(function() { return false; });
    $(document).on('click', '.extras.disable input', function(event) {
        event.preventDefault();
        $(this).parents('.property').find('.extrasValidation, .extras').addClass('open');
        load_property_content_height();
        
    });
    $(document).on('click', '.extras.enable input', function() {
        var property = $(this).parents('.property').find('.bookingStatus').data('id');
        var extra = $(this).val();
        var data = {
            'action'        : 'load_add_property_extra_prices',
            'property_id'   : property, 
            'extra'         : extra
        }
        if($(this).is(':checked')) {
             var process = '+';
        } else {
            var process = '-';
        }
        $.post(carlval_adminurl, data, function(cost) {
            //Total
            if(process == '+') {
                var extrasPrice = Number($('.totalSubmitVal').val()) + Number(cost);
            } else {
                var extrasPrice = Number($('.totalSubmitVal').val()) - Number(cost);
            }
            var discount = $('.voucherVal').val();
            if(discount == undefined) {
                discount = 0;
            } else {
                discount = Number(discount);
            }
            var extrasPriceDisplay = extrasPrice - discount;
            var roundPriceDisplay = extrasPriceDisplay.toFixed(2);
            var extraPrice = extrasPrice - discount;
            var roundPrice = extrasPrice.toFixed(2);
            $('.totalSubmitVal').val(roundPrice);
            $('.totalSubmit').val(roundPriceDisplay).trigger('change');
        });
    });

    $(window).resize(function() {
        load_property_content_height();
        $('.tabContainer').removeAttr('style');
    });

    $('.propertyList li, .bookingConfirmation .properties li').each(function() {
        var propertyLatitude = $(this).find('.map').data('propertylat');
        var propertyLongitude = $(this).find('.map').data('propertylong');
        var selectedLatitude = $(this).find('.map').data('selectedproplat');
        var selectedLongitude = $(this).find('.map').data('selectedproplong');
        var id = $(this).find('.map').data('map');    
        var title = $(this).find('.map').data('propertytitle');
        var selectedtitle = $(this).find('.map').data('selectedtitle');
        if(propertyLatitude && propertyLongitude) {
            load_map(id, propertyLatitude, propertyLongitude, title, selectedLatitude, selectedLongitude, selectedtitle);
        }
    }); 

    if($('.propertyDetails .propertyList li.property').length == 1) {
        $('.propertyList li.property').addClass('selected').find('.bookingStatus').addClass('selected').text('Selected');
        $('.propertyList li.property').find('.extras').removeClass('disable').addClass('enable');
    }

    var pageMapLat = $('.mapData').data('latitude');
    var pageMapLong = $('.mapData').data('longitude');
    var pageMapId = $('.mapData').data('map');
    var pageMarkerTitle = $('.mapData').data('title');
    load_map(pageMapId, pageMapLat, pageMapLong, pageMarkerTitle);
    
}); //Close Doc Ready

function virtual_tour(latitude, longitude) {
    new google.maps.StreetViewPanorama(
        document.getElementById('tourmap'), {
            position: {lat: latitude, lng: longitude},            
            linksControl: false,
            panControl: false,
            zoomControl: false,
            enableCloseButton: false
        }
    );
}
function load_properties(selected, guests, propertyguests, checkin, nights, rate, booked, extras) {
    //Load Data
    var data = {
        'action'           : 'load_new_property_list',
        'guests'           : guests,
        'propertyguests'   : propertyguests,
        'checkin'          : checkin,
        'nights'           : nights,
        'selected'         : selected,
        'rate_type'        : rate,
        'booked'           : booked,
        'extra_prop'       : extras

    }        
    // $.post(carlval_adminurl, data, function(properties) {
    //     $('.propertyList').html(properties).removeClass('single').addClass('list');
    //     $('.propertyList li.selected').removeClass('selected');
    //     //$('.propertyList li').find('.bookingStatus').not('.selected').text('Add to Booking');
    //     if($('.propertyList li').length >= 3) {
    //         $('.propertyDetails').addClass('showTab');
    //         $('.propertyList').removeClass('double');
    //     } else if($('.propertyList li').length == 2) {
    //         $('.propertyList').addClass('double');
    //         $('.propertyDetails').removeClass('showTab');
    //     } else {
    //         $('.propertyList').removeClass('double');
    //         $('.propertyDetails').removeClass('showTab');
    //     }
    // }).done(function() {
    //     $('.propertyList li').first().addClass('selected').find('.bookingStatus').text('Selected');
    //     load_property_content_height();
    //     $('.propertyList li').each(function() {
    //         var propertyLatitude = $(this).find('.map').data('propertylat');
    //         var propertyLongitude = $(this).find('.map').data('propertylong');
    //         var selectedLatitude = $(this).find('.map').data('selectedproplat');
    //         var selectedLongitude = $(this).find('.map').data('selectedproplong');
    //         var id = $(this).find('.map').data('map');
    //         var title = $(this).find('.map').data('propertytitle');
    //         var selectedtitle = $(this).find('.map').data('selectedtitle');
    //         if(propertyLatitude && propertyLongitude) {
    //             load_map(id, propertyLatitude, propertyLongitude, title, selectedLatitude, selectedLongitude, selectedtitle);
    //         }
    //         $('.propertyLoader').removeClass('open');
    //     });
    // });
    //Load Array of posts
    var arrayData = {
        'action'           : 'load_new_property_array',
        'guests'           : guests,
        'propertyguests'   : propertyguests,
        'checkin'          : checkin,
        'nights'           : nights,
        'selected'         : selected,
        'rate_type'        : rate
    }        
    // $.post(carlval_adminurl, arrayData, function(arrayValue) {
    //     $('.searchProperties').val(arrayValue);
    // });
}
function load_property_content_height() {
    if($(window).width() >= 1221) {
        var imageHeight = $('.propertyImage').outerHeight();
        var linkHeight = $('.bookingStatus').outerHeight();
        var topHeight = imageHeight + linkHeight;
        var propertyInfo = $(window).height() - topHeight;
        $('.propertyContent').outerHeight(propertyInfo);
        $('.propertyList li.property').removeClass('allowScroll').removeClass('blockScroll');
        $('.propertyList li.property').each(function() {
            if($(this).find('.propertyInner').outerHeight() <= $(this).find('.propertyContent').innerHeight()) {
                $(this).addClass('allowScroll');
            } else {
                $(this).addClass('blockScroll');
            }             
        });
    }
}
function load_map(id, propertyLatitude, propertyLongitude, propertytitle, selectedLatitude, selectedLongitude, selectedtitle) {
    var mapOptions = {
        zoom: 15,
        center: new google.maps.LatLng(propertyLatitude,propertyLongitude),
        scrollwheel: false,
    }
    var map = new google.maps.Map(document.getElementById('map-canvas-' + id), mapOptions);
    var blackMarker = {
        url: THEME_URI + '/images/black-marker.png',
        size: new google.maps.Size(34, 43),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(17, 43)
    }
    var blackPosition = new google.maps.LatLng(propertyLatitude,propertyLongitude);
    var blackMarker = new google.maps.Marker({
        position: blackPosition,
        map: map,
        icon: blackMarker,
    });
    var blackWindow = new google.maps.InfoWindow({
        content: propertytitle,
    });
    blackMarker.addListener('click', function() {
        blackWindow.open(map, blackMarker);
    });
    if(selectedLatitude && selectedLongitude) {
        var goldMarker = {
            url: THEME_URI + '/images/gold-marker.png',
            size: new google.maps.Size(34, 43),
            origin: new google.maps.Point(0,0),
            anchor: new google.maps.Point(17, 43)
        }
        var goldPosition = new google.maps.LatLng(selectedLatitude,selectedLongitude);
        var goldMarker = new google.maps.Marker({
            position: goldPosition,
            map: map,
            icon: goldMarker,
        });
        var goldWindow = new google.maps.InfoWindow({
            content: selectedtitle,
        });
        goldMarker.addListener('click', function() {
            goldWindow.open(map, goldMarker);
        });
        var bounds = new google.maps.LatLngBounds();
        bounds.extend(blackPosition);
        bounds.extend(goldPosition);
        map.fitBounds(bounds);
    }
}
jQuery.fn.extend({
    toggleText: function (a, b){
        var that = this;
        if(that.text() != a && that.text() != b) {
            that.text(a);
        } else if(that.text() == a) {
            that.text(b);
        } else if(that.text() == b) {
            that.text(a);
        }
        return this;
    }
});


function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}



