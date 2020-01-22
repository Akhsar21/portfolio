<!-- Subscribe Our Newsletter -->
<div class="row iq-ptb-60">
    <div class="col-sm-12">
        <div class="heading-title iq-mb-40">
            <h2 class="title iq-tw-6">Subscribe Our Newsletter</h2>
            <div class="divider"></div>
        </div>
    </div>
    <div class="col-sm-12">
        <form class="form-inline iq-subscribe" action="{{ route('subscriber.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Enter Your email" value="{{ old('email') }}">
            </div>
            <button type="submit" class="button iq-ml-25">Subscribe Now</button>
        </form>
    </div>
</div>
<!-- Subscribe Our Newsletter END -->
