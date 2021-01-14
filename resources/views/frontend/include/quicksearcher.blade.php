
{{--<nav class="c-circle-menu js-menu">--}}
    {{--<button class="c-circle-menu__toggle js-menu-toggle">--}}
        {{--<span>Toggle</span>--}}
    {{--</button>--}}
    {{--<ul class="c-circle-menu__items">--}}
        {{--<li class="c-circle-menu__item">--}}
            {{--<a id="open_user_login_modal" class="c-circle-menu__link">--}}
                {{--<i class="fa fa-sign-in" aria-hidden="true"></i>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="c-circle-menu__item">--}}
            {{--<a href="{{url('user-dashboard')}}" class="c-circle-menu__link">--}}
                {{--<i class="fa fa-tachometer" aria-hidden="true"></i>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="c-circle-menu__item">--}}
            {{--<a href="#" class="c-circle-menu__link">--}}
                {{--<i class="fa fa-tags" aria-hidden="true"></i>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="c-circle-menu__item">--}}
            {{--<a href="#" class="c-circle-menu__link">--}}
                {{--<img src="img/search.svg" alt="">--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li class="c-circle-menu__item">--}}
            {{--<a href="#" class="c-circle-menu__link">--}}
                {{--<img src="img/tools.svg" alt="">--}}
            {{--</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
    {{--<div class="c-circle-menu__mask js-menu-mask"></div>--}}
{{--</nav>--}}
<form id="book_available_form" class="quicksearch" data-parsley-ui-enabled="false"	data-parsley-focus="none" autocomplete="off">
    {{--<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">--}}
    <section class="fields">
        <div class="field arrival">
            @if(Session::has('arv_date'))
                <input type="text" id="from" name="from" placeholder="Arrival Date" value="{{Session::get('arv_date')}}" required="required" />
            @else
                <input type="text" id="from" name="from" placeholder="Arrival Date" required="required" />
            @endif
        </div>
        <div class="field departure">
            @if(Session::has('dep_date'))
                <input type="text" id="to" name="to" placeholder="Departure Date" value="{{Session::get('dep_date')}}" required="required" />
            @else
                <input type="text" id="to" name="to" placeholder="Departure Date" required="required" />
            @endif
        </div>
        <div class="field guests">
{{--            @if(Session::has('no_guests'))--}}
                <select name="guests" required>
                    <option disabled value="1" selected>No. of Guests</option>
                    <option value="1" @if(Session::get('no_guests') == 1) selected @endif>1</option>
                    <option value="2" @if(Session::get('no_guests') == 2) selected @endif>2</option>
                    <option value="3" @if(Session::get('no_guests') == 3) selected @endif>3</option>
                    <option value="4" @if(Session::get('no_guests') == 4) selected @endif>4</option>
                    <option value="5" @if(Session::get('no_guests') == 5) selected @endif>5</option>
                    <option value="6" @if(Session::get('no_guests') == 6) selected @endif>6</option>
                    <option value="7" @if(Session::get('no_guests') == 7) selected @endif>7</option>
                    <option value="8" @if(Session::get('no_guests') == 8) selected @endif>8</option>
                    <option value="9" @if(Session::get('no_guests') == 9) selected @endif>9</option>
                    <option value="10" @if(Session::get('no_guests') == 10) selected @endif>10</option>
                    <option value="11" @if(Session::get('no_guests') == 11) selected @endif>11</option>
                    <option value="12" @if(Session::get('no_guests') == 12) selected @endif>12</option>
                    <option value="13" @if(Session::get('no_guests') == 13) selected @endif>13</option>
                    <option value="14" @if(Session::get('no_guests') == 14) selected @endif>14</option>
                    <option value="15" @if(Session::get('no_guests') == 15) selected @endif>15</option>
                    <option value="16" @if(Session::get('no_guests') == 16) selected @endif>16</option>
                    <option value="17" @if(Session::get('no_guests') == 17) selected @endif>17</option>
                    <option value="18" @if(Session::get('no_guests') == 18) selected @endif>18</option>
                    <option value="19" @if(Session::get('no_guests') == 19) selected @endif>19</option>
                    <option value="20" @if(Session::get('no_guests') == 20) selected @endif>20</option>
                    <option value="21" @if(Session::get('no_guests') == 21) selected @endif>21</option>
                    <option value="22" @if(Session::get('no_guests') == 22) selected @endif>22</option>
                    <option value="23" @if(Session::get('no_guests') == 23) selected @endif>23</option>
                    <option value="24" @if(Session::get('no_guests') == 24) selected @endif>24</option>
                    <option value="25" @if(Session::get('no_guests') == 25) selected @endif>25</option>
                    <option value="26" @if(Session::get('no_guests') == 26) selected @endif>26</option>
                    <option value="27" @if(Session::get('no_guests') == 27) selected @endif>27</option>
                    <option value="28" @if(Session::get('no_guests') == 28) selected @endif>28</option>
                    <option value="29" @if(Session::get('no_guests') == 29) selected @endif>29</option>
                    <option value="30" @if(Session::get('no_guests') == 30) selected @endif>30</option>
                </select>
            {{--@endif--}}
            <i class="fa fa-user" ></i>
        </div>
        <div class="field property">
            <select id="property-select2" name="property">
                <option></option>
                @foreach($properties as $value)
                    @if($value->id == Session::get('p_id'))
                        <option value="{{$value->id}}" selected>{{$value->name}} | Sleeps {{$value->head_count}}</option>
                    @else
                        <option value="{{$value->id}}">{{$value->name}} | Sleeps {{$value->head_count}}</option>
                    @endif
                        {{--<option value="2" >Port Cottage | Sleeps 2</option>--}}
                        {{--<option value="3" >The Schooner | Sleeps 6</option>--}}
                        {{--<option value="4" >The Yawl | Sleeps 6</option>--}}
                        {{--<option value="5"  disabled >The Sloop | Sleeps 6 |</option>--}}
                @endforeach
            </select>
        </div>
    </section>

    <button id="book_available" type="submit" class="submit" name="submit">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 475.1 475.1" style="enable-background:new 0 0 475.1 475.1;" xml:space="preserve">
					<g>
                        <path d="M464.5,412.8l-97.9-97.9c23.6-34.1,35.4-72,35.4-113.9c0-27.2-5.3-53.2-15.9-78.1c-10.6-24.8-24.8-46.3-42.8-64.2
							s-39.4-32.3-64.2-42.8C254.2,5.3,228.2,0,201,0c-27.2,0-53.2,5.3-78.1,15.8C98.1,26.4,76.7,40.7,58.7,58.7
							c-18,18-32.3,39.4-42.8,64.2C5.3,147.8,0,173.8,0,201c0,27.2,5.3,53.2,15.8,78.1c10.6,24.8,24.8,46.2,42.8,64.2
							c18,18,39.4,32.3,64.2,42.8c24.8,10.6,50.9,15.8,78.1,15.8c41.9,0,79.9-11.8,113.9-35.4l97.9,97.6c6.9,7.2,15.4,10.8,25.7,10.8
							c9.9,0,18.5-3.6,25.7-10.8c7.2-7.2,10.8-15.8,10.8-25.7C475.1,428.5,471.6,419.9,464.5,412.8z M291.4,291.4
							c-25,25-55.1,37.5-90.4,37.5c-35.2,0-65.3-12.5-90.4-37.5c-25-25-37.5-55.1-37.5-90.4c0-35.2,12.5-65.3,37.5-90.4
							c25-25,55.1-37.5,90.4-37.5c35.2,0,65.3,12.5,90.4,37.5c25,25,37.5,55.1,37.5,90.4C328.9,236.2,316.4,266.3,291.4,291.4z"/>
                    </g>
				</svg>
        <span>Search Now</span>
    </button>

</form>

<div id="snackbar"></div>
<script>
    var position="";
    var className ="";
    var arvDt = "";
    var dptDt = "";
    var sw = screen.width;
    var otherPage = 0;
    if(sw <1000)
        var nom =1;
    else
        var nom = 3;

    $(document).ready(function () {

        $.ajaxSetup({
            headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        try{
            if($('#home_ca').html() != "Home"){
                otherPage = 1;
                $('form').addClass('otherPage');
                className = 'quicksearch2 otherPage';
                position = $( ".quicksearch" ).position();
            }
        }catch(err) {
            //
        }
        if(!position){
            position = $( ".quicksearch" ).position();
            if(sw >= 1000)
            {
                position.top = 50;
            }
        }
        if(!className){
            className = 'quicksearch2';
        }
        window.Parsley.on('field:error', function() {
            this.$element.effect( 'shake', {}, 250 );
        });

        $('#book_available').on('click',function(e)
        {
            e.preventDefault();
                var parsleyForm = $('#book_available_form').parsley();
                parsleyForm.validate();
                if( !parsleyForm.isValid() ){
                    return false;
                }
            var formData = $('#book_available_form').serialize();
            $.ajax({
                type: "GET",
                url: '{{url('/book_available')}}',
                dataType: "json",
                data: formData,

                success: function (data) {

                    if(data != -1 && data != 3)
                    {
                        window.location.href = data;
                    }else if(data == -1)
                    {
                        console.log(data);
                        if(window.location.href == '{{url('/accommodation#')}}')
                        {
                            window.location.href += "not-available";
                            location.reload();
                        }else
                        window.self.location  ='{{url('/accommodation#not-available')}}';


//                        $("#snackbar").html("Sorry! Property is not available on selected dates").addClass("show");
//                        setTimeout(function () {
//                            $("#snackbar").removeClass("show");
//                        }, 2000);
                    }else if(data == 3)
                    {
                        window.location.href ='{{url('/accommodation')}}';
                    }
                }


            });


        });

    });


    function formatDesign(item) {
        var selectionText = item.text.split("|");
        var $returnString = selectionText[0] +   '<br>' + (selectionText[1] ? '<h6><i class="fa fa-user"></i>': '')  + (selectionText[1] ? selectionText[1]: '');
        if(selectionText.length == 3) {
            $returnString=$returnString+" <i style=\" color:#7E5320; font-size: 14px; float:right;\" class=\"fa fa-ban\" aria-hidden=\"true\" title=\"Not available on selected dates\"></i></h6>";
        } else {
            $returnString+= '</h6>';
        }
        return $returnString;
    };

    $('#property-select2').select2({
        placeholder: "Select Property (Opt.)",
        templateResult: formatDesign,
        templateSelection: formatDesign,
        escapeMarkup: function(m) { return m; }
    });
    $('#property-mob-select2').select2({
        placeholder: "Select Property (Opt.)",
        templateResult: formatDesign,
        templateSelection: formatDesign,
        escapeMarkup: function(m) { return m; }
    });
    $( function() {
        var fromDate;
        var toDate;
        var date_Format = 'dd-mm-yy';
        from = $( "#from" )
            .datepicker({
                minDate: 0,
                dateFormat: 'dd-mm-yy',
                showOn: 'both',
                buttonImage: "{{url('images/calendar-icon.png')}}",
                buttonImageOnly: true,
                numberOfMonths: nom,
                onChangeMonthYear:function(y, m, i){
                    setTimeout(function () {


                        if(fromDate)
                        {
                            if(nom == 3)
                            {
                                var width_of_from= $('#ui-datepicker-div').width()+ 6;
                                $('#ui-datepicker-div').append('<div class="'+className+'"  style="width: '+width_of_from+'px;">' +
                                    '<section class="fields">' + '<p class="select-arrival" >'+'Please update Arrival Date'+'</p>'+
                                    '</section>' +
                                    '</div>');
                            }
                            else{
                                var width_of_from= $('#ui-datepicker-div').width()+ 6;
                                $('#ui-datepicker-div').append('<div class="'+className+'"  style="width: '+width_of_from+'px;">' +
                                    '<section class="fields">' + '<p class="select-arrival" >'+'Please update Arrival Date'+'</p>'+
                                    '</section>' +
                                    '</div>');
                            }

                        }
                        else{
                            var width_of_from= $('#ui-datepicker-div').width()+ 6;
                            $('#ui-datepicker-div').append('<div class="'+className+'"  style="width: '+width_of_from+'px;">' +
                                '<section class="fields">' + '<p class="select-arrival" >'+'Please select Arrival Date'+'</p>'+
                                '</section>' +
                                '</div>');
                        }

                    }, 0);
                },
                beforeShowDay: function (date) {
                    if(toDate){
                        if($.trim(date) === $.trim(toDate)){
                            return [true,'active-date-datepicker-end','End Day'];
                        }
                    }
                    if($.trim(date) === $.trim(fromDate)){
                        return [true,'active-date-datepicker-start','Start Day'];
                    }
                    if(fromDate && toDate) {
                        if (new Date(date) > new Date(fromDate) && new Date(date) < new Date(toDate)) {
                            return [true, 'active-date-datepicker-mid', ''];
                        }
                    }
                    return [true,'',''];

                },
                beforeShow: function (input, inst) {

                    setTimeout(function () {

                        if(sw >= 1000)
                        {
                            inst.dpDiv.css({
                                top: position.top + 65,
                                left: position.left
                            });
                        }else{
                            if(otherPage != 1)
                            {
                                inst.dpDiv.css({
                                    top: position.top - 75,
                                    left: '22%'
                                });
                            }else {
                                inst.dpDiv.css({
                                    top: position.top + 265,
                                    left: '22%'
                                });
                            }

                        }

                        var width_of_from= $('#ui-datepicker-div').width()+ 6;


                        if(fromDate)
                        {
                            $('#ui-datepicker-div').append('<div class="'+className+'"  style="width: '+width_of_from+'px;">' +
                                '<section class="fields">' + '<p class="select-arrival" >'+'Please update Arrival Date'+'</p>'+
                                '</section>' +
                                '</div>');
                            $("#ui-datepicker-div").find(".ui-state-active").css("background-color", "#ab9a5f").css("color", "#fff");
                        }
                        else{
                            $('#ui-datepicker-div').append('<div class="'+className+'" style="width: '+width_of_from+'px;">' +
                                '<section class="fields">' + '<p class="select-arrival" >'+'Please select Arrival Date'+'</p>'+
                                '</section>' +
                                '</div>');
                            $("#ui-datepicker-div").find(".ui-state-active").css("background-color", "#ab9a5f").css("color", "#fff");
                        }

                    }, 0);
                }

            })
            .on( "change", function() {
                var dateString = $('#from').val();
                var dateArray = dateString.split('-');
                var month = dateArray[1]-1;
                var year = dateArray[2];
                var day = dateArray[0];
                fromDate= new Date(year,month,day);
                var tmpDt = $('#from').val();
                to.datepicker( "option", "minDate", getDate( this ) );
                $('#from').val('');
                arvDt = tmpDt;

                if (dptDt != "" && arvDt != "") {
                    $('#from').val(arvDt);
                    $('#to').val(dptDt);
                }else{
                    setTimeout(function () {
                        to.datepicker( "show" );
                    },200);
                }

            });



        to = $( "#to" ).datepicker({
            minDate: '+1D',
//            showCurrentAtPos: 1,
            dateFormat: 'dd-mm-yy',
            showOn: 'both',
            buttonImage: "{{url('images/calendar-icon.png')}}",
            buttonImageOnly: true,
            numberOfMonths: nom,
            onChangeMonthYear:function(y, m, i){
                setTimeout(function () {

                    if(toDate)
                    {
                        var width_of_from= $('#ui-datepicker-div').width()+ 6;
                        $('#ui-datepicker-div').append('<div class="'+className+'" style="width: '+width_of_from+'px;">' +
                            '<section class="fields">' + '<p class="select-arrival" >'+'Please update Departure Date'+'</p>'+
                            '</section>' +
                            '</div>');
                    }
                    else{
                        var width_of_from= $('#ui-datepicker-div').width()+ 6;
                        $('#ui-datepicker-div').append('<div class="'+className+'" style="width: '+width_of_from+'px;">' +
                            '<section class="fields">' + '<p class="select-arrival" >'+'Please select Departure Date'+'</p>'+
                            '</section>' +
                            '</div>');
                    }

                }, 0);
            },
            beforeShowDay: function (date) {
                if(fromDate){
                    if($.trim(date) === $.trim(fromDate)){
                        return [true,'active-date-datepicker-start','Start Day'];
                    }
                }
                if($.trim(date) === $.trim(toDate)){
                    return [true,'active-date-datepicker-end','End Day'];
                }
                if(fromDate && toDate) {
                    if (new Date(date) > new Date(fromDate) && new Date(date) < new Date(toDate)) {
                        return [true, 'active-date-datepicker-mid', ''];
                    }
                }
                return [true,'',''];

            },
            beforeShow: function (input, inst) {
                if(dptDt)
                {
                    $('#to').datepicker('option','showCurrentAtPos',1);
                }

                setTimeout(function () {
//
//
                    if(sw >= 1000)
                    {
                        inst.dpDiv.css({
                            top: position.top + 65,
                            left: position.left
                        });
                    }else{
                        if(otherPage != 1)
                        {
                            inst.dpDiv.css({
                                top: position.top - 75,
                                left: '22%'
                            });
                        }else {
                            inst.dpDiv.css({
                                top: position.top + 265,
                                left: '22%'
                            });
                        }
                    }
                    var width_of_from= $('#ui-datepicker-div').width()+ 6;

                    if(toDate)
                    {
                        $('#ui-datepicker-div').append('<div class="'+className+'" style="width: '+width_of_from+'px;">' +
                            '<section class="fields">' + '<p class="select-departure" >'+'Please update Departure Date'+'</p>'+
                            '</section>' +
                            '</div>');
                        $("#ui-datepicker-div").find(".ui-state-active").css("background-color", "#ab9a5f").css("color", "#fff");
                    }
                    else{
                        $('#ui-datepicker-div').append('<div class="'+className+'" style="width: '+width_of_from+'px;">' +
                            '<section class="fields">' + '<p class="select-departure" >'+'Please select Departure Date'+'</p>'+
                            '</section>' +
                            '</div>');
                        $("#ui-datepicker-div").find(".ui-state-active").css("background-color", "#ab9a5f").css("color", "#fff");
                    }


                }, 0);

            }
        })
            .on( "change", function() {
                var dateString = $('#to').val();
                var dateArray = dateString.split('-');
                var month = dateArray[1]-1;
                var year = dateArray[2];
                var day = dateArray[0];
                toDate= new Date(year,month,day);
                var tmpDt = $('#to').val();
                from.datepicker( "option", "maxDate", getDate( this ) );
                $('#to').val('');
                dptDt = tmpDt;

                if (dptDt != "" && arvDt != "") {
                    $('#from').val(arvDt);
                    $('#to').val(dptDt);
                }
                else{
                    setTimeout(function () {
                        from.datepicker( "show" );
                    },200);
                }

            });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( date_Format, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );

    $( function() {

        var fromDate;
        var toDate;

        var date_Format = "dd/mm/yy",
            fromMob = $( "#from-mob" )
                .datepicker({
                    dateFormat: 'dd/mm/yy',
                    showOn: 'both',
                    buttonImage: "{{url('images/calendar-icon.png')}}",
                    buttonImageOnly: true,
                    defaultDate: "+1w",
                    numberOfMonths: 3,

                    beforeShowDay: function (date) {
                        if(toDate){
                            if($.trim(date) === $.trim(toDate)){
                                return [true,'active-date-datepicker','jakjakjak'];
                            }
                        }
                        return [true,'',''];

                    },

                    beforeShow: function (input, inst) {
                        setTimeout(function () {
                            inst.dpDiv.css({
                                top: position.top + 65,
                                left: position.left
                            });
                            var width_of_from= $('#ui-datepicker-mob-div').width()+ 6;
                            $('#ui-datepicker-mob-div').append('<div class="quicksearch2 home" style="width: '+width_of_from+'px;">' +
                                '<section class="fields">' + '<p class="select-arrival" >'+'Please select Arrival Date'+'</p>'+
                                '</section>' +
                                '</div>');
                            $("#ui-datepicker-div").find(".ui-state-active").css("background-color", "#ab9a5f").css("color", "#fff");
                        }, 0);
                    }

                })
                .on( "change", function() {
                    var dateString = $('#from-mob').val();
                    var dateArray = dateString.split('-');
                    var month = dateArray[1]-1;
                    var year = dateArray[2];
                    var day = dateArray[0];
                    fromDate= new Date(year,month,day);
                    var tmpDt = $('#from-mob').val();
                    toMob.datepicker( "option", "minDate", getDate( this ) );
                    $('#from-mob').val('');
                    arvDt = tmpDt;

                    if (dptDt != "" && arvDt != "") {
                        $('#from-mob').val(arvDt);
                        $('#to-mob').val(dptDt);
                    }else{
                        setTimeout(function () {
                            toMob.datepicker( "show" );
                        },200);
                    }

                });



        toMob = $( "#to-mob" ).datepicker({
            dateFormat: 'dd/mm/yy',
            showOn: 'both',
            buttonImage: "{{url('images/calendar-icon.png')}}",
            buttonImageOnly: true,
            defaultDate: "+1w",
            numberOfMonths: 3,

            beforeShowDay: function (date) {
                if(fromDate){
                    if($.trim(date) === $.trim(fromDate)){
                        return [true,'active-date-datepicker','jakjakjak'];
                    }
                }
                return [true,'',''];

            },
            beforeShow: function (input, inst) {
                setTimeout(function () {
                    inst.dpDiv.css({
                        top: position.top + 65,
                        left: position.left
                    });
                    var width_of_from= $('#ui-datepicker-mob-div').width()+ 6;
                    $('#ui-datepicker-mob-div').append('<div class="quicksearch2 home" style="width: '+width_of_from+'px;">' +
                        '<section class="fields">' + '<p class="select-departure" >'+'Please select Departure Date'+'</p>'+
                        '</section>' +
                        '</div>');
                    $("#ui-datepicker-div").find(".ui-state-active").css("background-color", "#ab9a5f").css("color", "#fff");
                }, 0);
            }
        })
            .on( "change", function() {

                var dateString = $('#to').val();
                var dateArray = dateString.split('-');
                var month = dateArray[1]-1;
                var year = dateArray[2];
                var day = dateArray[0];
                toDate= new Date(year,month,day);

                var tmpDt = $('#to-mob').val();
                fromMob.datepicker( "option", "maxDate", getDate( this ) );
                $('#to-mob').val('');
                dptDt = tmpDt;

                if (dptDt != "" && arvDt != "") {
                    $('#from-mob').val(arvDt);
                    $('#to-mob').val(dptDt);
                }
                else{
                    setTimeout(function () {
                        fromMob.datepicker( "show" );
                    },200);
                }

            });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( date_Format, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
</script>