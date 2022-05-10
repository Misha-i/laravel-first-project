@include('newProject.index')

@include('newProject.footer')


<form action="{{ route('car-data') }}" method="POST">
    @csrf
    <div class="container">
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Ваш автомобіль</h4>
                <div class="form-group">
                    <label for="car">Ведіть марку машини</label>
                    <input type="text" name="name" placeholder="Введіть" id="car" class="form-control">
                    <br>
                </div>
        </div>
        <div class="col-md-7 col-lg-8">
            <div class="form-group">
                <label for="car">Виберіть власника машини</label>
                <br>
                <select class="form-select" name="contact_id" aria-label="Default select example">
                    @foreach( $contacts as $contact )
                        <option value="{{ $contact->id }}" @if($cars->user_id==$contact->id) selected @endif>{{ $contact->name }}</option>
                    @endforeach
                </select>
                    {{--<div class="dropdown">
                        <select class="form-select" name="user_id" aria-label="Default select example">
                        @foreach( $cars as $car)
                            <option value="{{ $car->id }}" @if($data->user_id==$contact->id) selected @endif>{{ $contact->name }}</option>
                        @endforeach
                        </select>
                    </div>--}}
            </div>
        </div>
        <button type="submit" class="btn btn-success">Continue to checkout</button>
    </div>
</form>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017–2077 Chik Chirik</p>
    </footer>




