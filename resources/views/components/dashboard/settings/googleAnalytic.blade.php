<form action="{{ route('googleAnalytic') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="glanalyticStatus">Allow Google Analytic</label>
        <select name="glanalyticStatus" id="glanalyticStatus" class="form-control">
            <option value="enable" {{ (setting('glanalyticStatus') == 'enable') ? 'selected' : '' }}>Enable</option>
            <option value="disable" {{ (setting('glanalyticStatus') == 'disable') ? 'selected' : '' }}>Disable</option>
        </select>
    </div>
    <div class="form-group">
        <label for="analiticTrackingId">Analytic Tracking Id</label>
        <input type="text" class="form-control" placeholder="Analytic Tracking Id" value="{{ setting('analiticTrackingId') }}" name="analiticTrackingId">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>