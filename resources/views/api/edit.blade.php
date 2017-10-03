@extends("layout.frame")

@section('head')
<script>
    
    function AddParam(){
        
        var $e=$("<li>",{
            
            
        }).append($("<input type='text'>",{
            name:"params[]"
        })                
        );

        $("#API_PARAMS").append($e);
        
    }
    
    function DelParam(){
    }

</script>


@endsection

@section('contents')
<h1>API Edit</h1>

<div class="message">{{session("message")}}</div>

<form action='{{url("admin/api/edit/commit")}}' method="POST" >
    <table>
        <tr>
            <th>Method</th>
            <td>
                
                <span>POST<input type="radio" name="method" value="POST" 
                                 @if(empty($api)||$api->method=="POST")
                                    checked
                                 @endif
                ></span>
                <span>GET <input type="radio" name="method" value="GET"
                                 @if($api->method =="GET")
                                    checked
                                 @endif                                 
                                 ></span>                
            </td>
        </tr>
        <tr>
            <th>ENDPOINT</th>
            <td>
                <input type="text" name="entry_point" 
                       placeholder="e.g. 'game/update friend/request '" 
                       value="{{$api->entry_point}}">
            </td>
        </tr>
        <tr>
            <th>Controller</th>
            <td>
                <input type="text" 
                       name="controller" 
                       placeholder="input Controller name" 
                       value="{{$api->controller()}}">
                Controller
            </td>
        </tr>
        <tr>
            <th>Action</th>
            <td>
                <input type="text" 
                       name="action" 
                       placeholder="input action method name" 
                       value="{{$api->action()}}">
                Action
            </td>
        </tr>
        
        <tr>
            <th>Params</th>
            <td>
                <a href="javascript:AddParam();"">+</a>
                <ul id="API_PARAMS">
                    
                    @foreach($api->params() as $param)
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