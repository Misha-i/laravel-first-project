@extends('layouts.app')

@section('title-block', 'Всі повідомлення')

@section('content')
    <h1>Сторінка повідомлень</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3> {{ $el->name }}</h3>
            <p> {{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-warning">Детальніше></button></a>
        </div>
    @endforeach
@endsection

