@extends("layout.frame")

@section('head')

@endsection

@section('contents')
<h1>API Edit</h1> 

<form action='{{url("admin/api/edit/commit")}}' method="POST" >
    <table>
        <tr>
            <th></th>
            <td>
                <span>POST<input type="radio" name="method" value="POST" checked></span>
                <span>GET <input type="radio" name="method" value="GET"></span>                
            </td>
        </tr>
        <tr>
            <th>ENDPOINT</th>
            <td>
                <input type="text" name="entry_point" placeholder="e.g. 'game/update friend/request '" value="">
            </td>
        </tr>
        <tr>
            <th>Controller@Action</th>
            <td>
                <input type="text" name="action" placeholder="e.g. 'game@play battle@start '" value="">
            </td>
        </tr>
        <tr>
            <th>Params</th>
            <td>
                <ul>
                    @foreach($params as $p)
                    <li></li>
                    @endforeach
                </ul>
            </td>
        </tr>
        
    </table>
    
    <ul>
       
    </ul>
    
    {{csrf_field()}}
    <input type=hidden name="id" value="{{$id}}" />
    <button>登録</button>
    <a href="{{url('admin/api/list')}}">戻る</a>
</form>


@endsection