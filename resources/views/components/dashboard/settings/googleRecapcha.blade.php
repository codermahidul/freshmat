<form action="{{ route('googleRecaptcha') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="glrecaptchaStatus">{{ __('Allow Recaptcha') }}</label>
        <select name="glrecaptchaStatus" id="glrecaptchaStatus" class="form-control">
            <option value="enable" {{ (setting('glrecaptchaStatus') == 'enable') ? 'selected' : '' }}>{{ __('Enable') }}</option>
            <option value="disable" {{ (setting('glrecaptchaStatus') == 'disable') ? 'selected' : '' }}>{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="captchaSiteKey">{{ __('Captcha Site Key') }}</label>
        <input type="text" class="form-control" placeholder="Captcha Site Key" value="{{ setting('captchaSiteKey') }}" name="captchaSiteKey">
    </div>
    <div class="form-group">
        <label for="captchaSecretKey">{{ __('Captcha Secret Key') }}</label>
        <input type="text" class="form-control" placeholder="Captcha Secret Key" value="{{ setting('captchaSecretKey') }}" name="captchaSecretKey">
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
