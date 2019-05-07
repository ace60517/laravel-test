{{-- {{$User}} --}}
<?php
    $inte = 1;
    $str = "abcdef";
    $b = array(1,1,2,3,5,8,array('p', 'h'));
    $arr = get_defined_vars();
    print_r($arr["b"]);
    print_r($b);
    

    $arr = array('a','b','c','d');
    print_r("<p>is_array = ".is_array($arr)."</p>");
    print_r("<p>substr = ".substr($str,3,2)."</p>");
    // echo ("<p>in_array = ".in_array(array('a'),$str)."</p>");
    $bool_val = in_array('p',$b);//in_array(array('p', 'h'), $a)
    echo $bool_val ? 'true' : 'false';
?>

@foreach ($todos as $todo)
    <p>
        {{ $todo->id . "." . $todo->title}}
        {{-- <a href="todo/{{ $todo->id }}"> Delete</a> --}}
        <form action="todo/{{ $todo->id }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value='Delete'>
        </form>
    </p>
@endforeach

<form action="/todo" method="POST">
    @csrf
    <input type="text" placeholder="請輸入東西" name="title">
    <input type="submit">
</form>
