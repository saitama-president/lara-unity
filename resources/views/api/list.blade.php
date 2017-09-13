@extends("layout.frame")

@section('head')

@endsection

@section('contents')
<h1>API List</h1> 

<a href="">追加</a>

<ul>
    @foreach($api_list as $api)
    <li>
        <a href='{{url("admin/api/edit?id=$api->id")}}'>編集</a>
        <span>{{$api->name}}</span>
    </li>
    @endforeach
</ul>

@endsection