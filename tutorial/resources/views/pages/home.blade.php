@extends('layouts.application')

@section('title', 'Alojz')

@section('content')
  <h1>{{ $post->title }}</h1>
  {!! $post->content !!}
@endsection