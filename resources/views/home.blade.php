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
                    <li><a class="nav-link scrollto active" href="/home">Home</a></li>
                    <li><a class="nav-link scrollto" href="/create_customer">Create Customer</a></li>
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
            <h1>Welcome to United Vehicle Insurance</h1>
            <h2>Specialise in providing our clients with policies that protect them against uncertain events such as damage or theft.</h2>
            <a href="#about" class="btn-get-started">Get Started</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Few Words About Us</h2>
                        <p>
                            We Started as a small insurance agency at 2012. And now we have more than 400 clients and dealing with all vehicle insurances such as two wheelers,four wheelers, Heavy vehicles,taxy and auto.
                        </p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Bumper-to-bumper</a></h4>
                            <p class="description">It is termed as an insurance cover when the claims for vehicle parts are settled without applying depreciation as in the case of package policy or comprehensive policy, claims are settled after applying depreciation on replaced parts.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Third-party</a></h4>
                            <p class="description">It is one of the most common types of vehicle insurance; in which only damages & losses caused to a third-party person, vehicle or property are covered.</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Comprehensive</a></h4>
                            <p class="description">It is one of the most valuable types of vehicle insurance that covers both third-party liabilities and damages to your own vehicle as well.</p>
                        </div>

                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Facts</h3>
                </div>
                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Employees</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support(24*7)</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Types Of Policies</p>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Policies</h3>
                    <p class="section-description">Here is your all policy details</p>
                    <h1 class="expired">Expired Policies</h1> <br>
                    <table border="1" class="table table-striped">
                        <tr class="tableheading">
                            <td>Policy Id</td>
                            <td>Name</td>
                            <td>Phone Number</td>
                            <td>Customer Id</td>
                            <td>Vehicle</td>
                            <td>Registration Number</td>
                            <td>Policy Amount</td>
                            <td>Issued Date</td>
                            <td>Expiry Date</td>
                            <td>Update</td>
                            <td>Delete</td>
                        </tr>
                        @foreach($customer as $row)

                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->first_name}}</td>
                            <td>{{$row->phone_number}}</td>
                            <td>{{$row->customer_id}}</td>
                            <td>{{$row->vehicle_name}}</td>
                            <td>{{$row->registration_number}}</td>
                            <td>{{$row->policy_amount}}</td>
                            <td>{{$row->issued_date}}</td>
                            <td>{{$row->expiry_date}}</td>
                            <td><a href='/allpolicy_home_edit/{{$row->id}}'>Update</a></td>
                            <td> <button data-id="{{$row->id}}" type="button" class="btn-delete">
                                    <i class="far fa-trash-alt" id="btn-delete"></i>
                                    Delete
                                </button></td>


                        </tr>
                        @endforeach
                    </table>

                    <h1 class="expiring">Expiring Policies</h1> <br>
                    <table border="1" class="table table-striped">
                        <tr class="tableheading2">
                            <td>Policy Id</td>
                            <td>Name</td>
                            <td>Phone Number</td>
                            <td>Customer Id</td>
                            <td>Vehicle</td>
                            <td>Registration Number</td>
                            <td>Policy Amount</td>
                            <td>Issued Date</td>
                            <td>Expiry Date</td>
                            <td>Update</td>
                            <td>Delete</td>

                        </tr>
                        @foreach($customerexp as $rows)

                        <tr>
                            <td>{{$rows->id}}</td>
                            <td>{{$rows->first_name}}</td>
                            <td>{{$rows->phone_number}}</td>
                            <td>{{$rows->customer_id}}</td>
                            <td>{{$rows->vehicle_name}}</td>
                            <td>{{$rows->registration_number}}</td>
                            <td>{{$rows->policy_amount}}</td>
                            <td>{{$rows->issued_date}}</td>
                            <td>{{$rows->expiry_date}}</td>
                            <td><a href='/allpolicy_home_edit/{{$rows->id}}'>Update</a></td>
                            <td> <button data-id="{{$rows->id}}" type="button" class="btn-delete">
                                    <i class="far fa-trash-alt" id="btn-delete"></i>
                                    Delete
                                </button></td>

                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="row">


                </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text">United India</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->


        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Team</h3>
                    <p class="section-description">Our Team Leads</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="pic"><img src="{{ URL::asset('img/team-1.jpg')}}" alt=""></div>
                            <h4>Jayaraj</h4>
                            <span>Manager</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="pic"><img src="{{ URL::asset('img/team-3.jpg')}}" alt=""></div>
                            <h4>Joseph</h4>
                            <span>Policy Head</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Contact</h3>
                    <p class="section-description">Our Location</p>
                </div>
            </div>

            <!-- Uncomment below if you wan to use dynamic maps -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17262.287899413936!2d76.31249572460024!3d10.022962742268597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d013b6f3993%3A0xb8a4768b410830d5!2sOberon%20Mall!5e0!3m2!1sen!2sin!4v1638174892465!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="container mt-5">
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">
                            <div>
                                <i class="bi bi-geo-alt"></i>
                                <p>Edappally<br>Near Oberon Mall ,Kochi,682024</p>
                            </div>

                            <div>
                                <i class="bi bi-envelope"></i>
                                <p>unitedindia@gmail.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+91 9988776655</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(function() {
            // //delete
            $(document).on("click", ".btn-delete", function() {
                element = $(this);
                // console.log();
                // return false;
                id = $(this).data("id");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085D6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        //Code for Delete
                        $.post("/policy_delete", {
                                "_token": "{{ csrf_token() }}",
                                id: element.data('id')
                            },
                            function(data, status) {
                                if (data == "success") {
                                    // element.parent().parent().remove();
                                    element.closest('tr').remove();
                                } else {
                                    alert('not deleted...');
                                }
                            }
                        );
                    }
                })
            });
        });
    </script>

</body>

</html>