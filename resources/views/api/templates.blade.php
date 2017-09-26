@extends("layout.frame")


@section('head')


@endsection

@section('contents')
<h1>Template List</h1> 

<p>
    
</p>

<h2>利用できるテンプレート</h2>
<ul>
    @foreach([
        (object)["id"=>1],
        (object)["id"=>2],
        (object)["id"=>3],
    ] as $template)
    <li>
        <h4>あああ</h4>
        <p>aaabbbccc</p>
        <a href='{{url("/admin/api/template_import_store/{$template->id}")}}' >直接インポート</a>
        <a href="" >ファイルをダウンロード</a>
    </li>
    @endforeach
    
</ul>


@endsection