<div>
    
    <form action="{{url('/edit',$id)}}" style="display:none" method="get" id="{{'edit-'.$id}}">
        @csrf
    </form>
</div>