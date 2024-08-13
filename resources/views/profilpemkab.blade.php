<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Welcome to Rakon Multi-Purpose HTML5 Templates RTL Supported, built with HTML, JS, SASS, CSS3 and jQuery, RTL Supported, Easy User Experience and Responsive to all devices" />
  <meta name="keywords"
    content="HTML, CSS, JavaScript, Bootstrap, jQuery, Rakon, Themeforest, Template, envato, SASS, SCSS, HTML5, landing page, SaaS Product, SaaS Modern,  MultiPurpose, Crypto, Currency, ICO, Hosting, Agency, Mobile, App, Interior, Charity" />
  <meta name="author" content="Rakon - Creative Multi-Purpose HTML5 Templates" />

  <title>About - Creative Multi-Purpose HTML5 Templates</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon" />
  <!-- Bootstrap 4.5 -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" />
  <!-- animate -->
  <link rel="stylesheet" href="/assets/css/animate.css" type="text/css" />
  <!-- Swiper -->
  <link rel="stylesheet" href="/assets/css/swiper.min.css" />
  <!-- aos -->
  <link rel="stylesheet" href="/assets/css/aos.css" type="text/css" />
  <!-- icons -->
  <link rel="stylesheet" href="/assets/css/icons.css" type="text/css" />
  <!-- main css -->
  <link rel="stylesheet" href="/assets/css/main.css" type="text/css" />
  <!-- normalize -->
  <link rel="stylesheet" href="/assets/css/normalize.css" type="text/css" />

  <!-- js for Brwoser -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!-- Global site tag (gtag.js) - Google Ads: 971083070 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-971083070"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'AW-971083070');
  </script>
  <!-- Event snippet for Website sale conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
  <script>
    function gtag_report_conversion(url) {
      var callback = function () {
        if (typeof (url) != 'undefined') {
          window.location = url;
        }
      };
      gtag('event', 'conversion', {
        'send_to': 'AW-971083070/7bFICNXzudkBEL6ahs8D',
        'transaction_id': '',
        'event_callback': callback
      });
      return false;
    }
  </script>

</head>

<body>
  <div id="wrapper">
    <div id="content">
        @include('layout.frontpages.header')

      <!-- Stat main -->
      <main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <!-- Start banner_about -->
        <section class="pt_banner_inner banner_px_image" id="Discover">
          <div class="parallax_cover">
            <img class="cover-parallax" src="/assets/img/inner/about.jpg" alt="image">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-lg-6">
                <div class="banner_title_inner">
                  <h1 data-aos="fade-up" data-aos-delay="0">
                    Pemkab Takalar
                  </h1>
                  <p data-aos="fade-up" data-aos-delay="100">
                     Pemerintah Kabupaten Takalar
                  </p>
                  <div data-aos="fade-up" data-aos-delay="200">
                    <a href="https://takalarkab.go.id/" class="btn btn_sm_primary bg-orange-red c-white rounded-8">Website Resmi</a>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- End banner_about -->

        <!-- Start about_cc_grid -->
        <section class="about_cc_grid padding-py-12" id="About">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="title_sections_inner mb-0">
                  <div class="before_title">
                    <span class="c-orange-red">Tentang Kami</span>
                  </div>
                  <h2>Pemerintah Kabupaten Takalar berkomitmen untuk melayani, berinovasi, dan membangun masa depan yang lebih baik bersama masyarakat</h2>
                </div>
              </div>
              <div class="col-lg-6 ml-auto">
                <div class="title_sections_inner mb-0">
                  <p>Pemerintah Kabupaten Takalar berkomitmen untuk memberikan pelayanan yang terbaik kepada masyarakat dengan semangat inovasi dan dedikasi tinggi. Setiap kebijakan dan program yang diinisiasi selalu mengutamakan kesejahteraan masyarakat dan pengembangan potensi daerah, agar Takalar dapat berkembang secara berkelanjutan dan inklusif.
                    <br>
                    Melalui kolaborasi yang erat dengan berbagai pemangku kepentingan, Pemerintah Kabupaten Takalar terus berupaya mewujudkan visi bersama untuk masa depan yang lebih cerah. Dengan mengedepankan transparansi dan akuntabilitas, pemerintah berusaha menciptakan lingkungan yang kondusif bagi pertumbuhan ekonomi, sosial, dan budaya, serta meningkatkan kualitas hidup seluruh warga Takalar.
                </div>
              </div>
            </div>

            <div class="row justify-content-center margin-t-12" data-aos="fade-up" data-aos-delay="0">
              <div class="col-lg-5 text-right">
                <div class="group_img">
                  <img src="/assets/img/inner/a01.png" alt="">
                  <img src="/assets/img/inner/a03.png" alt="">
                </div>
              </div>
              <div class="col-lg-7 text-left">
                <div class="group_img_two">
                  <img src="/assets/img/inner/a02.png" alt="">
                  <img src="/assets/img/inner/a04.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End. about_cc_grid -->

    <!-- Video Modal -->
    <div class="modal mdll_video fade" id="mdllVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <!-- Close -->
      <button type="button" class="close bbt_close ripple_circle" data-dismiss="modal" aria-label="Close">
        <i class="tio clear"></i>
      </button>
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                allow="autoplay"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

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
