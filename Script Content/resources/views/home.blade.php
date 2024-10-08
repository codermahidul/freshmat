@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<section class="content">
    <div class="container-fluid flex-grow-1 container-p-y">

        <h4 class="d-flex justify-content-between align-items-center py-2 mb-4">
          <div class="font-weight-bold">{{ __('Shop Overview') }}</div>
          <button type="button" class="btn btn-outline-primary btn-round">{{ __('View reports') }}</button>
        </h4>

        <hr class="border-light container-m--x my-0">

        <!-- Stats block -->
        <div class="row no-gutters row-bordered row-border-light container-m--x">

          <!-- Counters -->
          <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
              <div class="lnr lnr-cart display-4 text-primary"></div>
              <div class="ml-3">
                <div class="text-muted small">{{ __('Monthly sales') }}</div>
                <div class="text-large">{{ __('2362') }}</div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
              <div class="lnr lnr-earth display-4 text-primary"></div>
              <div class="ml-3">
                <div class="text-muted small">Monthly visits</div>
                <div class="text-large">687,123</div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
              <div class="lnr lnr-gift display-4 text-primary"></div>
              <div class="ml-3">
                <div class="text-muted small">Products</div>
                <div class="text-large">985</div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-6 col-xl-3">
            <div class="d-flex align-items-center container-p-x py-4">
              <div class="lnr lnr-users display-4 text-primary"></div>
              <div class="ml-3">
                <div class="text-muted small">Users</div>
                <div class="text-large">105,652</div>
              </div>
            </div>
          </div>
          <!-- / Counters -->

          <!-- Payments graph -->
          <div class="col-lg-8 col-xl-9 container-p-x py-4">
            <h5 class="text-muted font-weight-normal mb-4">Payments received</h5>

            <div style="height: 200px;">
              <canvas id="statistics-chart-1"></canvas>
            </div>
          </div>
          <!-- / Payments graph -->

          <!-- Payment stats -->
          <div class="d-flex col-lg-4 col-xl-3 container-p-x py-4">
            <div class="align-self-center w-100">
              <div class="mb-4">
                <span class="text-muted small">Monthly Income</span>
                <br>
                <span class="text-large">$5,123.56</span>
              </div>
              <div class="mb-4">
                <span class="text-muted small">
                  <strong>PayPal</strong> Payments</span>
                <br>
                <span class="text-big">$2,123.44</span>
              </div>
              <div>
                <span class="text-muted small">
                  <strong>Credit Card</strong> Payments</span>
                <br>
                <span class="text-big">$3,000.12</span>
              </div>
            </div>
          </div>
          <!-- / Payment stats -->

          <!-- Mini-graphs -->
          <div class="d-flex col-sm-4 align-items-center container-p-x py-4">
            <div>
              <div class="text-muted small">View depth</div>
              <strong class="text-large font-weight-normal">4.23</strong>
              <sup class="text-success small">+ 12%</sup>
            </div>
            <div class="w-50 ml-auto">
              <div style="height: 40px;">
                <canvas id="statistics-chart-2"></canvas>
              </div>
            </div>
          </div>
          <div class="d-flex col-sm-4 align-items-center container-p-x py-4">
            <div>
              <div class="text-muted small">Bounce rate</div>
              <strong class="text-large font-weight-normal">23%</strong>
              <sup class="text-danger small">- 5%</sup>
            </div>
            <div class="w-50 ml-auto">
              <div style="height: 40px;">
                <canvas id="statistics-chart-3"></canvas>
              </div>
            </div>
          </div>
          <div class="d-flex col-sm-4 align-items-center container-p-x py-4">
            <div>
              <div class="text-muted small">Time on site</div>
              <strong class="text-large font-weight-normal">3:44</strong>
              <sup class="text-success small">+ 2%</sup>
            </div>
            <div class="w-50 ml-auto">
              <div style="height: 40px;">
                <canvas id="statistics-chart-4"></canvas>
              </div>
            </div>
          </div>
          <!-- / Mini-graphs -->

        </div>
        <!-- / Stats block -->

        <hr class="border-light container-m--x mt-0 mb-4">

        <div class="row">

          <div class="col-md-7 col-lg-12 col-xl-7">

            <!-- Popular products -->
            <div class="card mb-4">
              <h6 class="card-header">Popular products</h6>
              <div class="table-responsive">
                <table class="table card-table">
                  <thead>
                    <tr>
                      <th colspan="2">Item</th>
                      <th>Price</th>
                      <th>Sales</th>
                      <th>Views</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle" style="width: 75px">
                        <img class="ui-w-40" src="{{ asset('backend') }}/assets/img/uikit/ps4.jpg" alt>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:void(0)" class="text-dark">PlayStation 4 1TB (Jet Black)</a>
                      </td>
                      <td class="align-middle">$480.00</td>
                      <td class="align-middle">123</td>
                      <td class="align-middle">3,432</td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <img class="ui-w-40" src="{{ asset('backend') }}/assets/img/uikit/nike-1.jpg" alt>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:void(0)" class="text-dark">Nike Men Black Liteforce III Sneakers</a>
                      </td>
                      <td class="align-middle">$57.55</td>
                      <td class="align-middle">222</td>
                      <td class="align-middle">7,231</td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <img class="ui-w-40" src="{{ asset('backend') }}/assets/img/uikit/headphones.jpg" alt>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:void(0)" class="text-dark">Wireless headphones</a>
                      </td>
                      <td class="align-middle">$235.55</td>
                      <td class="align-middle">43</td>
                      <td class="align-middle">3,572</td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <img class="ui-w-40" src="{{ asset('backend') }}/assets/img/uikit/backpack.jpg" alt>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:void(0)" class="text-dark">HERO ATHLETES BAG</a>
                      </td>
                      <td class="align-middle">$160.00</td>
                      <td class="align-middle">38</td>
                      <td class="align-middle">3,111</td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <img class="ui-w-40" src="{{ asset('backend') }}/assets/img/uikit/chair-1.jpg" alt>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:void(0)" class="text-dark">POÄNG</a>
                      </td>
                      <td class="align-middle">$159.00</td>
                      <td class="align-middle">34</td>
                      <td class="align-middle">5,489</td>
                    </tr>
                  </tbody>
                </table>
                <a href="javascript:void(0)" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
              </div>
            </div>
            <!-- / Popular products -->

          </div>
          <div class="col-md-5 col-lg-12 col-xl-5">

            <!-- Sales -->
            <div class="nav-tabs-top mb-4">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#sale-stats">Sale stats</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#latest-sales">Latest sales</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="sale-stats">
                  <table class="table card-table">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Sales</th>
                        <th>Cancelled</th>
                        <th>Delivered</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>02/05/2018</td>
                        <td>12</td>
                        <td>1</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td>02/04/2018</td>
                        <td>16</td>
                        <td>2</td>
                        <td>8</td>
                      </tr>
                      <tr>
                        <td>02/03/2018</td>
                        <td>5</td>
                        <td>0</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>02/02/2018</td>
                        <td>21</td>
                        <td>1</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>02/01/2018</td>
                        <td>16</td>
                        <td>2</td>
                        <td>8</td>
                      </tr>
                      <tr>
                        <td>01/31/2018</td>
                        <td>5</td>
                        <td>0</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>01/30/2018</td>
                        <td>21</td>
                        <td>1</td>
                        <td>10</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="javascript:void(0)" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
                </div>
                <div class="tab-pane fade" id="latest-sales">
                  <table class="table card-table">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Qty.</th>
                        <th>Sum.</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">PlayStation 4 1TB (Jet Black)</a>
                        </td>
                        <td class="align-middle">1</td>
                        <td class="align-middle">$480.00</td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">Nike Men Black Liteforce III Sneakers</a>
                        </td>
                        <td class="align-middle">2</td>
                        <td class="align-middle">$115.1</td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">Wireless headphones</a>
                        </td>
                        <td class="align-middle">1</td>
                        <td class="align-middle">$235.55</td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">HERO ATHLETES BAG</a>
                        </td>
                        <td class="align-middle">1</td>
                        <td class="align-middle">$160.00</td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">POÄNG</a>
                        </td>
                        <td class="align-middle">3</td>
                        <td class="align-middle">$477.00</td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">Apple iWatch (black)</a>
                        </td>
                        <td class="align-middle">1</td>
                        <td class="align-middle">$399.00</td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <a href="javascript:void(0)" class="text-dark">WALKING 400 BLUE CAT3</a>
                        </td>
                        <td class="align-middle">2</td>
                        <td class="align-middle">$41.1</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="javascript:void(0)" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
                </div>
              </div>
            </div>
            <!-- / Sales -->

          </div>
          <div class="col-md-6">

            <!-- Support tickets -->
            <div class="card mb-4">
              <h6 class="card-header">Support tickets</h6>
              <div class="card-body">

                <div class="pb-1 mb-3">
                  <div class="badge badge-outline-warning float-right">Feature</div>
                  <a href="javascript:void(0)">Lorem ipsum dolor sit amet, vis erat denique in.</a>&nbsp;
                  <span class="text-muted">#34563</span>
                  <br>
                  <small class="text-muted">Created by
                    <a href="javascript:void(0)" class="text-dark">Mike Greene</a> &nbsp;·&nbsp; 1 day ago</small>
                </div>

                <div class="pb-1 mb-3">
                  <div class="badge badge-outline-danger float-right">Bug</div>
                  <a href="javascript:void(0)">Dicunt prodesset te vix.</a>&nbsp;
                  <span class="text-muted">#34524</span>
                  <br>
                  <small class="text-muted">Created by
                    <a href="javascript:void(0)" class="text-dark">Leon Wilson</a> &nbsp;·&nbsp; 1 day ago</small>
                </div>

                <div class="pb-1 mb-3">
                  <div class="badge badge-outline-success float-right">Question</div>
                  <a href="javascript:void(0)">Sit meis deleniti eu, pri vidit meliore docendi ut?</a>&nbsp;
                  <span class="text-muted">#34563</span>
                  <br>
                  <small class="text-muted">Created by
                    <a href="javascript:void(0)" class="text-dark">Allie Rodriguez</a> &nbsp;·&nbsp; 1 day ago</small>
                </div>

                <div class="pb-1 mb-3">
                  <div class="badge badge-outline-secondary float-right">Enhancement</div>
                  <a href="javascript:void(0)">Eu tantas offendit mnesarchum sit, vide novum ad pri.</a>&nbsp;
                  <span class="text-muted">#34563</span>
                  <br>
                  <small class="text-muted">Created by
                    <a href="javascript:void(0)" class="text-dark"> Kenneth Frazier</a> &nbsp;·&nbsp; 1 day ago</small>
                </div>

                <div class="pb-1 mb-3">
                  <div class="badge badge-outline-warning float-right">Feature</div>
                  <a href="javascript:void(0)">Lorem ipsum dolor sit amet, vis erat denique in.</a>&nbsp;
                  <span class="text-muted">#34563</span>
                  <br>
                  <small class="text-muted">Created by
                    <a href="javascript:void(0)" class="text-dark">Mike Greene</a> &nbsp;·&nbsp; 1 day ago</small>
                </div>

                <div>
                  <div class="badge badge-outline-danger float-right">Bug</div>
                  <a href="javascript:void(0)">Dicunt prodesset te vix.</a>&nbsp;
                  <span class="text-muted">#34524</span>
                  <br>
                  <small class="text-muted">Created by
                    <a href="javascript:void(0)" class="text-dark">Leon Wilson</a> &nbsp;·&nbsp; 1 day ago</small>
                </div>

              </div>
              <a href="javascript:void(0)" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
            </div>
            <!-- / Support tickets -->

          </div>
          <div class="col-md-6">

            <!-- Latest comments -->
            <div class="card mb-4">
              <h6 class="card-header">
                <div class="title-text">Latest comments</div>
              </h6>
              <div class="card-body">

                <div class="media pb-1 mb-3">
                  <img src="assets/img/avatars/9-small.png" class="d-block ui-w-40 rounded-circle" alt>
                  <div class="media-body flex-truncate ml-3">
                    <a href="javascript:void(0)">Amanda Warner</a>
                    <span class="text-muted">commented on</span>
                    <a href="javascript:void(0)">Article Name</a>
                    <p class="text-truncate my-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                    <div class="clearfix">
                      <span class="float-left text-muted small">2 hours ago</span>
                    </div>
                  </div>
                </div>

                <div class="media pb-1 mb-3">
                  <img src="{{ asset('backend') }}/assets/img/avatars/8-small.png" class="d-block ui-w-40 rounded-circle" alt>
                  <div class="media-body flex-truncate ml-3">
                    <a href="javascript:void(0)">Hallie Lewis</a>
                    <span class="text-muted">commented on</span>
                    <a href="javascript:void(0)">Article Name</a>
                    <p class="text-truncate my-1">Vivendum torquatos ut nec, sit audiam deterruisset ei, cu sed nibh autem scriptorem. Ea quo vidit deleniti constituto, ex qui malis mollis iudicabit, viris fabellas id has.</p>
                    <div class="clearfix">
                      <span class="float-left text-muted small">2 hours ago</span>
                    </div>
                  </div>
                </div>

                <div class="media pb-1 mb-3">
                  <img src="{{ asset('backend') }}/assets/img/avatars/7-small.png" class="d-block ui-w-40 rounded-circle" alt>
                  <div class="media-body flex-truncate ml-3">
                    <a href="javascript:void(0)">Alice Hampton</a>
                    <span class="text-muted">commented on</span>
                    <a href="javascript:void(0)">Article Name</a>
                    <p class="text-truncate my-1">Eam facilis laboramus reprehendunt ei, ex esse fastidii per.</p>
                    <div class="clearfix">
                      <span class="float-left text-muted small">2 hours ago</span>
                    </div>
                  </div>
                </div>

                <div class="media">
                  <img src="{{ asset('backend') }}/assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                  <div class="media-body flex-truncate ml-3">
                    <a href="javascript:void(0)">Mae Gibson</a>
                    <span class="text-muted">commented on</span>
                    <a href="javascript:void(0)">Article Name</a>
                    <p class="text-truncate my-1">Ea inani epicurei mea. No docendi antiopam quo, ad dicant viderer cotidieque vix. Ea mea dicat ludus, utroque explicari conclusionemque ius eu, in scaevola tractatos persecuti per.</p>
                    <div class="clearfix">
                      <span class="float-left text-muted small">2 hours ago</span>
                    </div>
                  </div>
                </div>

              </div>
              <a href="javascript:void(0)" class="card-footer d-block text-center text-dark small font-weight-semibold">SHOW MORE</a>
            </div>
            <!-- / Latest comments -->

          </div>
        </div>

      </div>
@endsection
