@extends("layout.frame")

@section('head')

@endsection

@section('contents')
<h1>Menu</h1> 

<ul>
    <li><a href="{{url('admin/api/list')}}">API List</a></li>
    <li><a href="{{url('admin/api/status')}}">API Status</a></li>
    <li><a href="{{url('admin/api/status')}}">Play</a></li>
</ul>


@endsection