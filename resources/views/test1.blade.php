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
    {{--<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Text shadow generator</title>
    <style>
        body {
            text-align: center;
            background-color: rgba(189, 165, 165, 0.93)
        }

        label {
            display: block
        }

        h1 {
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 6px;
            font-size: 40px;
            color: #000000;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        input[type="range"] {
            width: 100%;
        }

        input[type="color"] {
            border: none;
            background-color: transparent;
            width: 55px;
            padding: 0;
            margin-bottom: 15px;
        }

        input[type="color"]:hover {
            cursor: pointer;
        }

        textarea {
            width: 100%;
            resize: none;
            margin-bottom: 15px;
            min-width: 300px;
            font-size: 13px;
        }

        .card {
            height: 100%;
            border-color: #000;
        }

        .card-header {
            font-weight: bold;
            color: #ffffff;
        }

        .row > div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<h1>Text shadow generator</h1>
<div class="container">
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header bg-primary">Налаштування:</div>
                <div class="card-body col-sm">
                    <label for="font_size">Розмір шрифту</label>
                    <input class="custom-range" id="font_size" type="range" min="8" max="40" step="1" value="40">
                    <br>
                    <label for="offset_x">Зміщення по осі x</label>
                    <input class="custom-range" id="offset_x" type="range" min="-15" max="15" step="1" value="4">
                    <br>
                    <label for="offset_y">Зміщення по осі y</label>
                    <input class="custom-range" id="offset_y" type="range" min="-15" max="15" step="1" value="-1">
                    <br>
                    <label for="blur">Розмиття</label>
                    <input class="custom-range" id="blur" type="range" min="0" max="15" step="1" value="0">
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header bg-primary">Колір:</div>
                <div class="card-body col-sm">
                    <input type="color" id="color" value="#ff0000">
                    <label for="opacity">Прозорість</label>
                    <input type="range" class="custom-range" id="opacity" min="0" max="1" step="0.01" value="1">
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header bg-primary">Налаштування:</div>
                <div class="card-body col-sm">
                    <label for="resultHex">Колір в НЕХ</label>
                    <textarea id="resultHex" rows="4" readonly></textarea><br>
                    <label for="resultRgba">Колір в RGBA</label>
                    <textarea id="resultRgba" rows="3" readonly></textarea><br>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function cssShadow({
    font_size,
    offset_x,
    offset_y,
    blur,
    opacity,
    color,
    rgba
    }) {
        var cssStyles = offset_x + 'px ' + offset_y + 'px ' + blur + 'px ' + rgba;
        $('h1').css('text-shadow', cssStyles);
        $('#resultHex').val('background-color: ' + color + ';\nopacity: ' + opacity + '\nfont-size: ' + font_size + 'px;')
        $('#resultRgba').val('text-shadow: ' + offset_x + 'px ' + offset_y + 'px ' + rgba + ';\nfont-size: ' + font_size + 'px;')
    }

    $(document).on('input change', 'input', function () {
        var font_size = $('#font_size').val()
        var offset_x = $('#offset_x').val()
        var offset_y = $('#offset_y').val()
        var blur = $('#blur').val()
        var opacity = $('#opacity').val()
        var color = $('#color').val()
        var red16 = color[1]+ '' + color[2]
        var green16 = color[3] + '' + color[4]
        var blue16 = color[5] + '' + color[6]
        var red10 = parseInt(red16, 16)
        var green10 = parseInt(green16, 16)
        var blue10 = parseInt(blue16, 16)
        var rgba = 'rgba(' + red10 + ', ' + green10 + ', ' + blue10 + ', ' + opacity +')'

        $('h1').css('fontSize', font_size + 'px')
        cssShadow({
            font_size: font_size,
            offset_x: offset_x,
            offset_y: offset_y,
            blur: blur,
            opacity: opacity,
            color: color,
            rgba: rgba
        })
    })
    $('.card').mouseup(function(){
        $(this).fadeTo('slow', 0.3)
    })
    $('.card').click(function(){
        $(this).fadeTo('slow', 1)
    })

    // вчимося відправляти GET POST запити через AJAX.
   /* let xhttp = new XMLHttpRequest()
    let a = 0
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            myFunction(this.responseText)
        }
    }
    xhttp.open('GET', 'https://api.jquery.com/outerHeight/#outerHeight-value-includeMargin', true)
    xhttp.send()

    function myFunction(data){
        a = data
        console.log(data)
    }

    console.log(a)*/
    //
    //
    //
    // Запити на сервер Fetch XMLHttpRequest (XHR) Ajax.
    /*const requestURL = 'https://jsonplaceholder.typicode.com/users'

    const xhr = new XMLHttpRequest()

    xhr.open('GET', requestURL)

    xhr.responseType = 'json'

    xhr.onload = () => {
        console.log(xhr.response)
    }

    xhr.onerror = () => {
        console.log(xhr.response)
    }

    xhr.send()*/

    function hello(){
        console.log('Hello', this)
    }

    const person = {
        name: 'Isma',
        age: 25,
        sayHello: hello
    }
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="like_button.js"></script>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>

