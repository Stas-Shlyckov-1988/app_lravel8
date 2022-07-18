<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                <form method="POST" enctype="multipart/form-data">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Заголовок</label>
                        <input required maxlegth="200" class="form-control" type="text" name="title" value="" palceholder="Заголовок" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Описание</label>
                        <textarea required maxlegth="1000" class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Цена</label>
                        <input required class="form-control" type="text" name="price" value="" palceholder="Цена" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Описание</label>
                        <input class="form-control photo_files" type="file" name="photo[]" multiple="multiple" />
                    </div>
                    <button class="btn btn-primary publication_save mb-3" type="submit">Сохранить</button>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
