<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bd-gray-900 sm:item-center py-4 sm:pt-4">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth()
                <a href="{{ url('login') }}" class="text-xm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
            <a href="{{route('login')}}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <p id="message"></p>
        </div>
    </div>
</div>
<script>
    let socket = new WebSocket("ws://192.168.0.209:8080");


    socket.onopen = function(e) {
        alert("[open] Соединение установлено");
        alert("Отправляем данные на сервер");
        socket.send("Меня зовут Джон");
    };

    socket.onmessage = function(event) {
        // alert(`[message] Данные получены с сервера: ${event.data}`);
        document.getElementById('message').append(event.data)
    };

    socket.onclose = function(event) {
        if (event.wasClean) {
            alert(`[close] Соединение закрыто чисто, код=${event.code} причина=${event.reason}`);
        } else {
            // например, сервер убил процесс или сеть недоступна
            // обычно в этом случае event.code 1006
            alert('[close] Соединение прервано');
        }
    };

    socket.onerror = function(error) {
        alert(`[error] ${error.message}`);
    };
</script>
</body>
</html>
