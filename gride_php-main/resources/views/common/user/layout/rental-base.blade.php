{{ App::setLocale(  isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en'  ) }}
<!DOCTYPE html>
<html>
   <head>
      <title>
      {{ __(Helper::getSettings()->site->site_title) }}
      </title>
      <meta charset='utf-8'>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <meta content='website' property='og:type'>
      <link rel="shortcut icon" type="image/png" href="{{ Helper::getFavIcon() }}"/>
      @section('styles')
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/icons/css/ionicons.min.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/icons/css/linearicons.css')}}"/>
      <link rel='stylesheet' href="https://fonts.googleapis.com/icon?family=Material+Icons" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/media-mobile.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/media-tab.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/media-lap.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/animate.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" />
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" />
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/plugins/clockpicker-wearout/css/jquery-clockpicker.min.css')}}"/>
      @show
     
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/stylesheet.css')}}"/>
      
      @if(@Request::segment(2)=='store' && @Request::segment(3) !='order' )
       <link rel='stylesheet' type='text/css' href="{{ asset('assets/foody/foody.css')}}"/>
      @elseif(@Request::segment(1)=='user' && @Request::segment(2)=='store' && @Request::segment(3)=='order')

      
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/foody/foody.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/provider.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/user.css')}}"/>
        <!-- <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/user.css')}}"/> -->
      @else
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/provider.css')}}"/>
      <link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/user.css')}}"/>
      @endif
      <style type="text/css">
        a.log-out-icon {
            border: 1px solid #fff;
            padding: 7px 13px;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }
        a.log-out-icon:hover {
            background: #fff;
        }
        a.log-out-icon:hover i{
            color: #F26821;
        }
        .user-img {
            width: 50px;
            box-shadow: 0px 0px 15px 1px rgba(81, 77, 92, 0.2);
            border-radius: 50%;
            margin-right: 30px;
        }
        .services{
            margin-right: 30px;
            color: #fff;
        }
        .inbox-tab{
            display:inline;
        }
        .messageCount{
            background: #007bff;
            position: absolute;
            top: 0;
            padding: 2px;
            text-align: center;
            height: 25px;
            width: 25px;
            border-radius: 50%;
            color: #fff;
            display:none;
        }
        #switch{
            color: #fff;
            margin-right: 30px;
        }
        .css-191lty2 a:hover, #switch:hover{
            color: #ffffffba;
        }
      </style>
   </head>
<body>
<header class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation4 MuiAppBar-root MuiAppBar-colorPrimary MuiAppBar-positionFixed jss132 jss141 mui-fixed css-8fpmj4">
    <div class="MuiToolbar-root jss136 jss143 MuiToolbar-gutters MuiToolbar-regular css-191lty2">
        <div class="MuiGrid-root MuiGrid-container jss139 css-v3z1wi">
            <a class="MuiButtonBase-root css-1b47e06" tabindex="0" href="{{url('/')}}/user/rental/dashboard">
                <div class="jss144 jss147">
                    
                    <h1 class="MuiTypography-root MuiTypography-h5 jss145 css-3kdmgz">Gride</h1>
                    <p class="MuiTypography-root MuiTypography-body1 jss146 css-11ujx7e"></p>
                </div>
            </a>
            <span class="menu-open-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <div class="PrivateSwipeArea-root css-x15wq9" style="width: 20px;"></div>
        <a href="javascript:void(0)" id="switch" title="Switch to Owner">Switch to Owner</a>
        <a href="{{url('/')}}/user/home" class="services" title="Services">Services</a>
        <a href="{{url('/')}}/user/profile/general" class="profile-icon" title="Profile"><img src="" class="user_image user_image user-img"></a>
        <a href="{{url('/')}}/user/logout" class="log-out-icon" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>
</header>
<div class="jss119">
    <div class="jss129">
        <div class="MuiDrawer-root MuiDrawer-docked jss151 css-1tu59u4">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation0 jss151 MuiDrawer-paper MuiDrawer-paperAnchorLeft MuiDrawer-paperAnchorDockedLeft css-rdx7ew">
                <div class="jss154"></div>
                <hr class="MuiDivider-root MuiDivider-fullWidth css-39bbo6">
                <div></div>
                <a class="MuiButtonBase-root MuiFab-root MuiFab-extended MuiFab-sizeLarge MuiFab-primary jss155 css-cuujzo" tabindex="0" id="list-car-button" href="{{url('/')}}/user/rental/booking"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium jss156 css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AddIcon"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path></svg>BOOK A CAR<span class="MuiTouchRipple-root css-w0pj6f"></span>
                </a>
                <nav class="MuiList-root MuiList-padding css-1ontqvh">
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button Mui-selected css-s21y5o" tabindex="0" role="button" href="{{url('/')}}/user/rental/dashboard">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="DashboardOutlinedIcon"><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Dashboard</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="rentals-drawer-link" href="{{url('/')}}/user/rental/listing">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="EventNoteOutlinedIcon"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zM5 7V5h14v2H5zm2 4h10v2H7zm0 4h7v2H7z"></path></svg>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Rentals</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="rentals-drawer-link" href="{{url('/')}}/user/rental/history">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="EventNoteOutlinedIcon"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zM5 7V5h14v2H5zm2 4h10v2H7zm0 4h7v2H7z"></path></svg>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">History</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="rentals-drawer-link" href="{{url('/')}}/user/rental/messages">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <i class="material-icons">markunread_mailbox</i>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc inbox-tab">Inbox</span><span class="messageCount"></span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="rentals-drawer-link" href="{{url('/')}}/user/profile/general">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <i class="material-icons">settings</i>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Setting</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    
                    <hr class="MuiDivider-root MuiDivider-fullWidth css-39bbo6">
                </nav>
            </div>
        </div>

@yield('content')
<script>
         window.room = '{{base64_decode(Helper::getSaltKey())}}';
         window.socket_url = '{{Helper::getSocketUrl()}}';
      </script>
      @section('scripts')
      <script type="text/javascript" src="{{ asset('assets/plugins/jquery-3.3.1.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/popper.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

      <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}" ></script>

      <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
      <script type="text/javascript" src="{{ asset('assets/plugins/clockpicker-wearout/js/jquery-clockpicker.min.js') }}"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
      
      <script src="{{ asset('assets/layout/js/script.js')}}"></script>
      <script src="{{ asset('assets/layout/js/api.js')}}"></script>
      <script type="text/javascript">
        $("span.menu-open-mobile i").click(function(){
          $(".MuiDrawer-root.css-1tu59u4").toggleClass("main-menu");
        });
      </script>
      @show
      <script>
      $(document).ready(function() {
            var userSettings = getUserDetails();

            if(userSettings.id == 0) {
               
               $('.profile-icon').attr('href', "{{ url('user/login') }}");
               
            }

            $(".user_name").text(userSettings.first_name);


            $(".user_image").attr('src', userSettings.picture ? userSettings.picture : "{{asset('assets/layout/images/admin/avatar.jpg')}}" );
         });

