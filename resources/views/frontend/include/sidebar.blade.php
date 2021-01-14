<!-- Header-start -->
<style>
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
    .form-control:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
    }
    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1;
    }
    .form-control:-ms-input-placeholder {
        color: #999;
    }
    .form-control::-webkit-input-placeholder {
        color: #999;
    }
    .form-control::-ms-expand {
        background-color: transparent;
        border: 0;
    }
    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #eee;
        opacity: 1;
    }
    .form-control[disabled],
    fieldset[disabled] .form-control {
        cursor: not-allowed;
    }
    textarea.form-control {
        height: auto;
    }
    input[type="search"] {
        -webkit-appearance: none;
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) {
        input[type="date"].form-control,
        input[type="time"].form-control,
        input[type="datetime-local"].form-control,
        input[type="month"].form-control {
            line-height: 34px;
        }
        input[type="date"].input-sm,
        input[type="time"].input-sm,
        input[type="datetime-local"].input-sm,
        input[type="month"].input-sm,
        .input-group-sm input[type="date"],
        .input-group-sm input[type="time"],
        .input-group-sm input[type="datetime-local"],
        .input-group-sm input[type="month"] {
            line-height: 30px;
        }
        input[type="date"].input-lg,
        input[type="time"].input-lg,
        input[type="datetime-local"].input-lg,
        input[type="month"].input-lg,
        .input-group-lg input[type="date"],
        .input-group-lg input[type="time"],
        .input-group-lg input[type="datetime-local"],
        .input-group-lg input[type="month"] {
            line-height: 46px;
        }
    }
    .form-group {
        margin-bottom: 15px;
    }
    .close {
        float: right;
        font-size: 21px;
        font-weight: bold;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        filter: alpha(opacity=50);
        opacity: .5;
    }
    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: transparent;
        border: 0;
    }
    .modal-open {
        overflow: hidden;
    }
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0;
    }
    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform .3s ease-out;
        -o-transition:      -o-transform .3s ease-out;
        transition:         transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%);
    }
    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
    }
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }
    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px;
    }
    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    }
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 99999;
        background-color: #000;
    }
    .modal-backdrop.fade {
        filter: alpha(opacity=0);
        opacity: 0;
    }
    .modal-backdrop.in {
        filter: alpha(opacity=50);
        opacity: .5;
    }
    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
    }
    .modal-header .close {
        margin-top: -2px;
    }
    .modal-title {
        margin: 0;
        line-height: 1.42857143;
    }
    .modal-body {
        position: relative;
        padding: 15px;
    }
    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5;
    }
    .modal-footer .btn + .btn {
        margin-bottom: 0;
        margin-left: 5px;
    }
    .modal-footer .btn-group .btn + .btn {
        margin-left: -1px;
    }
    .modal-footer .btn-block + .btn-block {
        margin-left: 0;
    }
    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
    }
    @media (min-width: 768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto;
        }
        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        }
        .modal-sm {
            width: 300px;
        }
    }
    @media (min-width: 992px) {
        .modal-lg {
            width: 900px;
        }
    }
</style>

<header>
    <a href="{{url('/')}}" class="logo">
        <img src="{{url('images')}}/{{$header->logo}}" alt="Carlingford Accommodation Logo" />
    </a>
    <p class="slogan">{!!$header->slogan!!}</p>

        @include('frontend.include.nav')

        @include('frontend.include.footer')

</header>
@if (!Auth::check())
    <div class="login-btn-container">
        <a id="open_user_login_modal" class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</a>
    </div>
@else
    @if(Auth::user()->role_id ==2)
        <div class="dashboard-btn-container">
            <a href="{{url('user-dashboard')}}" class="btn btn-primary"><i class="fa fa-tachometer"></i> Dashboard</a>
            <a href="{{url('user-dashboard/logout')}}" class="btn btn-primary top-logout"><i class="fa fa-sign-out"></i>Logout</a>
        </div>
    @endif
@endif
<!-- Header-end -->
<div class="modal fade" id="user_login_modal" role="dialog" style="z-index: 999999;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #AB9A5F;color: #ffffff;">
                <button type="button" class="close" data-dismiss="modal" style="text-indent: 0;">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body" style="background-color: #ddd4be">
                <div class="row">
                    <div class="col-md-12">
                        <form id="user_login_form">
                            <section class="tabBlock">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="help-block">
                                            <strong id="error" style="color: #ae9765;"></strong>
                                        </span>
                                        <div class="fieldset">
                                            <div class="field">
                                                <input type="text" placeholder="Username" name="username" id="username"  class="form-control" autofocus  required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="fieldset">
                                            <div class="field">
                                                <input type="password" placeholder="Password" name="password" id="password"  class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="tabBlock">
                                <div class="row">
                                    <ul class="reservePropertyList"  style="list-style: none;padding: 10px;">

                                    </ul>
                                </div>
                            </section>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #ddd4be">
                <a id="login_button_on_modal" class="btn " style="background-color: #AB9A5F;color: #ffffff;">Login</a>
                <button type="button" class="btn btn-xs " data-dismiss="modal" style="background-color: #ffffff;color: #000000;">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
//        var el = '.js-menu';
//        var myMenu = cssCircleMenu(el);
        $('#user_login_modal').on('hidden.bs.modal', function (e) {
            $(this)
                .find("input")
                .val('')
                .end();
        });

        $(document).on('click', '#open_user_login_modal', function () {
            $('#user_login_modal').modal({
                backdrop: 'static'
            });
        });
        $("#username,#password").keyup(function (event) {
            $('#error').html('');
            if (event.keyCode === 13) {
                $("#login_button_on_modal").click();
            }
        });
        $(document).on('click', '#login_button_on_modal', function (e) {
            var parsleyForm = $('#user_login_form').parsley();
            parsleyForm.validate();
            if (!parsleyForm.isValid()) {
                return false;
            }
            else {
                e.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();
                $.ajax({
                    type: "POST",
                    url: "{{ url('user-login') }}",
                    dataType: "JSON",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "username": username,
                        "password": password
                    },

                    success: function (data) {
                        if (data == 1) {
                            window.location.href = '{{url('user-dashboard')}}';
                        } else if (data == -1) {
                            $('#password').val('');
                            $('#error').html('Email or Password Mismatch');
                        }
                    }
                });
            }

        });
    });
</script>