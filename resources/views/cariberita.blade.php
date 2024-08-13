@include('layout.frontpages.header')

      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <!-- Start banner_about -->
        <section class="pt_banner_inner">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-6">
                <div class="banner_title_inner margin-b-10">
                  <h1 data-aos="fade-up" data-aos-delay="0">
                    Berita
                  </h1>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End banner_about -->

        <!-- Start blog_masonry -->
        <section class="blog_masonry three_column height_fixed">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-5">
                  <div class="title_sections margin-b-5">
                    <h2>Terbaru</h2>
                  </div>
                </div>
              </div>
              <div class="row">

                @foreach ($beritas->take(3) as $b)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                      <a href="{{route('berita.show', ['beritum' => $b->id])}}" class="link_poet">
                        <div class="cover_link">
                          <img class="main_img" src="{{$b->cover_base64}}" class="card-img-top" alt="...">
                          <div class="auther_post">
                            <div class="media">
                              <img src="/profileic.png" alt="">
                              <div class="media-body my-auto">
                                <div class="txt">
                                  <h4>{{$b->user->name}}</h4>
                                  <p>{{ (new DateTime($b->created_at))->format('d-m-Y H:i') }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="card-body">
                        <div class="about_post">
                          <time>{{ (new DateTime($b->created_at))->format('d-m-Y H:i') }}</time>
                        </div>
                        <a href="{{route('berita.show', ['beritum' => $b->id])}}" class="d-block">
                          <h5 class="card-title">{{$b->title}}</h5>
                          <p class="card-text">{{ \App\Helpers\TextHelper::extractText($b->content) }}
                          </p>
                        </a>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>
            </div>
          </section>
          <!-- End. blog_masonry -->
      </main>
    </div>
    <!-- [id] content -->


    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>

    <!-- Purchase item -->
    <a href="https://themeforest.net/item/rakon-html-landing-page-templates/27849521" target="_blank"
      class="rakon_purchase">
      <button type="button" class="btn btn_purch">
        <div class="icon">
          <img src="/assets/img/rakon/envato.svg" />
        </div>
        <span class="txt">Purchase</span>
      </button>
    </a>
    <!-- End. -->


  </div>
  <!-- End. wrapper -->

  <!-- jquery -->
  <script src="/assets/js/jquery-3.5.0.js" type="text/javascript"></script>
  <!-- jquery-migrate -->
  <script src="/assets/js/jquery-migrate.min.js" type="text/javascript"></script>
  <!-- popper -->
  <script src="/assets/js/popper.min.js" type="text/javascript"></script>
  <!-- bootstrap -->
  <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <!--
  ============
  vendor file
  ============
   -->
  <!-- particles -->
  <script src="/assets/js/vendor/particles.min.js" type="text/javascript"></script>
  <!-- TweenMax -->
  <script src="/assets/js/vendor/TweenMax.min.js" type="text/javascript"></script>
  <!-- ScrollMagic -->
  <script src="/assets/js/vendor/ScrollMagic.js" type="text/javascript"></script>
  <!-- animation.gsap -->
  <script src="/assets/js/vendor/animation.gsap.js" type="text/javascript"></script>
  <!-- addIndicators -->
  <script src="/assets/js/vendor/debug.addIndicators.min.js" type="text/javascript"></script>
  <!-- Swiper js -->
  <script src="/assets/js/vendor/swiper.min.js" type="text/javascript"></script>
  <!-- countdown -->
  <script src="/assets/js/vendor/countdown.js" type="text/javascript"></script>
  <!-- simpleParallax -->
  <script src="/assets/js/vendor/simpleParallax.min.js" type="text/javascript"></script>
  <!-- waypoints -->
  <script src="/assets/js/vendor/waypoints.min.js" type="text/javascript"></script>
  <!-- counterup -->
  <script src="/assets/js/vendor/jquery.counterup.min.js" type="text/javascript"></script>
  <!-- charming -->
  <script src="/assets/js/vendor/charming.min.js" type="text/javascript"></script>
  <!-- imagesloaded -->
  <script src="/assets/js/vendor/imagesloaded.pkgd.min.js" type="text/javascript"></script>
  <!-- BX-Slider -->
  <script src="/assets/js/vendor/jquery.bxslider.min.js" type="text/javascript"></script>
  <!-- Sharer -->
  <script src="/assets/js/vendor/sharer.js" type="text/javascript"></script>
  <!-- sticky -->
  <script src="/assets/js/vendor/sticky.min.js" type="text/javascript"></script>
  <!-- Aos -->
  <script src="/assets/js/vendor/aos.js" type="text/javascript"></script>
  <!-- main file -->
  <script src="/assets/js/main.js" type="text/javascript"></script>

</body>

</html>
