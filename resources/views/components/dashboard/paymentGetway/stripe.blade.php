<form action="{{ route('stripe.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option {{ ($stripe->status == 'enable') ? 'selected' : '' }} value="enable">Enabale</option>
            <option {{ ($stripe->status == 'disable') ? 'selected' : '' }} value="disable">Disable</option>
        </select>
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <select name="country" id="country" class="form-control">
            <option value="">Select Country</option>
            @foreach (config('countries') as $code => $country)
            <option {{ ($stripe->countryName == $country) ? 'selected' : '' }} value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currency">Currency</label>
        <select name="currency" id="currency" class="form-control">
            <option value="">Select Currency</option>
            @foreach (config('currencies') as $code => $currency)
            <option {{ ($stripe->currencyName == $code) ? 'selected' : '' }} value="{{ $code }}">{{ $currency  }} ({{ $code }})</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currencyRatePerUSD">Currency rate ( Per USD)</label>
        <input type="number" name="currencyRatePerUSD" id="currencyRatePerUSD" class="form-control" value="{{ $stripe->currencyRatePerUSD }}">
    </div>
    <div class="form-group">
        <label for="stripeClientId">Stripe Client Id</label>
        <input type="text" name="stripeClientId" id="stripeClientId" class="form-control" value="{{ $stripe->stripeClientId }}">
    </div>
    <div class="form-group">
        <label for="stripeSecretKey">Stripe Secret Key</label>
        <input type="text" name="stripeSecretKey" id="stripeSecretKey" class="form-control" value="{{ $stripe->stripeSecretKey }}">
    </div>
    <div class="form-group">
        <label class="d-block">Image</label>
        <img src="{{ asset($stripe->image) }}" alt="">
    </div>
    <div class="form-group">
        <label for="exampleInputFile"> {{ __('New Image') }} </label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
            <label class="custom-file-label" for="image">Choose file</label>
          </div>
        </div>
        @error('image')
          <span class="text-danger">
              {{$message}}
          </span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
