<section class="contetn p-5">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">{{ __('Home One Deals') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('homeOneDealsUpdate') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="shortTitle">{{ __('Short Title') }}</label>
                    <input type="text" name="shortTitle" id="shortTitle" class="form-control"
                        placeholder="Short Title" value="{{ deals(1)->shortTitle }}">
                    @error('shortTitle')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="offerText">{{ __('Offer Text') }}</label>
                    <input type="text" name="offerText" id="offerText" class="form-control" placeholder="Offer Text"
                        value="{{ deals(1)->offerText }}">
                    @error('offerText')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">{{ __('Description') }}</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Description">{{ deals(1)->description }}</textarea>
                    @error('description')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date">{{ __('Date') }}</label>
                    <input type="date" name="date" id="date" class="form-control"
                        value="{{ old('date', deals(1)->date) }}">
                    @error('date')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="link">{{ __('Link') }}</label>
                    <input type="text" name="link" id="link" class="form-control" placeholder="Link"
                        value="{{ deals(1)->link }}">
                    @error('link')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="backgroundImg">{{ __('Previous Background Image') }}</label>
                    <div class="image">
                        <img class="img-fluid w-100" src="{{ asset(deals(1)->backgroundImg) }}" alt="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="backgroundImg">{{ __('Background Image') }}</label>
                    <input type="file" name="backgroundImg" id="backgroundImg" class="form-control">
                    @error('backgroundImg')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
            </form>
        </div>
    </div>
</section>
