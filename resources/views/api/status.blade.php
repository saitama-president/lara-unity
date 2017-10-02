@extends("layout.frame")


@section('head')


@endsection

@section('contents')
<h1>API List</h1> 

<a href='{{url("admin/api/add")}}'>追加</a>

<div>
  <table>
    <thead>
      <tr>
        <th>A</th>
        <th>B</th>
      </tr>
    </thead>
    <tbody>
      @foreach(\App\LU\data\API::all() as $api)
      <tr>
        <td>A</td>          
        <td>B</td>        
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>


@endsection