<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Публикации</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body class="antialiased">
        <div class="container-xl">
            <h1>Публикации</h1>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <table class="table table-striped-columns">
                    <tr>
                        <th>№</th>
                        <th>Заголовок</th>
                        <th>Описание</th>
                    </tr>
                    @foreach ($publication as $items)
                        <tr>
                            <td>{{ $items->id }}</td>
                            <td>{{ $items->title }}</td>
                            <td>{{ $items->description }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <a class="btn btn-link" href="/pubcreate">Создать</a>
        </div>
    </body>
</html>
