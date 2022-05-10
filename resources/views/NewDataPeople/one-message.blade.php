@extends('NewDataPeople.layouts.app')

@section('title', $data->name)

@section('content')
    <div class="alert alert-info">
        <h1>{{ $data->name }}</h1>
        <div class="alert alert-info">
            <h3>{{ $data->email }}</h3>
            <p>{{ $data->subject }}</p>
            <p>{{ $data->message }}</p>
            <p>{{ $data->created_at }}</p>
            <p>{{ $data->updated_at }}</p>
            <a class="btn btn-primary" href="{{ route('update_submit', $data->id) }}" role="button">Редагування</a>
            <a class="btn btn-danger" href="{{ route('delete', $data->id) }}" role="button">Видалити</a>
        </div>
    </div>

@endsection
