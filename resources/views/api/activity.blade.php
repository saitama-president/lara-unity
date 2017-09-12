@extends("layout.frame")

@section('head')

<style>
    ul#ACTIVITY{
      list-style: none;
      position: relative;
      margin: 0;
      padding: 0;
      width: 500px;
      height: 64px;
      
    }
    #ACTIVITY li{
        margin: 0;
        padding: 0;
        position: absolute;

        display: inline-block;
        vertical-align: bottom;
        content: "";
        min-width: 8px;
        width: 8px;
        max-width: 8px;

        min-height: 8px;
        height: 8px;
        max-height: 8px;
        
        background-color: gray;
        border-radius: 1px;
    }
    
    @for($i=0;$i<50;$i++)
    .x{{$i}} {
        left: {{ 2 * $i }}%;
    }
    @endfor
    
    @for($i=0;$i<7;$i++)
    .y{{$i}} {
        top: {{ (100/7) * ($i % 7) }}%;
    }
    @endfor
    
    
</style>

@endsection

@section('contents')
<h1>API Activity</h1> 

{{--検索・ソートフォーム--}}
{{--草--}}

<div>

    <ul id="ACTIVITY">
    @for($i=0;$i<365;$i++)
        @php
            $y=$i%7;
            $x=(int)($i/7);
        @endphp
        <li class="x{{$x}} y{{$y}}"></li>
    @endfor
    </ul>
</div>



@endsection