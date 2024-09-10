<form action="{{ route('facebookPixel') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="fbPixelStatus">{{ __('Allow Facebook Pixel') }}</label>
        <select name="fbPixelStatus" id="fbPixelStatus" class="form-control">
            <option value="enable" {{ (setting('fbPixelStatus') == 'enable') ? 'selected' : '' }}>{{ __('Enable') }}</option>
            <option value="disable" {{ (setting('fbPixelStatus') == 'disable') ? 'selected' : '' }}>{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="fbAppIdPixel">{{ __('Facebook App Id') }}</label>
        <input type="text" class="form-control" placeholder="Facebook App Id" value="{{ setting('fbAppIdPixel') }}" name="fbAppIdPixel">
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
