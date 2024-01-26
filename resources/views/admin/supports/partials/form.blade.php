@csrf()
    <input type="text" placeholder="Subject" name="subject" value="{{ $support->subject ?? old('subject') }}">
    <textarea name="body" cols="30" rows="5" placeholder="Description">{{ $support->body ?? old('body') }}</textarea>
    <button type="submit">Send</button>
    {{-- The old() method is used to preserve the input's --}}