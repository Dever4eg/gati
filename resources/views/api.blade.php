<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            margin: auto;
            max-width: 1000px;
        }

        .title {
            text-align: center;
            font-size: 36px;
        }

        a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="top-right links">
        <a href="{{ url('/') }}">Головна</a>
    </div>

    <div class="content">
        <h1 class="title">API</h1>

        <p>
            <a href="/api/posts">/api/posts</a> - вывод всех новостей с пагинациями <br>
            <a href="/api/posts?page=1">/api/posts?page=n</a> - показ страници n <br>
            <a href="/api/posts/1">/api/posts/id</a> - показ новости с id <br>
            <a href="/api/posts/lorem-ipsum-post">/api/post/slug</a> - показ новости по slug (ссылка на новость)
        </p>

        <p>
            <a href="/api/scheduleTypes">/api/scheduleTypes</a> - показ всех типов расписания <br>
            <a href="/api/scheduleTypes/1">/api/scheduleTypes/id</a> - показ типа с id
        </p>

        <p>
            <a href="/api/schedules">/api/schedules</a> - показ всех типов расписания <br>
            <a href="/api/schedules/2018-02-13">/api/schedules/дата</a> - показ расписания по дате
        </p>

    </div>
</body>
</html>
