<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Contact Info') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('topbarUpdate') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">{{ __('Phone') }}</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Phone Number" value="{{ topbarContent('phone') }}">
                                    @error('phone')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email" value="{{ topbarContent('email') }}">
                                    @error('email')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="location">{{ __('Location') }}</label>
                                    <input type="text" name="location" id="location" class="form-control"
                                        placeholder="Location" value="{{ topbarContent('location') }}">
                                    @error('location')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">{{ __('Support Number') }}</label>
                                    <input type="text" name="supportNumber" id="supportNumber" class="form-control"
                                        placeholder="Location" value="{{ topbarContent('supportNumber') }}">
                                    @error('supportNumber')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">{{ __('Support Text') }}</label>
                                    <input type="text" name="supportText" id="supportText" class="form-control"
                                        placeholder="Location" value="{{ topbarContent('supportText') }}">
                                    @error('supportText')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Social Links') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('socialLinkInsert') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="icon">{{ __('Social Media') }}</label>
                                    <select name="icon" id="icon" class="form-control">
                                        <option value="fab fa-facebook-f">{{ __('Facebook') }}</option>
                                        <option value="fab fa-twitter">{{ __('Twitter') }}</option>
                                        <option value="fab fa-linkedin-in">{{ __('Linkedin') }}</option>
                                        <option value="fab fa-instagram">{{ __('Instagram') }}</option>
                                        <option value="fab fa-youtube">{{ __('YouTube') }}</option>
                                        <option value="fab fa-pinterest-p">{{ __('Pinterest') }}</option>
                                        <option value="fab fa-snapchat-ghost">{{ __('Snapchat') }}</option>
                                        <option value="fab fa-tiktok">{{ __('TikTok') }}</option>
                                        <option value="fab fa-reddit-alien">{{ __('Reddit') }}</option>
                                    </select>
                                    @error('icon')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="link">{{ __('Link') }}</label>
                                    <input type="text" name="link" id="link" class="form-control"
                                        placeholder="Enter Your Link">
                                    @error('link')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2 d-flex align-items-center mt-3">
                                <button type="submit" class="btn btn-primary">{{ __('Add New') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>{{ __('Sl') }}</th>
                                    <th>{{ __('Social Media') }}</th>
                                    <th>{{ __('Link') }}</th>
                                    <th>{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (socialLinks() as $item)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td><i class="btn btn-secondary {{ $item->icon }}"></i></td>
                                        <td>
                                            <a class="btn-sm btn btn-primary" target="_blank"
                                                href="{{ $item->url }}"><i class="fas fa-eye"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('socialLinkDelete', $item->id) }}"
                                                class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>{{ __('No Social Links found!') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
