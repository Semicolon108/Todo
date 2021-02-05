<div>
    <form action="{{url('/delete',$id)}}" style="display:none" method="post" id="{{'delete-'.$id}}">
        @csrf
        @method('delete')
    </form>
</div>