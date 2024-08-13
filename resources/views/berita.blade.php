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

  <title>{{$b->title}}</title>
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
        <!-- Start Banner Section -->
        <section class="pt_banner_inner banner_Sblog_default">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-md-8 col-lg-7 my-auto">
                <div class="banner_title_inner margin-b-8">
                  <div class="icon_c six">
                    <svg id="Stockholm-icons-_-Home-_-Deer" data-name="Stockholm-icons-/-Home-/-Deer"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <rect id="bound" width="24" height="24" fill="none" />
                      <path id="Combined-Shape"
                        d="M21.982,8.189a.993.993,0,0,1-.467.668l-5,3A1,1,0,0,1,16,12H8a1,1,0,0,1-.514-.143l-5-3a.993.993,0,0,1-.467-.668l-1-4.993A1,1,0,0,1,2.981,2.8l.634,3.168L6.293,3.293A1,1,0,0,1,7.707,4.707L4.613,7.8,8.277,10h7.446l3.664-2.2L16.293,4.707a1,1,0,0,1,1.414-1.414l2.679,2.679L21.019,2.8a1,1,0,0,1,1.961.392Zm-6.929.705a1,1,0,1,1,.894-1.789l3,1.5a1,1,0,0,1,.067,1.752l-2.5,1.5A1,1,0,0,1,16,12H8a1,1,0,0,1-.514-.143l-2.5-1.5a1,1,0,0,1,0-1.715l2.5-1.5A1,1,0,1,1,8.514,8.857L7.444,9.5l.833.5h7.446l.7-.42Z"
                        fill="#fff" opacity="0.3" />
                      <path id="Rectangle-192"
                        d="M9.855,10h4.289a2,2,0,0,1,1.88,2.683L13.342,20.06A1.428,1.428,0,0,1,12,21h0a1.428,1.428,0,0,1-1.342-.94L7.976,12.683A2,2,0,0,1,9.855,10Z"
                        fill="#fff" fill-rule="evenodd" />
                    </svg>
                  </div>
                  <h1>
                    {{$b->title}}
                  </h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb default justify-content-center">
                    <li class="breadcrumb-item active" aria-current="page">{{$b->title}}</li>
                  </ol>
                </nav>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="cover_Sblog">
                  <img class="cover-parallax" src="{{$b->cover_base64}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Banner -->

        <section class="content-Sblog" data-sticky-container>
          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="fixSide_scroll" data-sticky-for="1023" data-margin-top="100">
                  <div class="share_socail">
                    <div class="title">Share</div>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Facebook"
                      data-sharer="facebook" data-hashtag="hashtag" data-url="https://ellisonleao.github.io/sharer.js/">
                      <i class="tio facebook"></i>
                    </button>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Twitter"
                      data-sharer="twitter" data-title="Checkout Sharer.js!" data-hashtags="awesome, sharer.js"
                      data-url="https://ellisonleao.github.io/sharer.js/">
                      <i class="tio twitter"></i>
                    </button>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Whatsapp"
                      data-sharer="whatsapp" data-title="Checkout Sharer.js!"
                      data-url="https://ellisonleao.github.io/sharer.js/">
                      <i class="tio whatsapp_outlined"></i>
                    </button>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Telegram"
                      data-sharer="telegram" data-title="Checkout Sharer.js!"
                      data-url="https://ellisonleao.github.io/sharer.js/" data-to="+44555-03564">
                      <i class="tio telegram"></i>
                    </button>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Pinterest"
                      data-sharer="pinterest" data-url="https://ellisonleao.github.io/sharer.js/">
                      <i class="tio pinterest_circle"></i>
                    </button>

                    <button class="btn icon" data-toggle="tooltip" data-placement="right" title="skype"
                      data-sharer="skype" data-url="https://ellisonleao.github.io/sharer.js/"
                      data-title="Checkout Sharer.js!">
                      <i class="tio skype"></i>
                    </button>

                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="body_content">
                    {!! $b->content !!}
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Start section__stories -->
        <section class="section__stories blog_slider padding-t-12">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="swip__stories">
                  <!-- Swiper -->
                  <div class="swiper-container blog-slider">
                    <div class="title_sections_inner">
                      <h2>Other articles</h2>
                    </div>
                    <div class="swiper-wrapper">

                        @foreach ($beritas as $b)
                        <div class="swiper-slide">
                            <div class="grid_blog_avatar">
                                <a class="cover_blog" href="{{route('destinasi.show', ['destinasi' => $b->id])}}">
                                    <img src="{{$b->cover_base64}}" alt="">
                                </a>
                                <div class="body_blog">
                                    <a href="#">
                                        <div class="person mb-1 media">
                                            <div class="media-body">
                                                <div class="txt">
                                                    <time>{{ (new DateTime($b->created_at))->format('d-m-Y H:i') }}</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('destinasi.show', ['destinasi' => $b->id])}}"
                                        class="link_blog">
                                        <h4 class="title_blog">
                                            {{$b->title}}
                                        </h4>
                                        <p class="short_desc">
                                            {{ \App\Helpers\TextHelper::extractText($b->content) }}
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <!-- End grid_blog_avatar -->
                        </div>
                        @endforeach


                    </div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next">
                      <i class="tio chevron_right"></i>
                    </div>
                    <div class="swiper-button-prev">
                      <i class="tio chevron_left"></i>
                    </div>

                  </div>

                </div>
              </div>
            </div>

          </div>
        </section>
        <!-- End. section__stories -->



        <!-- Start simple-subscribe -->
        <section class="simple-subscribe margin-my-12">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="content">
                  <div class="row  justify-content-center">
                    <div class="col-lg-10">
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
        <!-- End. simple-subscribe -->

      </main>
    </div>
    <!-- [id] content -->

    <!-- Start footer -->
    <footer class="foot_demo2 padding-py-12 footer_inner_one bg-dark">
      <div class="container">
        <!-- Start footer -->
        <div class="defalut-footer">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-sm-0">
              <div class="item_about">
                <a class="logo" href="https://orinostudio.com/rakon-theme/html/blog/hosting.html">
                  <img src="/assets/img/logo.svg" alt="" />
                </a>
                <p>
                  Rakon is a simple, elegant, and secure way to build your
                  bitcoin and crypto portfolio.
                </p>
                <div class="address">
                  <span>1989 Don Jackson Lane</span>
                  <span>Call us:
                    <a class="c-red" href="tel:8089569599">808-956-9599</a></span>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="item_links">
                <h4>Social</h4>
                <a class="nav-link" href="">Blog</a>
                <a class="nav-link" href="">Facebook</a>
                <a class="nav-link" href="">Twitter</a>
                <a class="nav-link" href="">Instagram</a>
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="item_links">
                <h4>Company</h4>
                <a class="nav-link" href="">About</a>
                <a class="nav-link" href="">Affiliates</a>
                <a class="nav-link" href="">Careers</a>
                <a class="nav-link" href="">Legal & Privacy</a>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-sm-0">
              <div class="item_subscribe">
                <h4>Subscribe</h4>
                <p>
                  Subscribe to get the latest<br />
                  news form us
                </p>
                <form class="form-row">
                  <div class="col-md-11 form-group subscribebtn">
                    <div class="item_input">
                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1"
                        placeholder="Enter email address" aria-describedby="emailHelp" />
                      <button type="button" class="btn ripple_circle scale rounded-circle btn_subscribe">
                        <i class="tio send"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 margin-t-1">
              <select data-menu>
                <option selected>English</option>
                <option>Arabic</option>
                <option>Russian</option>
              </select>
            </div>
          </div>
          <div class="col-12 text-center padding-t-6">
            <div class="copyright">
              <span>© 2020
                <a href="https://themeforest.net/user/orinostu" target="_blank">OrinoStu.</a>
                All Right Reseved</span>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </footer>
    <!-- End Footer -->

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
