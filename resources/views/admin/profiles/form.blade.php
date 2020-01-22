<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#details" role="tab" aria-controls="details"
            aria-selected="true">Details</a>
    </li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social" role="tab" aria-controls="social"
            aria-selected="false">Social</a>
    </li>
</ul>

<div class="tab-content my-3">
    <div class="tab-pane active" id="details" role="tabpanel">
        <div class="form-group">
            <label for="address" class="control-label">{{ 'Address' }}</label>
            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address"
                value="">{{ old('address') }}</textarea>
            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone" class="control-label">{{ 'Phone Number' }}</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                value="{{ old('phone') }}">
            @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="avatar" class="control-label">{{ 'Profile Image' }}</label>
            <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" name="avatar"
                id="avatar">
            @error('avatar')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="tab-pane" id="social" role="tabpanel">
        <div class="form-group">
            <label for="facebook" class="control-label">{{ 'Facebook url' }}</label>
            <input type="text" name="facebook" id="facebook"
                class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook') }}">
            @error('facebook')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="twitter" class="control-label">{{ 'Twitter url' }}</label>
            <input type="text" name="twitter" id="twitter" class="form-control @error('twitter') is-invalid @enderror"
                value="{{ old('twitter') }}">
            @error('twitter')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="github" class="control-label">{{ 'Github url' }}</label>
            <input type="text" name="github" id="github" class="form-control @error('github') is-invalid @enderror"
                value="{{ old('github') }}">
            @error('github')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="instagram" class="control-label">{{ 'Instagram url' }}</label>
            <input type="text" name="instagram" id="instagram"
                class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}">
            @error('instagram')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <a href="{{ route('profiles.index') }}" title="Back">
        <button class="btn btn-warning btn-square"><i class="cil-arrow-left" aria-hidden="true"></i> Back</button>
    </a>
    <input class="btn btn-primary btn-square" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
@csrf