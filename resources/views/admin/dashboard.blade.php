@include('layout.header')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-congratulations">
                  <div class="card-body text-center">
                    <img src="/app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left">
                    <img src="/app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right">
                    <div class="avatar avatar-xl bg-primary shadow">
                      <div class="avatar-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award font-large-1"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                      </div>
                    </div>
                    <div class="text-center">
                      <h1 class="mb-1 text-white">Selamat Datang {{auth()->user()->name}},</h1>
                      <p class="card-text m-auto w-75">
                        {{auth()->user()->nama}}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@include('layout.footer')
