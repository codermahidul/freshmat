<section class="content p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-sm-3">
                            <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="vert-tabs-paypal-tab" data-toggle="pill" href="#vert-tabs-paypal"
                                    role="tab" aria-controls="vert-tabs-paypal" aria-selected="true">Paypal</a>
                                <a class="nav-link" id="vert-tabs-stripe-tab" data-toggle="pill" href="#vert-tabs-stripe"
                                    role="tab" aria-controls="vert-tabs-stripe" aria-selected="false">Stripe</a>
                                <a class="nav-link" id="vert-tabs-mollie-tab" data-toggle="pill" href="#vert-tabs-mollie"
                                    role="tab" aria-controls="vert-tabs-mollie" aria-selected="false">Mollie</a>
                                {{-- Extra --}}
                                {{-- <a class="nav-link" id="vert-tabs-mollie-tab" data-toggle="pill" href="#vert-tabs-mollie" role="tab" aria-controls="vert-tabs-mollie" aria-selected="false">Google Analytic</a>
                        <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Google Recaptcha</a>
                        <a class="nav-link" id="vert-tabs-facebook-pixel-tab" data-toggle="pill" href="#vert-tabs-facebook-pixel" role="tab" aria-controls="vert-tabs-facebook-pixel" aria-selected="false">Facebook Pixel</a>
                        <a class="nav-link" id="vert-tabs-database-tab" data-toggle="pill" href="#vert-tabs-database" role="tab" aria-controls="vert-tabs-database" aria-selected="false">Database</a> --}}
                            </div>
                        </div>
                        <div class="col-7 col-sm-9">
                            <div class="tab-content" id="vert-tabs-tabContent">
                                <div class="tab-pane text-left fade show active" id="vert-tabs-paypal" role="tabpanel"
                                    aria-labelledby="vert-tabs-paypal-tab">
                                    @include('components.dashboard.paymentGetway.paypal')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-stripe" role="tabpanel"
                                    aria-labelledby="vert-tabs-stripe-tab">
                                    @include('components.dashboard.paymentGetway.stripe')
                                </div>
                                <div class="tab-pane fade" id="vert-tabs-mollie" role="tabpanel"
                                    aria-labelledby="vert-tabs-mollie-tab">
                                    @include('components.dashboard.paymentGetway.mollie')
                                </div>
                                {{-- Extra --}}
                                {{-- <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                          @include('components.dashboard.settings.googleRecapcha')
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-social-login" role="tabpanel" aria-labelledby="vert-tabs-social-login-tab">
                          @include('components.dashboard.settings.socialLogin')
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-facebook-pixel" role="tabpanel" aria-labelledby="vert-tabs-facebook-pixel-tab">
                          @include('components.dashboard.settings.facebookPixel')
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-database" role="tabpanel" aria-labelledby="vert-tabs-database-tab">
                          @include('components.dashboard.settings.database')
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</section>
