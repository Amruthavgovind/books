<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">author</th>
            <th scope="col">published_year</th>
            <th scope="col">genre</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $key => $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->published_year }}</td>
                <td>{{ $book->genre }}</td>
                <td><a href="{{ Route('edit', $book->id) }}">Edit book</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ Route('create') }}">Add new book</a>
