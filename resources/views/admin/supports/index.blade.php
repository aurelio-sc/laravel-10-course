<h1>Supports List</h1>

<a href="{{ route('supports.create') }}">Add new doubt</a>

<table>
    <thead>        
        <th>Subject</th>
        <th>Status</th>
        <th>Description</th>
        <th></th> {{-- Actions will be here --}}
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td><a href="{{ route('supports.show', $support->id) }}">Go</a></td>
            </tr>
        @endforeach
    </tbody>
</table>