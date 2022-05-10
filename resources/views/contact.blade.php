@extends('layouts.app')

@section('title-block', 'Сторінка контаків')

@section('content')
    <h1>Сторінка контаків</h1>

    <form action="{{ route('contact-form') }}" method="post">
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
            <input type="text" name="subject" placeholder="Введіть ім'я" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Повідомлення</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введіть повідомлення"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Відправити</button>
    </form>
@endsection

