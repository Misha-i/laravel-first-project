<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Чат</title>
    <?php
    require __DIR__ . '/vendor/autoload.php';
    ?>
</head>
<body>
<div class="container">
    <div>
        @if($id == 1)
            <h3>Кімната</h3>
        @elseif($id == 2)
            <h3>Кімната</h3>
        @else
            <h3>Кімната 3</h3>
        @endif
    </div>
    <div class="row">
        <div class="col-3">
            Користувачі онлайн
            <ul id="users"></ul>
        </div>
        <div class="col-5">
            Повідомлення
            <div id="messages">

            </div>
        </div>
        <div class="col-3">
            <input type="text" id="text">
            <button id="send" onclick="send()">Відправити</button>
        </div>
    </div>
</div>
</body>
</html>
