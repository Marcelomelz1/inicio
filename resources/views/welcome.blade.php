@extends('layouts.main')

@section('title', 'titulo do site')

@section('content')

@foreach($events as $event)
    <p> {{ $event->title }} -- {{ $event->description}} </p>
@endforeach


@endsection