@extends("layout.frame")

@section('head')

<style>
    ul#API_MAP{
      list-style: none;
      display: inline-block;
    }
    #API_MAP li{
        display: inline-block;
        background-color: gray;
        border-radius: 1em;
    }
    
</style>

@endsection

@section('contents')
<h1>Inspect API LIST</h1> 

{{--検索・ソートフォーム--}}
<div>
    <form action="" method="GET">
        
        {{csrf_field()}}
        <select name="sort">
            <option selected>Default</option>
        </select>
        <input type="submit" />
    </form>
</div>


<div>    
    <ul id="API_MAP">
        @foreach(App\LU\data\API::All() as $api)
        <li id="API_{{$api->id}}">
            
            <span>{{$api->entry_point}}</span>
            
            <span></span>
        </li>
        @endforeach
    </ul>
    
</div>


<script>
    {{--ダミー実行用のリクエスト--}}
    
    

    {{--監視用の定期リクエスト--}}
    setInterval(function(){
        $.ajax({
            url:"/",
            method:"GET",
            data:{
                
            },
            headers:{
                
            },
            success:function(){
                console.log("success");
            },
            error:function(){
                console.log("fail...");
            }            
        });
        console.log('AAAA');
    },3000);
</script>
@endsection