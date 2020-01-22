<select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
    <option value="0" holder>Choose Category</option>
    @foreach ($categories as $category)
    <option value="{{ $category->id }}" @if (!empty($post) && $category->id == $post->category_id) selected
        @endif>{{ $category->name }}</option>
    @endforeach
    @error('category_id') 
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</select>