<form action="{{ route('general') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="theme">Theme</label>
        <select name="theme" id="theme" class="form-control">
            <option value="all" {{ (setting('theme') == 'show') ? 'selected' : '' }}>All</option>
            <option value="one" {{ (setting('theme') == 'one') ? 'selected' : '' }}>Home One</option>
            <option value="two" {{ (setting('theme') == 'two') ? 'selected' : '' }}>Home Two</option>
            <option value="three" {{ (setting('theme') == 'three') ? 'selected' : '' }}>Home Three</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tobpar">Topbar</label>
        <select name="topbar" id="topbar" class="form-control">
            <option value="show" {{ (setting('topbar') == 'show') ? 'selected' : '' }}>Show</option>
            <option value="hide" {{ (setting('topbar') == 'hide') ? 'selected' : '' }}>Hide</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>