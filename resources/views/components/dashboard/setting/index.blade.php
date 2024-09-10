<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                                    role="tab" aria-controls="vert-tabs-home"
                                    aria-selected="true">{{ __('General Setting') }}</a>
                                <a class="nav-link" id="vert-tabs-social-login-tab" data-toggle="pill"
                                    href="#vert-tabs-social-login" role="tab" aria-controls="vert-tabs-social-login"
                                    aria-selected="false">{{ __('Social Login') }}</a>
                                <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                                    role="tab" aria-controls="vert-tabs-profile"
                                    aria-selected="false">{{ __('Logo and Favicon') }}</a>
                                <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                                    role="tab" aria-controls="vert-tabs-messages"
                                    aria-selected="false">{{ __('Google Analytic') }}</a>
                                <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                                    role="tab" aria-controls="vert-tabs-settings"
                                    aria-selected="false">{{ __('Google Recaptcha') }}</a>
                                <a class="nav-link" id="vert-tabs-facebook-pixel-tab" data-toggle="pill"
                                    href="#vert-tabs-facebook-pixel" role="tab" aria-controls="vert-tabs-facebook-pixel"
                                    aria-selected="false">{{ __('Facebook Pixel') }}</a>
                                <a class="nav-link" id="vert-tabs-database-tab" data-toggle="pill" href="#vert-tabs-database"
                                    role="tab" aria-controls="vert-tabs-database" aria-selected="false">{{ __('Database') }}</a>
                            </div>
                        </div>
                        <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                                    aria-labelledby="vert-tabs-home-tab">
                                    @include('components.dashboard.settings.general')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                                    aria-labelledby="vert-tabs-profile-tab">
                                    @include('components.dashboard.settings.logoFavicon')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                                    aria-labelledby="vert-tabs-messages-tab">
                                    @include('components.dashboard.settings.googleAnalytic')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                                    aria-labelledby="vert-tabs-settings-tab">
                                    @include('components.dashboard.settings.googleRecapcha')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-social-login" role="tabpanel"
                                    aria-labelledby="vert-tabs-social-login-tab">
                                    @include('components.dashboard.settings.socialLogin')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-facebook-pixel" role="tabpanel"
                                    aria-labelledby="vert-tabs-facebook-pixel-tab">
                                    @include('components.dashboard.settings.facebookPixel')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-database" role="tabpanel"
                                    aria-labelledby="vert-tabs-database-tab">
                                    @include('components.dashboard.settings.database')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</section>