getNotification();

function getNotification(){
    $.ajax({
        url: "https://api.gridetech.com/api/v1/user/transport/chat-notification",
        type: "GET",
        headers: {
            Authorization: "Bearer " + getToken("user")
        },
        success: function(response){
            if(response.responseData.newmessages!=0 || response.responseData.newmessages!=''){
                $('.messageCount').text(response.responseData.newmessages);
                $('.messageCount').show();
            }else{
                $('.messageCount').hide();
            }
        },
        complete: function(){
            setTimeout(getNotification, 3000);
        }
    });
}

$('#switch').click(function(){
    if(getToken("owner")!='' && getToken("owner")!==null){
        window.location.replace("{{ url('/owner/dashboard') }}");
    }else{
        $.ajax({
            url: getBaseUrl() + "/user/switchtoowner",
            type: "get",
            headers: {
                Authorization: "Bearer " + getToken("user")
            },
            processData: false,
            contentType: false,
            success: function(response, textStatus, jqXHR) {
               var data = parseData(response);
               setToken("owner", data.responseData.access_token);
               setUserDetails(data.responseData.user);
               document.cookie="user_language="+data.responseData.user.language+"; path=/";
               window.location.replace("{{ url('/owner/dashboard') }}");
               hideLoader();
            },
            error: function(jqXHR, textStatus, errorThrown) {
               //hideLoader();
               alertMessage(textStatus, jqXHR.responseJSON.message, "danger");
            }
         });
    }
});
</script>
</body>
</html>