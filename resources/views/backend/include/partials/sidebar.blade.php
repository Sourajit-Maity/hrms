@inject('request', 'Illuminate\Http\Request')
<div class="page-sidebar-wrapper" >
    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu"
            data-keep-expanded="false"
            data-auto-scroll="true"
            data-slide-speed="200">


            <li class="{{ $request->segment(1) == 'dashboard'  && $request->segment(2) == null ? 'active' : ''}}">
                <a href="{{ url('/view-dashboard') }}">
                    <i class="fa fa-tachometer"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="{{ (( ($request->segment(2) == 'accommodations') )) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-building-o"></i>
                    <span class="title">Admin</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ (( ($request->segment(2) == 'accommodations') && ($request->segment(3) == '') )) ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="title">User Management</span>
                        </a>
                        <ul class="sub-menu">
                       
                        <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                        <a href="{{route('view-user')}}">
                            <i class="fa fa-road"></i>
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                    <a href="{{route('view-role')}}">
                            <i class="fa fa-road"></i>
                            <span class="title">User Roles</span>
                        </a>
                    </li>
                    <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                    <a href="{{route('view-sub-role')}}">
                            <i class="fa fa-road"></i>
                            <span class="title">Responsibilities</span>
                        </a>
                    </li>
                    </ul>
                    </li>
                    <li class="{{  $request->segment(2) == 'extra' ? 'active' : '' }}">
               <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Organization</span>
                </a>
                <ul class="sub-menu">
                       
                       <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                       <a href="{{route('view-user')}}">
                           <i class="fa fa-road"></i>
                           <span class="title">Organizational Info</span>
                       </a>
                   </li>
                   <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                   <a href="{{route('view-role')}}">
                           <i class="fa fa-road"></i>
                           <span class="title">Companies</span>
                       </a>
                       <ul class="sub-menu">
                       
                       <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                       <a href="{{route('view-user')}}">
                           <i class="fa fa-road"></i>
                           <span class="title">Locations</span>
                       </a>
                       <ul class="sub-menu">
                       
                       <li class="{{ (( ($request->segment(3) == 'proximity') )) ? 'active' : '' }}">
                       <a href="{{route('view-user')}}">
                           <i class="fa fa-road"></i>
                           <span class="title">Departments</span>
                       </a>
                   </li>
                   
                   </ul>
                   </li>
                  
                   </ul>
                   </li>
                   
                   </ul>
            </li>
                    <li class="{{  $request->segment(2) == 'extra' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Job</span>
                </a>
            </li>
            <li class="{{  $request->segment(2) == 'extra' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Qualification</span>
                </a>
            </li>
            <li class="{{  $request->segment(2) == 'extra' ? 'active' : '' }}">
            <a href="{{ url('/nationality') }}">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Nationalities</span>
                </a>
            </li>
            <li class="{{  $request->segment(2) == 'extra' ? 'active' : '' }}">
            <a href="{{ url('/configurations') }}">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Displinary Actions</span>
                </a>
            </li>
                    
                </ul>
            </li>
            <li class="{{ (( ($request->segment(2) == 'booking') )) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-building-o"></i>
                    <span class="title">Pim</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="{{ $request->segment(3) == 'add-booking' ? 'active' : '' }}">
                    <a href="{{route('view-user')}}">
                            <i class="fa fa-home"></i>
                            <span class="title">Add Employee</span>
                        </a>
                    </li>
                     <li class="{{ $request->segment(3) == 'rebookings' ? 'active' : '' }}">
                     <a href="#">
                            <i class="fa fa-repeat"></i>
                            <span class="title">Reports</span>
                        </a>
                    </li>
                    <li class="">
                    <a href="#">
                            <i class="fa fa-eye"></i>
                            <span class="title">Configuration</span>
                        </a>
                    </li>
                    <li class="">
                    <a href="#">
                            <i class="fa fa-eye"></i>
                            <span class="title">Employee List</span>
                        </a>
                    </li>

                </ul>
            </li>
          
            <li class="{{  $request->segment(2) == 'whyuseus-edit' ||  $request->segment(2) == 'carlingford-edit' ||
                $request->segment(2) == 'amenities-edit' ||  $request->segment(2) == 'location-edit' ||
                 $request->segment(2) == 'service-edit' ||  $request->segment(2) == 'contact-edit' ||  $request->segment(2) == 'events-edit' ||  $request->segment(2) == 'header-edit' ||  $request->segment(2) == 'footer-edit' ||  $request->segment(2) == 'blog' ||  $request->segment(2) == 'slider-management' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Leave</span>
                    <span class="fa arrow"></span>
                </a>


            <ul class="sub-menu">

                <li class="{{ $request->segment(2) == 'slider-management' ? 'active' : '' }}">
                <a href="#">
                        <i class="fa fa-file-image-o" aria-hidden="true"></i>
                        <span class="title">Apply</span>
                    </a>
                </li>
                <li class="{{ $request->segment(2) == 'blog' ? 'active' : '' }}">
                <a href="#">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <span class="title">My Leave</span>
                    </a>
                </li>

            <li class="{{ $request->segment(2) == 'whyuseus-edit' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                    <span class="title">Configure</span>
                </a>
            </li>

            <li class="{{ $request->segment(2) == 'carlingford-edit' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="title">Reports</span>
                </a>
            </li>

            <li class="{{ $request->segment(2) == 'amenities-edit' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span class="title">Entitlements</span>
                </a>
            </li>

            <li class="{{ $request->segment(2) == 'location-edit' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span class="title">Leave List</span>
                </a>
            </li>

            <li class="{{ $request->segment(2) == 'service-edit' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-list-ol" aria-hidden="true"></i>
                    <span class="title">Assign Leave</span>
                </a>
            </li>
     
            </ul>
            </li>

            <li class="{{  $request->segment(2) == 'extra' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span class="title">Time</span>
                </a>
            </li>


          

            <li class="{{ $request->segment(2) == 'global-availability-calendar' ? 'active' : '' }}">
            <a href="#">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <span class="title">My Info</span>
                </a>
            </li>


            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

