@extends("layout.frame")

@section('head')

<style>
    ul#ACTIVITY{
      list-style: none;
      margin: 0;
      padding: 0;
      width: 90%;
      height: 10em;
      
    }
    #ACTIVITY li{
        margin: 0;
        padding: 0;
        position: absolute;

        display: inline-block;
        vertical-align: bottom;
        content: "";
        min-width: 1em;
        width: 1em;
        max-width: 1em;

        min-height: 1em;
        height: 1em;
        max-height: 1em;
        
        background-color: gray;
        border-radius: 0.1em;
    }
    
    @for($i=0;$i<53;$i++)
    .x{{$i}} {
        left: calc(100% / 53 * {{$i}}} );
    }
    @endfor
    
    @for($i=0;$i<7;$i++)
    .y{{$i}} {
        top: calc(100% / 7 * {{$i}}} );
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
    @for($i=-365;$i<0;$i++)
        @php
            $y=-$i%7;
            $x=-$i/50;
        @endphp
        <li class="x{{$x}} y{{$y}}">{{$i+365}}</li>
    @endfor
    </ul>
</div>



@endsection