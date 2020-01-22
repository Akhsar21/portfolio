<ul class="nav nav-pills custom-pills" role="tablist">
    <li class="nav-item">
        <a class="nav-link text-dark active" data-toggle="pill" href="#postDetails" role="tab" aria-controls="postDetails"
            aria-selected="true">Post Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-dark" data-toggle="pill" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO</a>
    </li>
</ul>

<div class="tab-content my-3">
    <div class="tab-pane active" id="postDetails" role="tabpanel">
        <div class="form-group">
            <label for="title" class="control-label">{{ 'Title' }}</label>
            <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" id="title"
                value="{{ old('title') ?? $post->title }}">

            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content" class="control-label">{{ 'Content' }}</label>
            <div id="content" data-image-url="{{ route('image.store') }}">
                {!! old('content') ?? $post->content !!}
            </div>
            <textarea class="form-control @error('content') is-invalid @enderror" style="display: none;" name="content"
                id="content-textarea"></textarea>

            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <input class="form-control @error('slug') is-invalid @enderror" name="slug" type="text" id="slug"
            value="{{ old('slug') ?? $post->slug }}" style="display: none">

        <div class="form-group">
            <label for="category_id">{{ 'Category' }}</label>
            @include('layouts.partials.categories.post-select')
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tags">{{ 'Tags' }}</label>
            @include('layouts.partials.tags.post-select')
            @error('tags')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <label for="published">Publish</label>
        <div class="row form-check">
            <div>
                <label class="c-switch-sm c-switch-label c-switch-pill c-switch-opposite-secondary">
                    <input class="c-switch-input" type="checkbox" value="true" @if (!empty($post) && $post->published)
                    checked @endif name="published">
                    <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                </label>
            </div>

            <div>
                <label class="form-check-label ml-2" for="published">Public</label>
            </div>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="thumbnail-input">Thumbnail</label>
            <div><input id="thumbnail-input" type="file" name="thumbnail"></div>
        </div>
    </div>

    <div class="tab-pane" id="seo" role="tabpanel">
        <div class="form-group">
            <label for="keywords" class="control-label">{{ 'Keywords' }}</label>
            <textarea class="form-control @error('keywords') is-invalid @enderror" name="keywords"
                id="keywords">{{ old('keywords') ?? $post->keywords }}</textarea>

            @error('keywords')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description" class="control-label">{{ 'Description' }}</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                id="description">{{ old('description') ?? $post->description }}</textarea>

            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <a href="{{ route('posts.index') }}" title="Back" class="btn btn-warning btn-square">
        <i class="cil-arrow-left" aria-hidden="true"></i> Back
    </a>
    <input type="submit" class="btn btn-primary btn-square" value="{{ $formMode === 'edit' ? 'Update' : 'Publish' }}">
</div>
@csrf

@section('styles')
<link rel="stylesheet" href="/assets/vendors/quill/monokai-sublime.min.css">
<link rel="stylesheet" href="/assets/vendors/quill/quill.snow.css">
<link rel="stylesheet" href="/assets/css/tab.css">
@endsection

@section('scripts')
<script src="/assets/vendors/quill/highlight.min.js"></script>
<script src="/assets/vendors/quill/quill.js"></script>
<script src="/js/quill-custom.js"></script>
@endsection