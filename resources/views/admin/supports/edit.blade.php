<h1>Edit Doubt {{ $support->id }}</h1>
{{-- $errors is an automaticaly inject variable in all views --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf()
    @method('PUT')
    <input type="text" placeholder="Subject" name="subject" value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Description">{{ $support->body }}</textarea>
    <button type="submit">Save</button>
</form>