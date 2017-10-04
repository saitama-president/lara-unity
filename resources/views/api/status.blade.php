@extends("layout.frame")


@section('head')


@endsection

@section('contents')
<h1>API Statuses</h1> 

<div>
    <form action="">
        
        
    </form>    
</div>

<div>
  <table>
    <thead>
      <tr>
        <th>entry_point</th>
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