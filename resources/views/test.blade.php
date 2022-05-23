<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="/js/new_file.js"></script>
</head>
<body>
<h1 id="main-heading">Hello</h1>
</body>

<script>

    function someFunc(){
        return 'some there it`s here'
    }
    console.log(someFunc())
    let someEnade = function (){
        return 'its enade text'
    }
    console.log(someEnade())

    let someTwoFunck = function (){
        return 'there text'
    }

    function EnadeName(){
        return 'Enade some one text'
    }
    console.log(EnadeName())

var arr = ['перший елемент', 'другий елемент', 'останій елемент'];
console.log(arr[0])
console.log(arr[1])
console.log(arr[arr.length - 1]);

var years = [1950, 1960, 1970, 1980, 1990, 2000, 2010, 2077];
console.log(years[0]);
console.log(years[1]);

const someBoolean = false;

if(!someBoolean) {
    console.log('hello');
} else {
    console.log('not hello');
}

let someArr = ['oleg', 'Olesan', 'Eduadrd']

    console.log(person);
someArr.forEach(function(imem, index){
    console.log(item, index);
})

let xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this.res)
    }
}
const person = {
    name: 'anrey',
    age: 3421,
    greet: function() {
        console.log('Green!')
    }
}
let person = {
    name: 'anrey',
    age: 3421,
    greet: function () {
        console.log('Green!')
    }
}
Object.prototype.sayHello = function (){
    console.log('Hello')
}
const lena = Object.create(person)
lena.name = 'Elena'

const str = new String ('I am string')

var headingElement = document.getElementById("main-heading");
console.log(headingElement.innerHTML);
var newHeadingText = prompt("Ведіть новий заголовок:");
headingElement.innerHTML
</script>
</html>
