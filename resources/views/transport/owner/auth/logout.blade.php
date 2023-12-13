@extends('common.user.layout.base')

@section('scripts')
@parent
<script>

$.ajax({
        type:"POST",
        url: getBaseUrl() + "/user/owner/logout",
        headers: {
            Authorization: "Bearer " + getToken("owner")
        },
        beforeSend: function() {
            showLoader();
        },
        success:function(data){
            if(getToken("user")!=='null'){
                $.ajax({
                    type:"POST",
                    url: getBaseUrl() + "/user/logout",
                    headers: {
                        Authorization: "Bearer " + getToken("user")
                    },
                    beforeSend: function() {
                        showLoader();
                    },
                    success:function(data){
                        hideLoader();
                        removeStorage('user');
                        removeStorage('owner');
                        window.location.replace("{{ url('/owner/login') }}");
                    }
                });
            }else{
                hideLoader();
                removeStorage('owner');
                window.location.replace("{{ url('/owner/login') }}");
            }
        }, 
        error: (jqXHR, textStatus, errorThrown) => {
            hideLoader();
            removeStorage('owner');
            window.location.replace("{{ url('/owner/login') }}");
        }
    });

</script>
@stop
