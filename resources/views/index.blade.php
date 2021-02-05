@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-between px-5 border-bottom">
        <h3 class="text-center">Todo List</h3>
        <a href="{{url('/create')}}"><span class="fas fa-plus-circle my-auto"></span></a>
    </div>
    <x-alert />
    <div class="mt-3">
        @foreach ($todos as $todo)
            <div class="d-flex my-2 p-3 border rounded justify-content-between">
                @if ($todo->completed)
                    <div class="d-flex">
                        <span class="fas fa-check"></span>
                        <h6 class="ms-3"><s>{{$todo->title}}</s></h6>
                    </div>
                    <div style="width: 45% text-right">
                        <a href="{{url("/edit/".$todo->id)}}"><span class="fas fa-edit"></span></a>
                        &nbsp;
                        <a href="{{url("/delete/".$todo->id)}}"><span class="fas fa-trash"></span></a>
                    </div>
                @else
                    <div class="d-flex">
                        <span role="button" class="fas fa-check" id="{{$todo->id}}" onclick="complete(this.id)"></span>
                        <x-complete id="{{$todo->id}}" />
                        <h6 class="ms-3">{{$todo->title}}</h6>
                    </div>
                    <div style="width: 45%" class="text-right d-flex justify-content-end">
                        <span role="button" class="fas fa-edit" id="{{$todo->id}}" onclick="edit(this.id)"></span>
                        <x-edit-form id="{{$todo->id}}" />
                        &nbsp;
                        <span role="button" class="fas fa-trash" id="{{$todo->id}}" onclick="submitDelete(this.id)"></span>
                        <x-delete-form id="{{$todo->id}}" />
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endsection
@section('script')
    <script>
        const submitDelete = (id) => {

            //e.preventDefault();
            $("#delete-"+id).submit();
        }

        const complete = (id) => {
            //e.preventDefault();
            $("#complete-"+id).submit();
        }

        const edit = (id) => {
            $("#edit-"+id).submit();
        }
    </script>
@endsection


