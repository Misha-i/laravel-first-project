@extends('NewDataPeople.layouts.app')

@section('title', 'Контакти')

@section('content')

    <h1>Контакти</h1>
    <p>Головне не те як швидко ти рухаєшся а головне що не зупинаєшся, і стараєшся з кожним разом прикладати більше зусиль.
        Головне робити те що подобається.
    </p>

    <form action="/contact1/submit" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введіть ім'я</label>
            <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема повідомлення</label>
            <input type="text" name="subject" placeholder="Тема повідомлення" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введіть повідомлення"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Відправити</button>
    </form>
@endsection
