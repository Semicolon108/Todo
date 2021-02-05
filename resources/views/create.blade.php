@extends('layout.app')

@section('content')
    <h3 class="text-center">Create a ToDo</h3>
    <x-alert />
    <form method="POST" action="{{route('todo.create')}}">
        @csrf
        <div class="d-flex">
            <input type="text" name="title" class="form-control" style="max-width:90%">
            <button type="submit" class="btn btn-primary ms-1">Submit</button>
        </div>
    </form>
@endsection