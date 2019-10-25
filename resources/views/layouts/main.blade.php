<!DOCTYPE html>

<head>
    <title>Lapanganku &mdash;Tempat Sewa Lapangan Futsal Terbaik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('') }}fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}css/jquery-ui.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}css/aos.css">

    <link rel="stylesheet" href="{{ URL::asset('') }}css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @if (session('status'))
    <div id="snackbar">{{session('status')}}</div>
    @endif
    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.html">LapanganKu</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#courses-section" class="nav-link">Places</a></li>
                                <!-- <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="#teachers-section" class="nav-link">Teachers</a></li> -->
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="#contact-section" class="nav-link"><span>Take a
                                            Survey</span></a></li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('http://playloki.id/uploads/liberofutsalbsd.jpg');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">Cari Lapangan Futsal Sekarang</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">
                                        <!-- LapanganKu adalah tempat terbaik untuk menyewa lapangan futsal dengan dengan harga ternjangkau. -->
                                        Isi survey untuk membantu kami dalam mengembangkan web ini.
                                    </p>
                                    <p data-aos="fade-up" data-aos-delay="300"><a href="#contact-section"
                                            class="btn btn-primary py-3 px-5 btn-pill">Take
                                            a Survey</a></p>

                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form action="{{ url('/subs') }}" method="post" class="form-box">
                                        @csrf
                                        <h3 class="h4 text-black mb-4">Subscribe today</h3>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control @error('email2') is-invalid @enderror"
                                                placeholder="Email Addresss" name="email2" required>
                                            @error('email2')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-pill" value="Subscribe">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section courses-title" id="courses-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Mencari lapangan futsal ?</h2>
                        <h4 class="text-white">Disini tempatnya</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">

                    <div class="owl-carousel col-12 nonloop-block-14">

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="images/img_field_1.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <!-- <span class="course-price">$20</span> -->
                                <div class="meta"><span class="icon-clock-o"></span>Open 12 Hours</div>
                                <h3><a href="#">EL - QUDZ Futsal</a></h3>
                                <p>Jalan Mayjend Sungkono No. 267 </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 views</div>
                                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
                            </div>
                        </div>






                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="images/img_field_2.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <!-- <span class="course-price">$20</span> -->
                                <div class="meta"><span class="icon-clock-o"></span>Open 18 Hours</div>
                                <h3><a href="#">Angkasa Futsal</a></h3>
                                <p>Jl. Papa Kuning No.40, Tulusrejo </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 views</div>
                                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="images/img_field_3.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <!-- <span class="course-price">$20</span> -->
                                <div class="meta"><span class="icon-clock-o"></span>Open 18 Hours</div>
                                <h3><a href="#">Viva Futsal</a></h3>
                                <p>Jl. Raya Sawojajar, Sawojajar</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 views</div>
                                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="images/img_field_4.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <!-- <span class="course-price">$20</span> -->
                                <div class="meta"><span class="icon-clock-o"></span>Open 18 Hours</div>
                                <h3><a href="#">Biru Futsal</a></h3>
                                <p>Jalan Mayjend Sungkono No. 267 </p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 views</div>
                                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
                            </div>
                        </div>

                    </div>



                </div>
                <div class="row justify-content-center">
                    <div class="col-7 text-center">
                        <button class="customPrevBtn btn btn-primary m-1">Prev</button>
                        <button class="customNextBtn btn btn-primary m-1">Next</button>
                    </div>
                </div>
            </div>
        </div>












        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-7">



                        <h2 class="section-title mb-3">Survey</h2>
                        <p class="mb-5">Kami bekerja keras untuk mengembangkan web ini, jadi kami dengan senang hati
                            mendengar saran
                            dari customer kami.</p>

                        <form method="post" action="{{ url("") }}" data-aos="fade">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                    <input required type="text"
                                        class="form-control @error('firstname') is-invalid @enderror"
                                        placeholder="First name" name="firstname">
                                    @error('firstname')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <input required type="text"
                                        class="form-control @error('lastname') is-invalid @enderror"
                                        placeholder="Last name" name="lastname">
                                    @error('lastname')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input required type="email"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                        name="email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-5">
                                <div class="col-md-12">
                                    <h6>1. Dimana kota tempat anda tinggal ?</h4>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <select class="form-control @error('kota') is-invalid @enderror"
                                        id="exampleFormControlSelect1" name="kota">
                                        <option value="">Pilih kota</option>
                                        <option value="malang">Malang</option>
                                        <option value="surabaya">Surabaya</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="batu">Batu</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="">Lainnya</option>
                                    </select>
                                    @error('kota')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-md-12">
                                    <h6>2. Apakah anda suka pergi futsal ?</h4>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <select class="form-control @error('likes') is-invalid @enderror"
                                        id="exampleFormControlSelect1" name="likes">
                                        <option value="">Pilih opsi</option>
                                        <option value="yes">Ya </option>
                                        <option value="no">Tidak</option>
                                    </select>
                                    @error('likes')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-md-12">
                                    <h6>3. Berapa kali anda pergi futsal dalam seminggu ?</h4>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <select class="form-control @error('times') is-invalid @enderror"
                                        id="exampleFormControlSelect1" name="times">
                                        <option value="">Pilih opsi</option>
                                        <option value="1">1 kali</option>
                                        <option value="2">2 kali</option>
                                        <option value="3">Lebih dari 2 kali</option>
                                        <option value="0">Tidak pernah</option>

                                    </select>
                                    @error('times')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-4">
                                <div class="col-md-12">
                                    <h6>4. Nilai desain website ini ?</h4>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <select class="form-control @error('score') is-invalid @enderror"
                                        id="exampleFormControlSelect1" name="score">
                                        <option value="">Nilai</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>

                                    </select>
                                    @error('score')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row my-4">
                                <div class="col-md-12 ml-2">
                                    <h4>Kritik dan Saran</h4>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <textarea class="form-control @error('saran') is-invalid @enderror" id="" cols="30"
                                        rows="10" name="saran" placeholder="Tulis kritik dan saran disini..."
                                        required></textarea>
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-md-6">

                                    <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill"
                                        value="Submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer-section bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>About LapanganKu</h3>
                        <p>
                            LapanganKu adalah tempat terbaik untuk menyewa lapangan futsal dengan dengan harga
                            terjangkau.
                        </p>
                    </div>
                    <!-- 
          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Teachers</a></li>
            </ul>
          </div> -->

                    <div class="col-md-6">
                        <h3>Subscribe</h3>
                        <p>Ikuti kami untuk mendapatkan info terbaru mengenai lapangan futsal terbaik dan terdekat.</p>
                        <form action="{{ url('/subs2') }}" method="post" class="footer-subscribe">
                            @csrf
                            <div class="d-flex mb-2">
                                <input type="email" required name="email3"
                                    class="@error('email3') is-invalid @enderror form-control rounded-0"
                                    placeholder="Email">
                                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                                
                            </div>
                            @error('email3')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </form>
                    </div>

                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart"
                                    aria-hidden="true"></i>
                                by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="{{ URL::asset('') }}js/jquery-3.3.1.min.js"></script>
    <script src="{{ URL::asset('') }}js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ URL::asset('') }}js/jquery-ui.js"></script>
    <script src="{{ URL::asset('') }}js/popper.min.js"></script>
    <script src="{{ URL::asset('') }}js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('') }}js/owl.carousel.min.js"></script>
    <script src="{{ URL::asset('') }}js/jquery.stellar.min.js"></script>
    <script src="{{ URL::asset('') }}js/jquery.countdown.min.js"></script>
    <script src="{{ URL::asset('') }}js/bootstrap-datepicker.min.js"></script>
    <script src="{{ URL::asset('') }}js/jquery.easing.1.3.js"></script>
    <script src="{{ URL::asset('') }}js/aos.js"></script>
    <script src="{{ URL::asset('') }}js/jquery.fancybox.min.js"></script>
    <script src="{{ URL::asset('') }}js/jquery.sticky.js"></script>


    <script src="{{ URL::asset('') }}js/main.js"></script>

</body>