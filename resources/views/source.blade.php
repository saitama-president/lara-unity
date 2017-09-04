@extends("layout.sandbox")

@section('head')
@endsection

@section('contents')

<script>
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