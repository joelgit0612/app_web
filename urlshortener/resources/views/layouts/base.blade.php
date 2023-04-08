<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>URL Shortener</title>
    <style>
        .error-msg{
            color: pink;
            font-style: italic;
            font-weight: bold;
        }

        body{
            background: #777;
            color: #fff;
        }

        .wrapper{
            width: 680px;
            max-width: 70%;
            margin: 0 auto;
            padding-top: 8em;
            text-align: center;
        }

        a{
            color: #ccc;
        }

        input [type="text"]{
            width: 100%;
            border: none;
            border-radius: 3px;
            padding: 1em 0,5em;
        }
    </style>
</head>
<body>
    <div class="wrapper">@yield('content')</div>
    
</body>
</html>