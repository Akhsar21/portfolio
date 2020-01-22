<div class="form-group">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
        value="{{ old('name') ?? $tag->name }}">

    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<input class="form-control" name="slug" type="text" id="slug" value="" style="display: none;">
@csrf