<h1>Supports List</h1>

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
                <td> > </td>
            </tr>
        @endforeach
    </tbody>
</table>