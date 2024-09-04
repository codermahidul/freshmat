<form action="{{ route('stripe.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="status">{{ __('Status') }}</label>
        <select name="status" id="status" class="form-control">
            <option {{ ($stripe->status == 'enable') ? 'selected' : '' }} value="enable">{{ __('Enabale') }}</option>
            <option {{ ($stripe->status == 'disable') ? 'selected' : '' }} value="disable">{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="country">{{ __('Country') }}</label>
        <select name="country" id="country" class="form-control">
            <option value="">{{ __('Select Country') }}</option>
            @foreach (config('countries') as $code => $country)
            <option {{ ($stripe->countryName == $country) ? 'selected' : '' }} value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currency">{{ __('Currency') }}</label>
        <select name="currency" id="currency" class="form-control">
            <option value="">{{ __('Select Currency') }}</option>
            @foreach (config('currencies') as $code => $currency)
            <option {{ ($stripe->currencyName == $code) ? 'selected' : '' }} value="{{ $code }}">{{ $currency  }} ({{ $code }})</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currencyRatePerUSD">{{ __('Currency rate ( Per USD)') }}</label>
        <input type="number" name="currencyRatePerUSD" id="currencyRatePerUSD" class="form-control" value="{{ $stripe->currencyRatePerUSD }}">
    </div>
    <div class="form-group">
        <label for="stripeClientId">{{ __('Stripe Client Id') }}</label>
        <input type="text" name="stripeClientId" id="stripeClientId" class="form-control" value="{{ $stripe->stripeClientId }}">
    </div>
    <div class="form-group">
        <label for="stripeSecretKey">{{ __('Stripe Secret Key') }}</label>
        <input type="text" name="stripeSecretKey" id="stripeSecretKey" class="form-control" value="{{ $stripe->stripeSecretKey }}">
    </div>
    <div class="form-group">
        <label class="d-block">{{ __('Image') }}</label>
        <img src="{{ asset($stripe->image) }}" alt="">
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
