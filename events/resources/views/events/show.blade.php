@extends('layouts.app')

@section('content')
<h1>Events</h1>

<p>{{$event->description}}</p>

<a class="btn btn-secondary" href="{{route('events.edit', $event)}}">Modifier</a> 
<form action="{{route('events.destroy', $event)}}" method="POST" class="inline-block">
    {{ csrf_field() }}
    {{method_field('DELETE')}}
    <input type="submit" value="Suprimer" class="btn btn-danger">
</form>
<hr>
<p><a href="{{route('home')}}">Tous les évenements</a></p>

@stop