<form action="{{ route('paypal.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="status">{{ __('Status') }}</label>
        <select name="status" id="status" class="form-control">
            <option {{ ($paypal->status == 'enable') ? 'selected' : '' }} value="enable">{{ __('Enable') }}</option>
            <option {{ ($paypal->status == 'disable') ? 'selected' : '' }} value="disable">{{ __('Dasable') }}</option>
        </select>
        @error('status')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="accountMode">{{ __('Account Mode') }}</label>
        <select name="accountMode" id="accountMode" class="form-control">
            <option {{ ($paypal->accountMode == 'live') ? 'selected' : '' }} value="live">{{ __('Live') }}</option>
            <option {{ ($paypal->accountMode == 'sandbox') ? 'selected' : '' }} value="sandbox">{{ __('Sandbox') }}</option>
        </select>
        @error('accountMode')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="country">{{ __('Country') }}</label>
        <select name="country" id="country" class="form-control">
            <option value="">{{ __('Select Country') }}</option>
            @foreach (config('countries') as $code => $country)
            <option {{ ($paypal->countryName == $country) ? 'selected' : '' }} value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
        @error('country')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="currency">{{ __('Currency') }}</label>
        <select name="currency" id="currency" class="form-control">
            <option value="">{{ __('Select Currency') }}</option>
            @foreach (config('currencies') as $code => $currency)
            <option {{ ($paypal->currencyName == $code) ? 'selected' : '' }} value="{{ $code }}">{{ $currency  }} ({{ $code }})</option>
            @endforeach
        </select>
        @error('currency')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="currencyRatePerUSD">{{ __('Currency rate ( Per USD)') }}</label>
        <input type="number" name="currencyRatePerUSD" id="currencyRatePerUSD" class="form-control" value="{{ $paypal->currencyRatePerUSD  }}">
        @error('currencyRatePerUSD')
        <span class="text-danger">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="paypalClientId">{{ __('Paypal Client Id') }}</label>
        <input type="text" name="paypalClientId" id="paypalClientId" class="form-control" value="{{ $paypal->paypalClientId }}">
        @error('paypalClientId')
        <span class="text-danger">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="paypalClientSecret">{{ __('Paypal Secret Key') }}</label>
        <input type="text" name="paypalClientSecret" id="paypalClientSecret" class="form-control" value="{{ $paypal->paypalClientSecret }}">
        @error('paypalClientSecret')
        <span class="text-danger">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label class="d-block">{{ __('Image') }}</label>
        <img src="{{ asset($paypal->image) }}" alt="">
    </div>
    <div class="form-group">
        <label for="exampleInputFile"> {{ __('New Image') }} </label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
            <label class="custom-file-label" for="image">{{ __('Choose file') }}</label>
          </div>
        </div>
        @error('image')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
