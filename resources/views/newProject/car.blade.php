@extends('newProject.index')

@include('newProject.footer')

@section('content')
    <h1>Форма для запису</h1>

<div class="container mt-5">
    @include('newProject.messages')
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Назва машини</th>
            <th scope="col">Action</th>
            <th scope="col">Явний Користувач</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($cars as $car)
        <tr>
            <td>{{$car->id}}</td>
            <td>{{$car->car}}</td>
            <td>
                <div class="d-grid gap-2 d-md-flex">
                    <a class="btn btn-success" href="{{ route('car-all', $car->id) }}" role="button">Перегляд</a>
                    <a class="btn btn-primary" href="{{ route('car-update', $car->id) }}" role="button">Редагування</a>
                    <a class="btn btn-danger" href="{{route('car-delete-submit', $car->id)}}" role="button">Видалення</a>

                </div>
            </td>
            <td>
                @if($car->contact)
                    {{$car->contact->name}}
                @endif
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
    {{ $cars->links() }}
@endsection

