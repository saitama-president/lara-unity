@extends("layout.frame")

@section('head')

<style>
    ul#ACTIVITY{
      list-style: none;
      margin: 0;
      padding: 0;
    }
    #ACTIVITY li{
        margin: 0;
        padding: 0;

        display: inline-block;
        vertical-align: bottom;
        background-color: gray;
        border-radius: 1em;
    }
</style>

@endsection

@section('contents')
<h1>API Activity</h1> 

{{--検索・ソートフォーム--}}
{{--草--}}

<div>

    <ul id="ACTIVITY">
    @for($i=-365;$i<0;$i++)
    <li>あ</li>
    @endfor
    </ul>
</div>



@endsection