<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<h1>Тут наш чат</h1>
<a href="{{ route('create1') }}">
    <button class="btn btn-warning">Створити юзера</button>
</a></td>

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">message</th>
    </tr>
    </thead>
    <tbody>
    @foreach($all_messages as $message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->name}}</td>
            <td>{{$message->message}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
