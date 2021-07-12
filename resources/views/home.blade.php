<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Laravel first steps</title>
    </head>
    <body>
        <main>
            @if (count($skills) > 0)
            <h1>'Till now I learned:</h1>
            <ul>
                @foreach($skills as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
            @else
            <h1>I've learned nothing!</h1>
            @endif
        </main>
        <footer>
            <a href="{{ url('/otherpage') }}">Link to another page</a>
        </footer>
    </body>
</html>