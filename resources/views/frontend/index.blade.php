<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>KURSUS</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('frontend/kursusWebko') }}/public/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/kursusWebko') }}/public/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/kursusWebko') }}/public/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('frontend/kursusWebko') }}/public/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('frontend/kursusWebko') }}/public/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/kursusWebko') }}/public/assets/css/theme.css" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-bolder fs-2 fst-italic"
                    href="#">
                    <div class="text-info">KURSUS</div>
                    <div class="text-warning">WEBKO</div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <li class="nav-item px-2"><a class="nav-link fw-medium active" aria-current="page"
                                href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#courses">Courses</a></li>
                        <li class="nav-item px-2"><a class="nav-link fw-medium" href="#teachers">Teachers</a></li>
                    </ul>
                    <form class="ps-lg-5">
                        <a href="{{ route('register') }}"><button
                                class="btn btn-lg btn-primary rounded-pill bg-gradient order-0" type="submit">Sign
                                In</button></a>

                    </form>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- HERO -->

        <section class="py-0" id="home">
            <div class="bg-holder d-none d-sm-block"
                style="background-image:url({{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
            </div>
            <div class="bg-holder d-sm-none"
                style="background-image:url({{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;">
            </div>
            <div class="container">
                <div class="row align-items-center min-vh-75 min-vh-md-100">
                    <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
                        <h1 class="mt-6 mb-sm-4 display-2 fw-semi-bold lh-sm fs-4 fs-lg-6 fs-xxl-8">Find your skill
                            better <br class="d-block d-lg-none d-xl-block" />and faster</h1>
                        <p class="mb-4 fs-1">Find your best skill better and faster with Kursus Webko</p>

                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->


        <!-- ABOUT -->
        <section class="py-5">
            <div class="bg-holder"
                style="background-image:url({{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/bg.png);background-position:left top;background-size:initial;margin-top:-180px;">
            </div>

            <div class="container">
                <div class="row flex-center">
                  @foreach ($about as $about)
                      
                  
                    <div class="col-md-5 order-md-0 text-center text-md-start"><img class="img-fluid mb-4"
                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/passion.png"
                            width="450" alt="" /></div>
                    <div class="col-md-5 text-center text-md-start">
                        <h6 class="fw-bold fs-2 fs-lg-3 display-3 lh-sm">{{$about->judul}}</h6>
                        <p class="my-4 pe-xl-8"> {{$about->deskripsi}}</p>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END ABOUT -->



        <!-- PROGRAM -->
        <section class="py-5 mt-5">
            <div class="bg-holder d-none d-sm-block"
                style="background-image:url({{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/category-bg.png);background-position:right top;background-size:200px 320px;">
            </div>
            <!--/.bg-holder-->

            <div id="courses" class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6 text-center mb-3">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Browse jobs by category</h5>
                        <p class="mb-5">Choose from the list of most popular categories</p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-10 col-xl-9">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img
                                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/finance.png"
                                            height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Accounting</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img
                                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/design.png"
                                            height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Design/Creative</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img
                                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/programmer.png"
                                            height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Programmer</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img
                                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/production.png"
                                            height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Production</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img
                                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/education.png"
                                            height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Education</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-4 pb-4">
                                <div class="card py-4 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img
                                            src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/consultancy.png"
                                            height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">Consultancy</h6>
                                            <p class="mb-0 card-text">100 open position</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PROGRAM -->


        <!-- PENGAJAR -->
        <section id="teachers" class="py-0"><img class="w-100"
                src="{{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/come-on-join.png"
                alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h6 class="fw-bold fs-3 fs-lg-5 lh-sm">Come on, join with us !</h6>
                        <p>Study with kind teachers with most experience in web programming</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8">
            <div class="container-lg">
                <div class="row flex-center">
                    <div class="col-md-11 col-lg-6 col-xl-4 col-xxl-5">
                        <h6 class="fs-3 fs-lg-4 lh-sm">Your Teachers</h6>
                    </div>
                    <div class="col-lg-4 position-relative mt-n5 mt-md-n4"><a
                            class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark"
                            role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"
                                aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a
                            class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark"
                            role="button" data-bs-slide="next"><span class="carousel-control-next-icon"
                                aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                </div>
                <div class="row flex-center">
                    <div class="col-xl-10 px-0">
                        <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- COROUSEL 1 -->
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                        @foreach ($guruItem as $guru)
                                            <div class="col-md-4 mb-8 mb-md-0">
                                                <div class="card card-span h-100 shadow-lg">
                                                    <div class="card-span-img">
                                                      @if ($guru->foto)
                                                      <img
                                                      src="{{asset('images/' . $guru->foto)}}"
                                                      alt="{{$guru -> nama_guru}}" width="180px"
                                                      class="card-img-top"/>
                                                    </div>
                                                      @else
                                                      <img
                                                      src="{{asset('frontend/kursusWebko')}}/public/assets/img/gallery/deafult-avatar.png"
                                                      alt="" />
                                                    </div>
                                                      @endif
                                                    <div class="card-body d-flex flex-column flex-center py-6">
                                                        <h5>{{$guru->nama_guru}}</h5>
                                                        <p class="card-text text-center text-1000 px-4">{{$guru->bidang}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END PENGAJAR  -->


        <!-- FOOTER -->
        <section class="py-0 bg-primary-gradient">
            <div class="bg-holder"
                style="background-image:url({{ asset('frontend/kursusWebko') }}/public/assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;">
            </div>

            <div class="container">
                <div class="row flex-center py-8">
                    <div class="col-lg-6 text-center">
                        <h1 class="text-white ">Get started now</h1>
                    </div>

                </div>


            </div>
        </section>
        <!-- END FOOTER -->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('frontend/kursusWebko') }}/publicyy/assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap"
        rel="stylesheet">
</body>

</html>
