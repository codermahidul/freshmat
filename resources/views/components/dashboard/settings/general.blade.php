<form action="{{ route('general') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="theme">{{ __('Theme') }}</label>
        <select name="theme" id="theme" class="form-control">
            <option value="all" {{ (setting('theme') == 'show') ? 'selected' : '' }}>{{ __('All') }}</option>
            <option value="one" {{ (setting('theme') == 'one') ? 'selected' : '' }}>{{ __('Home One') }}</option>
            <option value="two" {{ (setting('theme') == 'two') ? 'selected' : '' }}>{{ __('Home Two') }}</option>
            <option value="three" {{ (setting('theme') == 'three') ? 'selected' : '' }}>{{ __('Home Three') }}</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tobpar">{{ __('Topbar') }}</label>
        <select name="topbar" id="topbar" class="form-control">
            <option value="show" {{ (setting('topbar') == 'show') ? 'selected' : '' }}>{{ __('Show') }}</option>
            <option value="hide" {{ (setting('topbar') == 'hide') ? 'selected' : '' }}>{{ __('Hide') }}</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
</form>
