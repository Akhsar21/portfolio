<select name="tags[]" id="tags" class="form-control select @error('tags') is-invalid @enderror" multiple>
    @foreach ($tags as $tag)
    <option value="{{ $tag->id }}" @if (!empty($post) && in_array($tag->id, $post->
        tags->pluck('id')->toArray())) selected @endif>{{ $tag->name }}</option>
    @endforeach
</select>