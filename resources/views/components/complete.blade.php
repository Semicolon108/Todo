<div>
    <form action="{{url('/complete/'.$id)}}" method="post" id="{{'complete-'.$id}}">
        @csrf
        @method('patch')
    </form>
</div>