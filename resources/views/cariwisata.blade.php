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
                    Destinasi
                  </h1>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End banner_about -->

        @foreach ($kategoris as $k)
        <!-- Start blog_slider -->
        <section class="section__stories blog_slider margin-b-6">
            <div class="container">
              <div class="row justify-content-center text-center">
                <div class="col-lg-5">
                  <div class="title_sections margin-b-5">
                    <h2>{{$k->kategori}}</h2>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                @foreach ($k->destinasis as $d)
                <div class="col-lg-4">
                    <div class="grid_blog_avatar">
                      <div class="cover_blog">
                        <img src="/assets/img/charity/002.jpg" alt="">
                      </div>
                      <div class="body_blog">
                        <a href="https://orinostudio.com/rakon-theme/html/elements/single-blog.html" class="link_blog">
                          <h4 class="title_blog">
                            {{$d->nama}}
                          </h4>
                          <p class="short_desc">
                            {{ \App\Helpers\TextHelper::extractText($d->content) }}
                          </p>
                        </a>
                      </div>
                    </div>
                    <!-- End grid_blog_avatar -->
                  </div>
                @endforeach
              </div>

            </div>
          </section>
          <!-- End. blog_slider -->
        @endforeach

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
