@extends("layout.frame")

@section('head')
    
<link rel="stylesheet" href="{{url('css/play.css')}}" >

@endsection

<div>
    <h3>playing...</h3>
</div>

@section('contents')
<iframe id="JS_FRAME" src="{{url('play/source/')}}" scrolling="no" frameborder="no">
</iframe>
@endsection