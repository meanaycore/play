@extends('layout')

@section('content')

  <ul>  {{ $card->title }}

  @foreach ( $card->notes as $note )

    <li> {{ $note->body }} </li>

  @endforeach

</ul>
@stop
