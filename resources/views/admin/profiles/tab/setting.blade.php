<div class="card-body">
    <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" placeholder="Johnathan Doe" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" placeholder="johnathan@admin.com" class="form-control" name="email"
                id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" value="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" placeholder="123 456 7890" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="example-country">Select Country</label>
            <select name="example-message" id="example-message" class="form-control">
                <option>London</option>
                <option>India</option>
                <option>Usa</option>
                <option>Canada</option>
                <option>Thailand</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success" value="Update Profile">
    </form>
</div>