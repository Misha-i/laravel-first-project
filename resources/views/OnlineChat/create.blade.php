<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<form action="{{ route('createUser') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Введіть ім'я</label>
        <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Відправити</button>
</form></body>
</html>

