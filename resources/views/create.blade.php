<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Создать</title>

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
            <h1>Создать публикацию</h1>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Заголовок</label>
                        <input class="form-control" type="text" name="title" value="" palceholder="Заголовок" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Описание</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <button class="btn btn-primary mb-3" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
    </body>
</html>
