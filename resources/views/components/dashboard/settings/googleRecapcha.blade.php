<form action="{{ route('googleRecaptcha') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="glrecaptchaStatus">Allow Recaptcha</label>
        <select name="glrecaptchaStatus" id="glrecaptchaStatus" class="form-control">
            <option value="enable" {{ (setting('glrecaptchaStatus') == 'enable') ? 'selected' : '' }}>Enable</option>
            <option value="disable" {{ (setting('glrecaptchaStatus') == 'disable') ? 'selected' : '' }}>Disable</option>
        </select>
    </div>
    <div class="form-group">
        <label for="captchaSiteKey">Captcha Site Key</label>
        <input type="text" class="form-control" placeholder="Captcha Site Key" value="{{ setting('captchaSiteKey') }}" name="captchaSiteKey">
    </div>    
    <div class="form-group">
        <label for="captchaSecretKey">Captcha Secret Key</label>
        <input type="text" class="form-control" placeholder="Captcha Secret Key" value="{{ setting('captchaSecretKey') }}" name="captchaSecretKey">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>