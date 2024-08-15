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

  <title>Blog Posts - Creative Multi-Purpose HTML5 Templates</title>
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
      <!-- Start header -->
      <header class="header-nav-center no_blur header__workspace active-blue" id="myNavbar">
        <div class="container">
          <!-- navbar -->
          <nav class="navbar navbar-expand-lg navbar-light px-sm-0">
            <a class="navbar-brand" href="/">
              <img class="logo" src="/logotakalar.png" alt="logo" />
            </a>

            <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <svg viewBox="0 0 64 48">
                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
              </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{$destinasi ?? ''}}" href="{{route('destinasi.cari')}}">Destinasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{$berita ?? ''}}" href="{{route('berita.cari')}}">Berita</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{$profil ?? ''}}" href="{{route('profil')}}">Profil Pemkab</a>
                  </li>
              </ul>
              <div class="nav_account btn_demo3">
                <a href="{{route('login')}}" class="btn btn_sm_primary scale bg-blue c-white rounded-8">
                  Login
                </a>
              </div>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <!-- end container -->
      </header>
      <!-- End header -->
