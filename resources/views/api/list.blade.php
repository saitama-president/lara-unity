@extends("layout.frame")


@section('head')


@endsection

@section('contents')
<h1>API List</h1> 

<a href="{{url("admin/api/status")}}">Realtime Status</a>

<a href='{{url("admin/api/add")}}'>追加</a>

<a href='{{url("admin/api/import")}}'>インポート</a>
<a href='{{url("admin/api/export")}}'>エクスポート</a>

<a href='{{url("admin/api/templates")}}'>テンプレート一覧</a>
<div>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>EntryPoint</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\App\LU\edit_data\API::all() as $api)
            <tr class="link-row" data-href="">
                <td>{{$api->method}}</td>          
                <td>{{$api->entry_point}}</td>
                <td>削除</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection