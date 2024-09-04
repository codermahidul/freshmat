<form action="{{ route('googleAnalytic') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="glanalyticStatus">{{ __('Allow Google Analytic') }}</label>
        <select name="glanalyticStatus" id="glanalyticStatus" class="form-control">
            <option value="enable" {{ (setting('glanalyticStatus') == 'enable') ? 'selected' : '' }}>{{ __('Enable') }}</option>
            <option value="disable" {{ (setting('glanalyticStatus') == 'disable') ? 'selected' : '' }}>{{ __('Disable') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="analiticTrackingId">{{ __('Analytic Tracking Id') }}</label>
        <input type="text" class="form-control" placeholder="Analytic Tracking Id" value="{{ setting('analiticTrackingId') }}" name="analiticTrackingId">
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
