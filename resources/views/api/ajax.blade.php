<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

<script>
    
API={
@foreach($api_list as $index=>$api)

@if (0<$index) , @endif

{{$api->entry_point}}:
function(
        
        ){
    $.ajax({
        url: {{"/api/$api->entry_point"}},
        method:'{{$api->method}}',
        cache: false,
        success: function(html){
            alert("{{$api->entry_point}} OK");
        },
        error:function(e){
            alert("{{$api->entry_point}} NG");
        }
    });
}

@endforeach

};


</script>

    




