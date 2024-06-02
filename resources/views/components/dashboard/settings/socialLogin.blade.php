<form action="{{ route('socialLogin') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="flstatus">Allow Login with Facebook</label>
        <select name="flstatus" id="flstatus" class="form-control">
            <option value="enable" {{ (setting('flstatus') == 'enable') ? 'selected' : '' }}>Enable</option>
            <option value="disable" {{ (setting('flstatus') == 'disable') ? 'selected' : '' }}>Disable</option>
        </select>
    </div>
    <div class="form-group">
        <label for="fbAppId">Facebook App Id</label>
        <input type="text" class="form-control" placeholder="Facebook App Id" value="{{ setting('fbAppId') }}" name="fbAppId">
    </div>    
    <div class="form-group">
        <label for="fbSecretKey">Facebook App Secret</label>
        <input type="text" class="form-control" placeholder="Facebook App Secret" value="{{ setting('fbSecretKey') }}" name="fbSecretKey">
    </div>    
    <div class="form-group">
        <label for="fbRedirectUrl">Facebook Redirect Url</label>
        <input type="text" class="form-control" placeholder="Facebook Redirect Url" value="{{ setting('fbRedirectUrl') }}" name="fbRedirectUrl">
    </div>
    {{-- Google --}}
    <div class="form-group">
        <label for="glstatus">Allow Login with Gmail</label>
        <select name="glstatus" id="glstatus" class="form-control">
            <option value="enable" {{ (setting('glstatus') == 'enable') ? 'selected' : '' }}>Enable</option>
            <option value="disable" {{ (setting('glstatus') == 'disable') ? 'selected' : '' }}>Disable</option>
        </select>
    </div>
    <div class="form-group">
        <label for="glClientId">Gmail Client Id</label>
        <input type="text" class="form-control" placeholder="Gmail Client Id" value="{{ setting('glClientId') }}" name="glClientId">
    </div>    
    <div class="form-group">
        <label for="glSecretKey">Gmail Secret Id</label>
        <input type="text" class="form-control" placeholder="Gmail Secret Id" value="{{ setting('glSecretKey') }}" name="glSecretKey">
    </div>    
    <div class="form-group">
        <label for="glRedirectUrl">Gmail Redirect Url</label>
        <input type="text" class="form-control" placeholder="Gmail Redirect Url" value="{{ setting('glRedirectUrl') }}" name="glRedirectUrl">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>