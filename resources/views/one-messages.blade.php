@extends('layouts.app')

@section('title-block', $data->subject)

@section('content')
    <h2>{{$data->subject}}</h2>
        <div class="alert alert-info">
            <p> {{ $data->name }}</p>
            <p> {{ $data->email }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $data->id) }}"><button class="btn btn-primary">Детальніше></button></a>
        </div>
@endsection

