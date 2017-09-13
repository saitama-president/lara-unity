@extends("layout.frame")

@section('head')
<script>
$("#API_LIST").ready(
    function(){
        alert(12345);
    }
);

</script>

@endsection

@section('contents')
<h1>API List</h1> 

<a href='{{url("admin/api/add")}}'>追加</a>

<ul id="API_LIST">
    @foreach($api_list as $api)
    <li>
        <a href='{{url("admin/api/edit?id=$api->id")}}'>編集</a>
        <a href='{{url("admin/api/edit?id=$api->id")}}'>状態</a>
        <span>{{$api->name}}</span>
    </li>
    @endforeach
</ul>

@endsection