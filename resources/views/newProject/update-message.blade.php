@include('newProject.index')

@include('newProject.footer')

@section('title', 'Оновлення запису')

<form action="{{ route('car-update-submit', $car->id) }}" method="POST">
    @csrf
    <div class="container">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">{{ $car->car }}</h4>
            <div class="form-group">
                <label for="name">Оновіть марку машини</label>
                <input type="text" name="name" value="{{ $car->car }}" placeholder="Введіть" id="name"
                       class="form-control">
            </div>
            <label for="car">Виберіть користувача</label>
            <select class="form-select" name="contact_id" aria-label="Default select example">
                @foreach( $contacts as $contact )
                    <option value="{{ $contact->id }}" id="car"
                            @if($car->contact_id==$contact->id) selected @endif>{{ $contact->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Обновити</button>
    </div>
</form>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017–2077 Chik Chirik</p>
</footer>
