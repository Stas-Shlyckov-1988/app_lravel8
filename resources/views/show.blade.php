<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Детальная информация</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="antialiased">
        <div class="container-xl">
            <h1>Детальная информация</h1>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <table class="table">
                <tr>
                    <td>№</td>
                    <td>{{ $publication['id'] }}</td>
                </tr>
                <tr>
                    <td>Заголовок</td>
                    <td>{{ $publication['title'] }}</td>
                </tr>
                  <tr>
                    <td>Цена</td>
                    <td>{{ $publication['price'] }}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{{ $publication['description'] }}</td>
                </tr>
                <tr>
                    <td>Фото<td>
                    <td>
                        @foreach ($publication->files($publication['id']) as $image)
                                <img width="30%" class="media-object" src="{{ $image->path }}{{ $image->name }}">
                        @endforeach
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>
