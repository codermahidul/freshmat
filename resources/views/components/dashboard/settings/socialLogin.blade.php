<form action="{{ route('socialLogin') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="flstatus">{{ __('Allow Login with Facebook') }}</label>
        <select name="flstatus" id="flstatus" class="form-control">
            <option value="enable" {{ (setting('flstatus') == 'enable') ? 'selected' : '' }}>{{ __('Enable') }}</option>
            <option value="disable" {{ (setting('flstatus') == 'disable') ? 'selected' : '' }}>{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="fbAppId">{{ __('Facebook App Id') }}</label>
        <input type="text" class="form-control" placeholder="Facebook App Id" value="{{ setting('fbAppId') }}" name="fbAppId">
    </div>
    <div class="form-group">
        <label for="fbSecretKey">{{ __('Facebook App Secret') }}</label>
        <input type="text" class="form-control" placeholder="Facebook App Secret" value="{{ setting('fbSecretKey') }}" name="fbSecretKey">
    </div>
    <div class="form-group">
        <label for="fbRedirectUrl">{{ __('Facebook Redirect Url') }}</label>
        <input type="text" class="form-control" placeholder="Facebook Redirect Url" value="{{ setting('fbRedirectUrl') }}" name="fbRedirectUrl">
    </div>
    {{-- Google --}}
    <div class="form-group">
        <label for="glstatus">{{ __('Allow Login with Gmail') }}</label>
        <select name="glstatus" id="glstatus" class="form-control">
            <option value="enable" {{ (setting('glstatus') == 'enable') ? 'selected' : '' }}>{{ __('Enable') }}</option>
            <option value="disable" {{ (setting('glstatus') == 'disable') ? 'selected' : '' }}>{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="glClientId">{{ __('Gmail Client Id') }}</label>
        <input type="text" class="form-control" placeholder="Gmail Client Id" value="{{ setting('glClientId') }}" name="glClientId">
    </div>
    <div class="form-group">
        <label for="glSecretKey">{{ __('Gmail Secret Id') }}</label>
        <input type="text" class="form-control" placeholder="Gmail Secret Id" value="{{ setting('glSecretKey') }}" name="glSecretKey">
    </div>
    <div class="form-group">
        <label for="glRedirectUrl">{{ __('Gmail Redirect Url') }}</label>
        <input type="text" class="form-control" placeholder="Gmail Redirect Url" value="{{ setting('glRedirectUrl') }}" name="glRedirectUrl">
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
