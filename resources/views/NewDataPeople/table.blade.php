@extends('NewDataPeople.layouts.app')

@section('title', 'Таблиця')

@section('content')
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Ім'я</th>
        <th scope="col">Email</th>
        <th scope="col">Тема повідомлення</th>
        <th scope="col">Повідомлення</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($contact_data  as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->subject}}</td>
            <td>{{$user->message}}</td>
            <td><a href="{{ route('update', $user->id) }}"><button class="btn btn-success">Редагувати</button></a></td>
            <td><a href="{{ route('showOne', $user->id) }}"><button class="btn btn-warning">Детальніше</button></a></td>
            <td><a href="{{ route('delete', $user->id) }}"><button class="btn btn-danger">Видалити</button></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $contact_data->links() }}
@endsection

