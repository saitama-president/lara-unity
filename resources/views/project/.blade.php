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
        @foreach([
            (object)["name"=>'test',"access_count"=>3,"success_count"=>2],
            (object)["name"=>'tost',"access_count"=>1,"success_count"=>4],
            ] as $api)
            <li onclick="alert(12345);">
            
            <span>{{$api->name}}</span>
            <span>{{$api->success_count}}/{{$api->access_count}}</span>
        </li>
        @endforeach
    </ul>
    
</div>


<script>

    setInterval(function(){
        $.ajax({
            url:"/",
            method:"GET",
            data:{
                
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