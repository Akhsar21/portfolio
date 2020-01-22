<form class="form-horizontal" method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div class="contact-form">

        <div class="section-field">
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name"
                class="@error('name') is-invalid @enderror">
        </div>
        <div class="section-field">
            <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter email address"
                class="@error('email') is-invalid @enderror">
        </div>
        <div class="section-field">
            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Enter subject"
                class="@error('subject') is-invalid @enderror">
        </div>
        <div class="section-field textarea">
            <textarea class="input-message @error('message') is-invalid @enderror" name="message"
                value="{{ old('message') }}" placeholder="Enter Messege" rows="7"></textarea>
        </div>
        <button id="submit" name="submit" type="submit" class="button iq-mt-30">Send
            Message</button>

    </div>
</form>