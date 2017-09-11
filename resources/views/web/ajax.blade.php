
<script>
    function {{$API.name}} (){
        $.ajax({
            url:"/",
            method:"{{$API.method}}",
            data:{

            },
            headers:{

            },
                success:function(){
                console.log("success {{$API.name}}");
            },
                error:function(){
                console.log("fail... {{$API.name}}");
            }
        });
    }
</script>