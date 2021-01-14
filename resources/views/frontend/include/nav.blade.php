<!-- Header-nav-start -->
@inject('request', 'Illuminate\Http\Request')
<div class="headRight">
    <div class="buttonContainer">
        <div class="quicksearchToggle">
            <svg id="srch-btn" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 475.1 475.1"  style="enable-background:new 0 0 475.1 475.1;" xml:space="preserve">
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
        </div>
        <div class="navToggle">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 485 306.3" style="enable-background:new 0 0 485 306.3;" xml:space="preserve">
						<g>
                            <g>
                                <g>
                                    <path d="M462.4,76.6H22.6c0,0-22.6,0-22.6-38.3S22.6,0,22.6,0h439.9c0,0,22.6,0,22.6,38.3S462.4,76.6,462.4,76.6z"/>
                                    <path d="M462.4,191.4H22.6c0,0-22.6,0-22.6-38.3s22.6-38.3,22.6-38.3h439.9c0,0,22.6,0,22.6,38.3
										C485,191.4,462.4,191.4,462.4,191.4z"/>
                                    <path d="M462.4,306.3H22.6c0,0-22.6,0-22.6-38.3c0-38.3,22.6-38.3,22.6-38.3h439.9c0,0,22.6,0,22.6,38.3
										C485,306.3,462.4,306.3,462.4,306.3z"/>
                                </g>
                            </g>
                        </g>
					</svg>
        </div>
    </div>
    <nav class="main">
        <div class="closeNav">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 224.5 224.5" style="enable-background:new 0 0 224.5 224.5;" xml:space="preserve">
					<g>
                        <polygon points="224.5,7 217.5,0 112.3,105.3 7,0 0,7 105.3,112.3 0,217.5 7,224.5 112.3,119.2 217.5,224.5
							224.5,217.5 119.2,112.3 	"/>
                    </g>
					</svg>
        </div>
        <div class="menu-main-menu-container">
            <ul id="menu-main-menu" class="menu">
                <li class="menu-item {{ $request->segment(1) == '/' ? 'current-menu-item' : '' }}"><a href="{{url('/')}}">Home</a></li>
                <li class="menu-item {{ $request->segment(1) == 'why-use-us' ? 'current-menu-item' : '' }}"><a href="{{url('why-use-us')}}">Why Use Us?</a></li>
                <li class="menu-item {{ $request->segment(1) == 'accommodation' ? 'current-menu-item' : '' }}"><a href="{{url('accommodation')}}">Accommodation</a></li>
                <li class="menu-item {{ $request->segment(1) == 'carlingford' ? 'current-menu-item' : '' }}"><a href="{{url('carlingford')}}">Visit Carlingford</a></li>
                <li class="menu-item {{ $request->segment(1) == 'amenities' ? 'current-menu-item' : '' }}"><a href="{{url('amenities')}}">Amenities</a></li>
                <li class="menu-item {{ $request->segment(1) == 'accommodation-mapping' ? 'current-menu-item' : '' }}"><a href="{{url('accommodation-mapping')}}">Accommodation Mapping</a></li>
                <li class="menu-item {{ $request->segment(1) == 'location' ? 'current-menu-item' : '' }}"><a href="{{url('location')}}">Location</a></li>
                <li class="menu-item {{ $request->segment(1) == 'services' ? 'current-menu-item' : '' }}"><a href="{{url('services')}}">Services</a></li>
                <li class="{{ $request->segment(1) == 'global-availability-calendar' ? 'current-menu-item' : '' }}">
                    <a href="{{ route('global-availability-calendar') }}">
                        <span class="title">Availability Calendar</span>
                    </a>
                </li>
                <li class="menu-item {{ $request->segment(1) == 'blog' ? 'current-menu-item' : '' }}"><a href="{{url('blog')}}">Blog</a></li>
                <li class="menu-item {{ $request->segment(1) == 'contact-us' ? 'current-menu-item' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- Header-nav-end -->
<script>
    $(document).ready(function () {
        $( "p" ).each(function( index ) {
            if($(this).html()==""){
                $(this).remove();
            }
        });
    });
</script>
