@extends("layout.frame")

@section('head')

@endsection

@section('contents')
<h1>Login</h1> 

<form action="{{url('admin/login')}}" method="POST">
  <input type="password" name="password"/>
  {{csrf_field()}}
  <button>Login</button>
</form>

@endsection