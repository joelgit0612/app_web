<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventbrote</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/app.css')}}">
</head>
<body>
    @include('layouts.partials._nav')
    
    <div class="container">
        @if (session()->has('notification.message'))
         
        <div class="alert alert-{{session('notification.type')}}">
        
            {{session('notification.message')}}

        </div>
        @endif
        @yield('content')
    </div>
   
</body>
</html>