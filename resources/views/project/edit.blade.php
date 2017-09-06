@extends("layout.frame")

@section('head')
@endsection

@section('contents')
<h1>Edit Source</h1> 

ID={{$id}}
<a href='{{url("play/{{$id}}")}}' target="_blank" >Play</a>
<form method="POST" action="{{url('projects/edit_commit')}}">    
    <textarea name="source">{{\App\LU\data\Script::find($id)->first()->source}}</textarea><br>
    <input type=hidden name="id" value="{{$id}}"/>
    {{csrf_field()}}
    <input type=submit />
</form>

</table>

@endsection