@extends('newProject.index')

@include('newProject.footer')

@section('title', $data->car)

@section('content')
    <div class="alert alert-info">
        <h1>{{ $data->car }}</h1>
            <div class="alert alert-info">
                <p>{{ $data->created_at }}</p>
                <p>{{ $data->updated_at }}</p>
                <p>{{ $data->contact_id }}</p>
                <a class="btn btn-primary" href="{{ route('car-update', $data->id) }}" role="button">Редагування</a>
                <a class="btn btn-danger" href="{{ route('car-delete-submit', $data->id) }}" role="button">Видалити</a>

            </div>
    </div>

@endsection
