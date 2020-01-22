<div class="form-group">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="name"
        value="{{ old('name') ?? $project->name }}">

    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
        id="description">{{ old('description') ?? $project->description }}</textarea>

    @error('description')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="tags" class="control-label">{{ 'Tags' }}</label>
    @include('layouts.partials.tags.post-select', ['post' => $project])

    @error('tags')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="images" class="control-label">{{ 'Images' }}</label>
    <div>
        <input type="file" class="@error('name') is-invalid @enderror" name="images[]" id="images" multiple>
    </div>
</div>

@if (isset($project))
<div class="row">
    @foreach ($project->images as $image)
    <div class="col-md-4 mb-3 img">
        <img class="img-fluid" src="{{ asset($image->src) }}" alt="">
        <button class="btn btn-transparent btn-square btn-sm delete-image text-danger"
            data-url="{{ route('projectImage.delete', $image->id) }}"><i class="cil-x"></i>
        </button>
    </div>
    @endforeach
</div>
@endif

<input class="form-control @error('slug') is-invalid @enderror" name="slug" type="text" id="slug"
    value="{{ old('slug') ?? $project->slug }}" style="display: none;">

<div class="form-group">
    <a href="{{ route('projects.index') }}" title="Back" class="btn btn-warning btn-square">
        <i class="cil-arrow-left" aria-hidden="true"></i> Back
    </a>
    <input class="btn btn-primary btn-square" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
@csrf

@section('styles')
<style>
    .img {
        position: relative;
    }

    .delete-image {
        position: absolute;
        z-index: 10;
        right: 15px;
    }

    .delete-image:hover {
        background-color: rgba(255, 54, 54, .4);
        color: #fff !important;
        transition: all 650ms;
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('.delete-image').on('click', function () {
            event.preventDefault();

            const url = $(this).data('url');
            const csrf_token = $('input[name="_token"]').val();
            
            console.log(csrf_token);
            
            $.ajax({
                type: "DELETE",
                url: url,  
                data: {
                    _token: csrf_token
                },
                success: function () {
                    window.location.reload();
                }
            })
        })
    });
</script>
@endsection