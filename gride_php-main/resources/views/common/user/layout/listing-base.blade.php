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
        .photo-section .user-img {
            width: 150px;
            height:150px;
            box-shadow: 0px 0px 15px 1px rgba(81, 77, 92, 0.2);
            border-radius: 50%;
            margin-right: 30px;
        }
        .inbox-tab{
            display:inline;
        }
        .services{
            margin-right: 30px;
            color: #fff;
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
            <a class="MuiButtonBase-root css-1b47e06" tabindex="0" href="{{url('/')}}/owner/dashboard">
                <div class="jss144 jss147">
                    
                    <h1 class="MuiTypography-root MuiTypography-h5 jss145 css-3kdmgz">Gride</h1>
                    <p class="MuiTypography-root MuiTypography-body1 jss146 css-11ujx7e"></p>
                </div>
            </a>
            <span class="menu-open-mobile"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <div class="PrivateSwipeArea-root css-x15wq9" style="width: 20px;"></div>
        <a href="javascript:void(0)" id="switch" title="Switch to Driver">Switch to Driver</a>
        <a href="{{url('/')}}/user/home" class="services" title="Services">Services</a>
        <a href="{{url('/')}}/owner/profile/general" class="profile-icon" title="Profile"><img src="" class="user_image user_image user-img"></a>
        <a href="{{url('/')}}/owner/logout" class="log-out-icon" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
    </div>
</header>
<div class="jss119">
    <div class="jss129">
        <div class="MuiDrawer-root MuiDrawer-docked jss151 css-1tu59u4">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation0 jss151 MuiDrawer-paper MuiDrawer-paperAnchorLeft MuiDrawer-paperAnchorDockedLeft css-rdx7ew">
                <div class="jss154"></div>
                <hr class="MuiDivider-root MuiDivider-fullWidth css-39bbo6">
                <div></div>
                <a class="MuiButtonBase-root MuiFab-root MuiFab-extended MuiFab-sizeLarge MuiFab-primary jss155 css-cuujzo" tabindex="0" id="list-car-button" href="{{url('/')}}/owner/add-listing"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium jss156 css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AddIcon"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path></svg>Add New Listing<span class="MuiTouchRipple-root css-w0pj6f"></span>
                </a>
                <nav class="MuiList-root MuiList-padding css-1ontqvh">
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button Mui-selected css-s21y5o" tabindex="0" role="button" href="{{url('/')}}/owner/dashboard">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="DashboardOutlinedIcon"><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"></path></svg>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Dashboard</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="rentals-drawer-link" href="{{url('/')}}/owner/listing">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="EventNoteOutlinedIcon"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zM5 7V5h14v2H5zm2 4h10v2H7zm0 4h7v2H7z"></path></svg>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Listing</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="rentals-drawer-link" href="{{url('/')}}/owner/rentals">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <i class="fa fa-car" style="font-size: 22px"></i>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Rentals</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="financials-drawer-link" href="{{url('/')}}/owner/finance">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="MonetizationOnOutlinedIcon"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"></path></svg>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc">Financials</span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="financials-drawer-link" href="{{url('/')}}/owner/messages">
                        <div class="MuiListItemIcon-root css-1f8bwsm">
                            <i class="material-icons">markunread_mailbox</i>
                        </div>
                        <div class="MuiListItemText-root css-1tsvksn">
                            <span class="MuiTypography-root MuiTypography-body1 jss157 MuiListItemText-primary css-y0tcuc inbox-tab">Inbox</span><span class="messageCount"></span>
                        </div>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </a>
                    <a class="MuiButtonBase-root jss185 MuiListItem-root MuiListItem-gutters MuiListItem-padding MuiListItem-button css-s21y5o" tabindex="0" role="button" id="financials-drawer-link" href="{{url('/')}}/owner/profile/general">
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
               if(typeof userSettings.city_id == "undefined") {
                 window.location.replace("{{ url('/user/home') }}");
               }
               $('.header-submenu .dropdown-item, .menu-two, .menu-three, .menu-four').remove();

               $('.profile-icon').attr('href', "{{ url('user/login') }}");
               
            }

            $(".user_name").text(userSettings.first_name);


            $(".user_image").attr('src', userSettings.picture ? userSettings.picture : "{{asset('assets/layout/images/admin/avatar.jpg')}}" );
         });

      getNotification();

function getNotification(){
    $.ajax({
        url: "https://api.gridetech.com/api/v1/user/transport/owner/chat-notification",
        type: "GET",
        headers: {
            Authorization: "Bearer " + getToken("owner")
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
    if(getToken("user")!='' && getToken("user")!==null){
        window.location.replace("{{ url('/user/rental/dashboard') }}");
    }else{
        $.ajax({
            url: getBaseUrl() + "/user/owner/switchtouser",
            type: "get",
            headers: {
                Authorization: "Bearer " + getToken("owner")
            },
            processData: false,
            contentType: false,
            success: function(response, textStatus, jqXHR) {
               var data = parseData(response);
               setToken("user", data.responseData.access_token);
               setUserDetails(data.responseData.user);
               document.cookie="user_language="+data.responseData.user.language+"; path=/";
               window.location.replace("{{ url('/user/rental/dashboard') }}");
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