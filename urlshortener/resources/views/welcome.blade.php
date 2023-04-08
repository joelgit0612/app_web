@extends('layouts.base')

@section('content')
   <h1>The url shortener</h1>

   <form method="POST">
    {{ csrf_field() }}
     <input type="text" name="url" placeholder="Please enter your original URL here" value="{{old('url')}}"> 
    {!!$errors->first('url', '<p class="error-msg">:message<p>')!!}
   </form>
@stop