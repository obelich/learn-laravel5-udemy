@extends('layouts.master')




@section('content')

  <h1>Primera Mi primera pagina en Laravel</h1>

  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur corporis deleniti dolores enim et eum ex harum ipsa libero magnam, molestias nemo nihil quas recusandae temporibus ut voluptatem, voluptates.

  </p>

  <ul>
    @for($i = 0; $i < 5; $i++)
      @if($i % 2 === 0)
        <li>Iteration {{ $i + 1  }}</li>
      @endif

    @endfor
  </ul>
  <br />

  <form action="{{ route('benice')  }}" method="post">
    <label>Yo quiero</label>
    <select name="action">
      <option value="greet">Greet</option>
      <option value="hug">Hug</option>
      <option value="salute">Salute</option>

    </select>

    <input type="text" name="name">
    <button type="submit"> Accion Sugoi</button>
    <input type="hidden" value="{{  Session::token() }}" name="_token">
  </form>

@endsection