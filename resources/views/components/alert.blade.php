<div class="alert alert-danger">
    {{-- $errors is an automaticaly inject variable in all views --}}
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>