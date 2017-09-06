@extends("layout.frame")

@section('head')
@endsection

@section('contents')
<h1>Edit Projects</h1> 

<div>
    <a href="{{url('projects/add')}}">Add Project</a>
</div>

<table>    
    <thead>
        <th></th>
        <th></th>
    </thead>
    <tbody>
@foreach(\App\LU\data\Project::all() as $p)
<tr>
    <td>
        <a href='{{url("projects/edit/$p->id")}}'>Edit</a>
    </td>
    <td>
        <a href='{{url("play/$p->id")}}'>Play</a>
    </td>
</tr>
@endforeach
    </tbody>


</table>

@endsection