<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Mi botón
    </button>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
        </div>
    @endforeach
    {{ $posts->links() }}
</body>

</html>
