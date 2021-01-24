<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
                justify-content: center;
            }
            div {
                margin: 0 auto;
width: 50%;
text-align:center;
            }
            form {
width: 100%
}
input {
font-size: 20px;
}
        </style>
    </head>
    <body class="antialiased">
    <div>
        <form method="POST" action="/"> 
            @csrf
            <input placeholder="type message" name="message">
        </form>
        @foreach ($messages as $message)
            <p>{{ $message->message }}</p>
        @endforeach
<div>
    </body>
</html>
