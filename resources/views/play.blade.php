@extends("layout.frame")

@section('head')
    
<link rel="stylesheet" href="{{url('css/play.css')}}" >

@endsection

<div>
    <h3>あいうえおかきくけこ</h3>
</div>

@section('contents')
<iframe id="JS_FRAME" src="{{url('play/source')}}">
</iframe>
@endsection