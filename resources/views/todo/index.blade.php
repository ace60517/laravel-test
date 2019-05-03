{{-- {{$User}} --}}

@foreach ($User as $usr)
    <p>{{ $usr->id. "." . $usr->name."\n"}}</p>
    <form action="todo/{{ $usr->id }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
        <input type="submit" value='Delete'>
    </form>
@endforeach

@foreach ($todos as $todo)
    <p>
        {{ $todo->id . "." . $todo->title}}
        {{-- <a href="todo/{{ $todo->id }}"> Delete</a> --}}
        {{-- <form action="todo/{{ $todo->id }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value='Delete'>
        </form> --}}
    </p>
@endforeach

<form action="/todo" method="POST">
    @csrf
    <input type="text" placeholder="請輸入東西" name="title">
    <input type="submit">
</form>
