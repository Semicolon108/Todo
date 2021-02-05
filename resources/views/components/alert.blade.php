<div>
    @if (Session::has('message'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('message')}}
            </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-primary" role="alert">
            @foreach ($errors->all() as $error)
                    {{$error}}
            @endforeach
        </div>
    @endif
</div>
