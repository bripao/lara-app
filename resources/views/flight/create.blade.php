<div>
    <h1>Create a book</h1>

    @if($errors->any())

        <div>
            <ul>
                @foreach($errors->any() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('flight.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">

        <label for="isbn">ISBN</label>
        <input type="text" name="isbn" id="isbn">

        <label for="excerpt">Excerpt</label>
        <input type="text" name="excerpt" id="excerpt">

        <button type="submit">SUBMIT</button>

    </form>

    <a href="{{ route('flight.index') }}">Home</a>
</div>
