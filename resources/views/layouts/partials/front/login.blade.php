<div class="col-md-4 col-lg-4">
    <form class="banner-form" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-icon">
            <img class="img-responsive center-block" src="{{ asset('assets/brand/coreui-signet-white.svg') }}" alt="#">
        </div>
        <h3 class="iq-tw-7"><small>Welcome!</small> Please Log in</h3>
        <div class="form-group">
            <label for="email" class="text-uppercase">User id</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
            <i class="ion-ios-person"></i>
        </div>
        <div class="form-group">
            <label for="password" class="text-uppercase">Password</label>
            <input type="password" name="password" class="form-control" id="password"
                placeholder="Password">
            <i class="ion-ios-unlocked"></i>
        </div>
        <div class="remember-checkbox iq-pt-10">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="remember" for="remember">Remember me</label>
        </div>
        <input type="submit" class="button btn-block text-center iq-mt-30" value="Submit">
    </form>
</div>