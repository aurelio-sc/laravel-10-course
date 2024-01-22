<h1>New Doubt</h1>
{{-- $errors is an automaticaly inject variable in all views --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}">
    <textarea name="body" cols="30" rows="5" placeholder="Description">{{ old('body') }}</textarea>
    <button type="submit">Send</button>
    {{-- The old() method is used to preserve the input's --}}
</form>