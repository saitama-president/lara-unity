@extends("layout.frame")

@section('head')
<script>
    update=function () {
        console.log("A");
    }
    
    $("#API_LIST").ready(
        setInterval(update,3000)

    );



</script>

<style>
    
    li{
        display: inline-block;
        min-width: 32px;
        width: 32px;
        
        min-height: 32px;
        height: 32px;
        background-color: gray;
        font-size: 10px;
        border-radius: 5px;
    }
    
</style>

@endsection

@section('contents')
<h1>API List</h1> 

<a href='{{url("admin/api/add")}}'>追加</a>

<ul id="API_LIST">
    
    @foreach($api_list as $api)
    <li>
        
        {{--
        <a href='{{url("admin/api/edit/$api->id")}}'>編</a>
        <a href='{{url("admin/api/edit/$api->id")}}'>状</a>
        <span>{{"AA"}}</span>
                
        <span>{{"BB"}}</span>
        --}}
    </li>
    @endforeach
    
</ul>

@endsection