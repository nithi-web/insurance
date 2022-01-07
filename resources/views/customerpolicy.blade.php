<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Regna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->

  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- <link rel="stylesheet" href="{{ URL::asset('vendor/aos/aos.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendor/boxicons/css/boxicons.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendor/glightbox/css/glightbox.min.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('vendor/swiper/swiper-bundle.min.css') }}" /> -->
  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

  <style>
    .expired {
      font-size: 38px;
      font-weight: bold;
      font-family: Times New Roman", Times, serif;;

    }

    .expiring {
      font-size: 38px;
      font-weight: bold;
      font-family: Times New Roman", Times, serif;;

    }
  </style>

  <!-- =======================================================
  * Template Name: Regna - v4.6.0
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img src="{{ URL::asset('img/insurancelogo.png') }}" alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">Regna</a></h1> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/home">Home</a></li>
          <li><a class="nav-link scrollto active" href="/create_customer">Add Customer</a></li>
          <li><a class="nav-link scrollto" href="/create_policy">Add Policy</a></li>
          <li><a class="nav-link scrollto" href="/listofcust">List of Customers</a></li>
          <li><a class="nav-link scrollto " href="/allpolicy">All Policy Records</a></li>
          <li><a class="nav-link scrollto" href="#services">Policy Details</a></li>
          <li><a class="nav-link scrollto " href="/logout">Logout</a></a></li>
          <li>
            <form method="get" action="/search">
              <div class="input-group stylish-input-group">
                <input type="text" id="Search" name="text" class="form-control" placeholder="Search(name,place,vehicle)">
                <span class="nav-link scrollto">
                  <button type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>

            </form>

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>United Vehicle Insurance</h1>
      <h2>Here you fill and submit the customer details</h2>
      <a href="#team" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero Section -->


  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet"> -->
  </head>

  <body>
  </body>

  </html>

  <section id="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h3 class="section-title">Please Submit</h3><br><br>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-4 col-md-6">

            <form action="/insert_customer" method="post" id="forms">
              <div class="form-group row has-success">
                <label for="" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="first_name" class="form-control form-control-success" placeholder=name />

                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="text" name="phone_number" class="form-control" placeholder=phone />
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" name="address" class="form-control" placeholder=address />
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Place</label>
                <div class="col-sm-10">
                  <input type="text" name="place" class="form-control" placeholder=place />
                </div>
              </div>
              ​
              @csrf

              <div class="row">
                <div class="offset-sm-2 col-sm-10">
                  <input type="submit" class="btn btn-primary form-control" value="Submit" style="width: 10vw" /><br>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>United Insurance</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
        Designed by <a>Nithin</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{ URL::asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    $(document).ready(function() {
      $('#forms').validate({
        errorClass: 'errors',
        rules: {
          first_name: {
            required: true
          },
          phone_number: {
            required: true,
            digits: true,
          },

          address: {
            required: true
          },

          place: {
            required: true
          },


        },

      });
    });
  </script>

</body>

</html>