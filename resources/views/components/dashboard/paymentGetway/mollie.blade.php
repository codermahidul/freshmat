<form action="{{ route('mollie.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="status">{{ __('Status') }}</label>
        <select name="status" id="status" class="form-control">
            <option {{ ($mollie->status == 'enable') ? 'selected' : '' }} value="enable">{{ __('Enable') }}</option>
            <option {{ ($mollie->status == 'disable') ? 'selected' : '' }} value="disable">{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="country">{{ __('Country') }}</label>
        <select name="country" id="country" class="form-control">
            <option value="">{{ __('Select Country') }}</option>
            @foreach (config('countries') as $code => $country)
            <option {{ ($mollie->countryName == $country) ? 'selected' : '' }} value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currency">{{ __('Currency') }}</label>
        <select name="currency" id="currency" class="form-control">
            <option value="">{{ __('Select Currency') }}</option>
            @foreach (config('currencies') as $code => $currency)
            <option {{ ($mollie->currencyName == $code) ? 'selected' : '' }} value="{{ $code }}">{{ $currency  }} ({{ $code }})</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="currencyRatePerUSD">{{ __('Currency rate ( Per USD)') }}</label>
        <input type="number" name="currencyRatePerUSD" id="currencyRatePerUSD" class="form-control" value="{{ $mollie->currencyRatePerUSD }}">
    </div>
    <div class="form-group">
        <label for="mollieKey">{{ __('Mollie Key') }}</label>
        <input type="text" name="mollieKey" id="mollieKey" class="form-control" value="{{ $mollie->mollieKey }}">
    </div>
    <div class="form-group">
        <label class="d-block">{{ __('Image') }}</label>
        <img width="200" src="{{ asset($mollie->image) }}" alt="">
    </div>
    <div class="form-group">
        <label for="exampleInputFile"> {{ __('New Image') }} </label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
            <label class="custom-file-label" for="logo">{{ __('Choose file') }}</label>
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
