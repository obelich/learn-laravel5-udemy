@extends('layouts.master')

@section('content')
  <a href="{{ route('home')  }}">Home</a>
  <h1>I Salute you {{ $name === null ? 'Guest' : $name  }}</h1>
@stop