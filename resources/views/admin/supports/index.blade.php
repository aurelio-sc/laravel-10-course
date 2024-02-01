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
        @foreach ($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">View</a>
                    <a href="{{ route('supports.edit', $support->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination 
    :paginator="$supports" 
    :appends="$filters"
    />