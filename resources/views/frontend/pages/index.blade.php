@extends('frontend.template.app')

<style>
    .login-btn-container, .dashboard-btn-container{
        top: 5px !important;
    }
    #srch-btn{
        display: none;
    }
    #container{
        background: url(images/home-bg-added.jpg) no-repeat center center;
    }
    .q-bottom {
        position: relative!important;
        display: block!important;
    }
    @media only screen and (min-width: 1000px) {
        .quicksearch {
            top: 50px!important;
            left: 300px!important;
            right: 50px!important;
            border: 3px solid #fff!important;
        }
    }
    @media only screen and (max-width: 1000px) {
        .slick-slide {
            height: unset!important;
        }
    }

</style>

@section('content')
    <section id="holder">
        @include('frontend.include.sidebar')
        <section id="container" role="main">

        <!-- Home-Banner-start -->
            <section class="slider">
                <ul class="sliderList">

                    @foreach($banner as $data)
                        <li class="slide">
                            <div class="slideImage" style="background: url(images/{{$data->image}}) no-repeat center center" aria-label="">
                                <div class="overlay"></div>
                            </div>
                            <div class="slideContent">
                                <h2>{{$data->title}}</h2>
                                <p>{!! $data->tagline !!}</p>
                                @if($data->btn_name)
                                    <div class="link"><a href="{{url('/')}}/{{$data->btn_link}}">{{$data->btn_name}}</a></div>
                                @endif
                            </div>
                        </li>
                    @endforeach

                </ul>

            </section>
            <!-- Home-Banner-end -->
        @include('frontend.include.quicksearcher')
        {{--@include('frontend.include.quicksearcher-bottom')--}}

            <!-- Mobile-Quick-search-start -->
            {{--<section class="mobileQuicksearch">--}}
                {{--<form action="accommodation" class="quicksearch home" method="post">--}}
                    {{--<section class="fields">--}}
                        {{--<div class="field arrival">--}}
                            {{--<input type="text" id="from-mob" name="from" placeholder="Arrival Date" required="required" />--}}
                        {{--</div>--}}
                        {{--<div class="field departure">--}}
                            {{--<input type="text" id="to-mob" name="to" placeholder="Departure Date" required="required" />--}}
                        {{--</div>--}}
                        {{--<div class="field guests">--}}
                            {{--<select name="guests" required>--}}
                                {{--<option disabled value="0" selected>No. of Guests</option>--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                                {{--<option value="5">5</option>--}}
                                {{--<option value="6">6</option>--}}
                                {{--<option value="7">7</option>--}}
                                {{--<option value="8">8</option>--}}
                                {{--<option value="9">9</option>--}}
                                {{--<option value="10">10</option>--}}
                                {{--<option value="11">11</option>--}}
                                {{--<option value="12">12</option>--}}
                                {{--<option value="13">13</option>--}}
                                {{--<option value="14">14</option>--}}
                                {{--<option value="15">15</option>--}}
                                {{--<option value="16">16</option>--}}
                                {{--<option value="17">17</option>--}}
                                {{--<option value="18">18</option>--}}
                                {{--<option value="19">19</option>--}}
                                {{--<option value="20">20</option>--}}
                                {{--<option value="21">21</option>--}}
                                {{--<option value="22">22</option>--}}
                                {{--<option value="23">23</option>--}}
                                {{--<option value="24">24</option>--}}
                                {{--<option value="25">25</option>--}}
                                {{--<option value="26">26</option>--}}
                                {{--<option value="27">27</option>--}}
                                {{--<option value="28">28</option>--}}
                                {{--<option value="29">29</option>--}}
                                {{--<option value="30">30</option>--}}
                            {{--</select>--}}
                            {{--<i class="fa fa-user" ></i>--}}
                        {{--</div>--}}
                        {{--<div class="field property">--}}
                            {{--<select id="property-mob-select2" name="property" required>--}}
                                {{--<option></option>--}}
                                {{--<option value="1">The Gate House | Sleeps 13</option>--}}
                                {{--<option value="2" >Port Cottage | Sleeps 2</option>--}}
                                {{--<option value="3" >The Schooner | Sleeps 6</option>--}}
                                {{--<option value="4" >The Yawl | Sleeps 6</option>--}}
                                {{--<option value="5"  >The Sloop | Sleeps 6</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</section>--}}
                    {{--<button type="submit" class="submit" name="submit">--}}
                        {{--<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
                             {{--viewBox="0 0 475.1 475.1" style="enable-background:new 0 0 475.1 475.1;" xml:space="preserve">--}}
						{{--<g>--}}
                            {{--<path d="M464.5,412.8l-97.9-97.9c23.6-34.1,35.4-72,35.4-113.9c0-27.2-5.3-53.2-15.9-78.1c-10.6-24.8-24.8-46.3-42.8-64.2--}}
								{{--s-39.4-32.3-64.2-42.8C254.2,5.3,228.2,0,201,0c-27.2,0-53.2,5.3-78.1,15.8C98.1,26.4,76.7,40.7,58.7,58.7--}}
								{{--c-18,18-32.3,39.4-42.8,64.2C5.3,147.8,0,173.8,0,201c0,27.2,5.3,53.2,15.8,78.1c10.6,24.8,24.8,46.2,42.8,64.2--}}
								{{--c18,18,39.4,32.3,64.2,42.8c24.8,10.6,50.9,15.8,78.1,15.8c41.9,0,79.9-11.8,113.9-35.4l97.9,97.6c6.9,7.2,15.4,10.8,25.7,10.8--}}
								{{--c9.9,0,18.5-3.6,25.7-10.8c7.2-7.2,10.8-15.8,10.8-25.7C475.1,428.5,471.6,419.9,464.5,412.8z M291.4,291.4--}}
								{{--c-25,25-55.1,37.5-90.4,37.5c-35.2,0-65.3-12.5-90.4-37.5c-25-25-37.5-55.1-37.5-90.4c0-35.2,12.5-65.3,37.5-90.4--}}
								{{--c25-25,55.1-37.5,90.4-37.5c35.2,0,65.3,12.5,90.4,37.5c25,25,37.5,55.1,37.5,90.4C328.9,236.2,316.4,266.3,291.4,291.4z"/>--}}
                        {{--</g>--}}
					{{--</svg>--}}
                        {{--<span>Search Now</span>--}}
                    {{--</button>--}}
                {{--</form>--}}
            {{--</section>--}}
            <!-- Mobile-Quick-search-end -->
            @include('frontend.include.mobile-footer')

        </section>
        <!-- Body-end -->


    </section>

<div id="home_ca" style="display: none;">Home</div>



@stop