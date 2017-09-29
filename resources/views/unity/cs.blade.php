
@foreach($usings as $use)
using {{$use}};
@endforeach

namespace {{$namespace}} {
    public class {{$class_name}} : {{$implements}} {

        // Use this for initialization
        IEnumerator Start () {
            yield break;
        }
    }
}
