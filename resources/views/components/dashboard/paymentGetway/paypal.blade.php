<form action="{{ route('general') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="">Active</option>
            <option value="">Deactive</option>
        </select>
    </div>
    <div class="form-group">
        <label for="accountMode">Account Mode</label>
        <select name="accountMode" id="accountMode" class="form-control">
            <option value="live">Live</option>
            <option value="sandbox">Sandbox</option>
        </select>
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <select name="country" id="country" class="form-control">
            <option value="">Select Country</option>
            @foreach (config('countries') as $code => $country)
            <option value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currency">Currency</label>
        <select name="currency" id="currency" class="form-control">
            @foreach (config('currencies') as $code => $currency)
            <option value="">Select Currency</option>
            <option value="{{ $code }}">{{ $currency  }} ({{ $code }})</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currencyRatePerUSD">Currency rate ( Per USD)</label>
        <input type="number" name="currencyRatePerUSD" id="currencyRatePerUSD" class="form-control">
    </div>
    <div class="form-group">
        <label for="paypalClientID">Paypal Client Id</label>
        <input type="text" name="paypalClientID" id="paypalClientID" class="form-control">
    </div>
    <div class="form-group">
        <label for="paypalSecretKey">Paypal Secret Key</label>
        <input type="text" name="paypalSecretKey" id="paypalSecretKey" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputFile"> {{ __('New Logo') }} </label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" id="logo" name="logo" value="{{ old('logo') }}">
            <label class="custom-file-label" for="logo">Choose file</label>
          </div>
        </div>
        @error('logo')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
