<form action="{{ route('general') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="tobpar">Topbar</label>
        <select name="topbar" id="topbar" class="form-control">
            <option value="show" {{ (setting('topbar') == 'show') ? 'selected' : '' }}>Show</option>
            <option value="hide" {{ (setting('topbar') == 'hide') ? 'selected' : '' }}>Hide</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>