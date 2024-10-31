@extends('layouts.layout')
@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse main-nav" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand">
                        <img src="assets/img/logowh.png" height="45" alt="" loading="lazy" />
                    </a>
                    @if (session('user'))
                        <!-- Left links -->
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#coursel">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#lamankedua">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#lamankeenam">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profileview">Profile</a>
                            </li>

                        </ul>
                        <!-- Left links -->
                    @else
                </div>
                {{-- @else --}}
                <form class="navlogbut d-flex">
                    <button class="btn btn-outline-light bg-secondary rounded-pill mb-3" type="submit"><a class="nav-link"
                            href="login">LOGIN</a></button>
                </form>
                @endif
        </nav>
        <!-- Navbar -->


        <!-- Coursel -->
        <section class="crl coursel" id="coursel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="width: 100%; height: 840px;">
                    <div class="carousel-item active">
                        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/04/Creative-Wallpaper-Fishing-Rod-New-York-fisherman.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PESCADOR</h5>
                            <p>Catch. Sell. Thrive</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.pixelstalk.net/wp-content/uploads/2016/04/Fishing-Wallpaper-HD-Desktop.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperset.com/w/full/a/d/7/49826.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- EndCoursel -->

        <!-- Halaman ke 2 -->
        <section class="lamankedua" id="lamankedua">
            <div>
                <img src="assets/img/bg211.png" alt="" style="width: 100%; ";>
            </div>
            <div class="icon1">
                <img src="assets/img/logowh.png"
                    alt=""style="
            width: 15%; 
            display: block;
            margin-left: 50%;
            margin-right: 50%;
            ">
            </div>
            <div class="ml1" style="">
                <h1>Feed the Fish for the World</h1>
                <p1>The Pandemic's Enduring Impact on Global Food Security and Aquaculture's Promising Role
                    <br>The pandemic has left a lasting impact on global food security, with an estimated 660 million people still  
                    <br>facing hunger in 2030. Aquaculture, a rapidly growing business sector,
                    <br>PESCADOR firmly believes that "The Future is Aquaculture"
                    <br>By leveraging technological advancements
                    <br>PESCADOR is establishing a systematic value chain for the fish and shrimp farming industry.
                </p1>

            </div>
        </section>
        <!-- Halaman ke 2 -->


        <!-- Halaman ke 3 Pescador -->
        <section class="lamanketiga py-5" id="lamanketiga">
            <h1 class="d-flex justify-content-center">Our Solutions for Aquaculture</h1>
            <div class="container d-flex gap-5 justify-content-center py-5 mt-5">
                <div class="card rounded-4 border border-0 shadow" style="width: 18rem;">
                    <div style="position: absolute;">
                        <img src="https://efishery.com/wp-content/uploads/2021/10/ikan-nila.png"
                            style="width: 190px; margin-top: -90px;" alt="">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Solutions</h5>
                        <h6 class="card-subtitle mb-2 fw-bold">Fish Farmer</h6>
                        <p class="fw-nornal">Comprehensive Services Empowering Fish Farmers
                        Experience the convenience of seamless feed transactions, access to financial programs, 
                        and the latest news and information from the aquaculture industry, all readily available to fish farmers!
                        </p>
                        <a href="product" class="btn btn-success rounded-pill mb-3" style="margin-top: 95px">Get To Know More</a>
                    </div>
                </div>
                <div class="card rounded-4 border border-0 shadow" style="width: 18rem;">
                    <div style="position: absolute;">
                        <img src="https://efishery.com/wp-content/uploads/2021/10/udang.png"
                            style="width: 190px; margin-top: -90px;" alt="">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Solutions</h5>
                        <h6 class="card-subtitle mb-2 fw-bold">Shrimp Farmers</h6>
                        <p class="fw-nornal">Integrated Shrimp Farming Ecosystem: Empowering Shrimp Farmers
                                            Experience an integrated shrimp farming ecosystem tailored to boost productivity, 
                                            safeguard pond water quality, prevent disease outbreaks, 
                                            and provide data-driven pond management recommendations to empower shrimp farmers.
                        </p>
                        <a href="product" class="btn btn-success rounded-pill mt-5 mb-3">Get To Know More</a>
                    </div>
                </div>
                <div class="card rounded-4 border border-0 shadow" style="width: 18rem;">
                    <div style="position: absolute;">
                        <img src="https://efishery.com/wp-content/uploads/2021/10/orang-1.png"
                            style="width: 130px; margin-top: -90px;" alt="">
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Solutions</h5>
                        <h6 class="card-subtitle mb-2 fw-bold">Customer</h6>
                        <p class="fw-nornal">Ensuring that the finest quality fish and shrimp reach every corner of the country by distributing farmers' harvests in live, 
                                            fresh, and frozen form.</p>
                        <a href="product" class="btn btn-success rounded-pill mb-3" style="margin-top: 120px">Get To Know More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Halaman ke 3 -->


        <!-- Halaman ke 4 -->
        <section class="lamankeempat" id="lamankeempat">
            <div>
                <img src="assets/img/bg22.png" alt="" style="width: 100%;";>
            </div>
            <div class="textle1" style="">
                <h1>Our Solutions for Aquaculture</h1>
                <p1>The Pandemic's Enduring Impact on Global Food Security and Aquaculture's Promising Role
                    <br>The pandemic has left a lasting impact on global food security, with an estimated 660 million people still  
                    <br>facing hunger in 2030. Aquaculture, a rapidly growing business sector,
                    <br>PESCADOR firmly believes that "The Future is Aquaculture"
                    <br>By leveraging technological advancements
                    <br>PESCADOR is establishing a systematic value chain for the fish and shrimp farming industry.
                </p1>

            </div>

        </section>
        <!-- Halaman ke 4 -->


        <!-- Halaman ke 5 -->
        <section class="lamanke5" id="lamanke5">
            <div>
                <img src="assets/img/bg3.png" alt="" style="width: 100%;";>
            </div>
            <div class="textll1">
                <h1>Our Impact So Far</h1>
                <div class="mt-4">
                    <button class="btn btn-success rounded-pill mb-3" type="submit"><a class="nav-link"
                            href="login">Join Us</a></button>
                    <button class="btn btn-success rounded-pill mb-3 bg-secondary" type="submit"><a class="nav-link"
                            href="login">Learn More</a></button>
                </div>

            </div>

            <div class="emo">
                <div class="tex">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Grow Together</p3>
                        </div>
                        <h5 style="font-weight: bold;">30.000+ Farmers</h5>
                    </div>

                </div>

                <div class="tex mt-5">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Digitalization</p3>
                        </div>
                        <h5 style="font-weight: bold;">70.000 Fisherman
                        </h5>
                    </div>

                </div>

                <div class="tex">
                    <div class="judtextu1 mt-5">
                        <div class="judtext1">
                            <p3>Connect</p3>
                        </div>
                        <h5 style="font-weight: bold;">7.000+ Farmers to
                            <br>better
                            <br>financing program
                        </h5>
                    </div>
                </div>
            </div>
            <div class="emo2">
                <div class="tex">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Feed the world with</p3>
                        </div>
                        <h5 style="font-weight: bold;">13.000+ ton Fish
                            <br>Product
                        </h5>
                    </div>

                </div>

                <div class="tex mt-5">
                    <div class="judtextu1">
                        <div class="judtext1">
                            <p3>Minimaliza</p3>
                        </div>
                        <h5 style="font-weight: bold;">30% source of water pollution
                            <br>from aquaculture
                            <br>practice
                        </h5>
                    </div>

                </div>
            </div>
        </section>
        <!-- Halaman ke 5 -->




        <!-- Card -->
        <section class="cardsl" id="cardsl" style="">
            <div>
                <div class="container mt-5">
                    <div class="row">
                        <h2>Our Solutions of Aquaculture</h2>
                        <div class="splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Fisherman</h5>
                                                <img src="https://www.nusabali.com/article_images/129742/rendah-konsumsi-makan-ikan-di-tabanan-2022-11-18-102556_0.jpg"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text">Experience the convenience of seamless feed transactions, 
                                                    access to financial programs, and the latest news 
                                                    and information from the aquaculture industry, 
                                                    all readily available to fish farmers!</p>
                                                <a href="product" class="btn btn-success">Get To Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Shrimp Farmers</h5>
                                                <img src="https://p1.pxfuel.com/preview/943/1012/845/shrimp-fruits-of-the-sea-fish-food-wallpaper.jpg"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text"> Experience an integrated shrimp farming ecosystem tailored to boost productivity, 
                                                    safeguard pond water quality, prevent disease outbreaks, 
                                                    and provide data-driven pond management 
                                                    recommendations to empower shrimp farmers.</p>
                                                <a href="product" class="btn btn-success">Get To Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Crab Farmers</h5>
                                                <img src="https://cdn-2.tstatic.net/pekanbaru/foto/bank/images/kepiting-rajungan.jpg"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text">Ensuring the finest quality crabs reach every corner 
                                                    of the country by distributing farmers' 
                                                    harvests in live, fresh, and frozen forms.</p>
                                                <a href="product" class="btn btn-success">Get To Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 splide__slide m-2">
                                        <div class="card bg-white text-dark">
                                            <div class="card-body">
                                                <h5 class="card-title">Customer</h5>
                                                <img src="https://images.unsplash.com/photo-1598063414123-d8fd7fb018b2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGFzYXIlMjB0cmFkaXNpb25hbHxlbnwwfHwwfHw%3D&w=1000&q=80"
                                                    alt="" style="width: 370px; height: 200px;">
                                                <p class="card-text">Ensuring that the finest quality fish and shrimp reach every corner 
                                                    of the country by distributing farmers' harvests in live, 
                                                 fresh, and frozen form.</p>
                                                <a href="product" class="btn btn-success">Get To Know More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
                <script>
                    var splide = new Splide('.splide', {
                        type: 'loop',
                        perPage: 3,
                        rewind: true,
                    });

                    splide.mount();
                </script>
            </div>
        </section>
        <!-- End Card -->


        <!-- Halaman ke 6 -->
        <section class="lamankeenam" id="lamankeenam">
            <div>
                <img src="assets/img/bgend.png" alt="" style="width: 100%;";>
            </div>
            <div class="logopescador">
                <img src="assets/img/logowh.png"
                    alt=""style="
            width: 15%; 
            display: block;
            margin-left: 50%;
            margin-right: 50%;
            ">

            </div>
            <div>
                <div class="textll1">
                    <div>
                        <h4>Company</h4>
                        <p>About PESCADOR</p>
                        <p>Blog</p>
                        <p>Contact Us</p>
                        <p>Terms & Condition</p>
                        <p>FAQ</p>
                    </div>



                </div>

                <div class="textll2">
                    <div>
                        <h4>Product</h4>
                        <p>About PESCADOR</p>
                        <p>Blog</p>
                        <p>Contact Us</p>
                        <p>Terms & Condition</p>
                        <p>FAQ</p>
                    </div>

                </div>

                <div class="textll3">
                    <div>
                        <h4>Download Our Apps</h4>
                        <p>About PESCADOR</p>
                        <p>Blog</p>
                        <p>Contact Us</p>
                        <p>Terms & Condition</p>
                        <p>FAQ</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Halaman ke 6 -->


    </body>
@endsection
