@extends('layout.app')

@section('content')
    <h3 class="text-center">Edit ToDo</h3>
    <x-alert />
    <form method="post" action="{{url('/update', $todo->id)}}">
        @csrf
        @method('patch')
        <div class="d-flex">
            <input type="text" name="title" value="{{$todo->title}}" class="form-control" style="max-width:90%">
            <button type="submit" class="btn btn-primary ms-1">Submit</button>
        </div>
    </form>
@endsection