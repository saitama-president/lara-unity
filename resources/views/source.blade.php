@extends("layout.sandbox")

@section('head')
@endsection

@section('contents')
sbs
{{\App\LU\data\Script::find($id)->first()->source}}

<script>
{{\App\LU\data\Script::find($id)->first()->source}}
    
{{"
        class A{
            
            X(){
                return 12345;
            }
        }
        
        var ax=new A();
        
        alert(ax.X());
"}}
</script>

@endsection