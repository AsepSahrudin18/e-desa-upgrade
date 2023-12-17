<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{asset('frontend/icons/favicon-dicoding.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Desa Serangmekar</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>
            Desa Serangmekar
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#wisata-desa">Wisata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about-us"> About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-us">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      FOR ALL
                      DIGITAL VILLAGE INFORMATION NEEDS
                    </h1>
                    <p>
                      Desa Digital, Jembatan Teknologi untuk Masa Depan Berkualitas.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{asset('frontend/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Digital Village, Simple High-Tech Living.
                    </h1>
                    <p>
                      Desa Digital, Keindahan Alam Bertemu Kreativitas Teknologi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{asset('frontend/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Digital Village, Life at Your Fingertips.
                    </h1>
                    <p>
                      Desa Digital, Mengukir Sejarah Baru dengan Kreativitas dan Teknologi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="#" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{asset('frontend/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding" id="wisata-desa">
    <div class="container">
      <div class="heading_container">
        <h2>
          WISATA DESA
        </h2>
        <p>
          Wisata desa merupakan perjalanan yang membawa kita menjauh dari kebisingan perkotaan menuju kecantikan tenang
          dan kearifan lokal di pelosok desa.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storages/landing_page/wisata_1.jpg')}}" alt="gambar_wisata">
            </div>
            <div class="detail-box">
              <h5>
              Gunung Pilar
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storages/landing_page/wisata_2.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Curug Leuwi Tomo
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storages/landing_page/wisata_3.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
              Pemandian Cirahab
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storages/landing_page/wisata_4.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Purisima Mountain
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storages/landing_page/wisata_5.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
              Vinewoods Resort
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{asset('storages/landing_page/wisata_6.jpg')}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Hut in the green park
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section" id="about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
          <img src="{{asset('storages/landing_page/Desa_Serangmekar.jpg')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang SID
              </h2>
            </div>
            <p>
              Sistem Informasi Desa (SID) merupakan sebuah website yang dibuat untuk membantu sistem desa yang berisikan
              informasi kependudukan, letak geografis sampai surat menyurat.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->


  <!-- end blog section -->

  <!-- client section -->

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section  long_section" id="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Kontak Kami
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Nama Lengkap" />
              </div>
              <div>
                <input type="text" placeholder="No. Telp" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section long_section">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +01 123455678990
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : desa.serangmekar@gmail.com
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Lokasi
          </span>
        </a>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By C523-PR095
      </p>
    </div>
  </footer>
  <!-- footer section -->


  <!-- jQery -->
  <script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('frontend/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>