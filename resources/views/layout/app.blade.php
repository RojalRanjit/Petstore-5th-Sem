        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>PET SHOP</title>
            @vite(['resources/js/app.js'])
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="Free HTML Templates" name="keywords">
            <meta content="Free HTML Templates" name="description">

            <!-- Favicon -->
            <link href="img/favicon.ico" rel="icon">

            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

            <!-- Icon Font Stylesheet -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

            <!-- Libraries Stylesheet -->
            <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

            <!-- Customized Bootstrap Stylesheet -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Template Stylesheet -->
            <link href="css/style.css" rel="stylesheet">
        </head>

        <body>
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
                <a href="{{route('home')}}" class="navbar-brand ms-lg-5">
                    <h1 class="m-0 text-uppercase text-dark "><a href="{{route('home')}}"><img src="img/logo.jpg" height= "80px" width = "80px"> Pet Shop</a></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link Home" onclick="toggle()" id="Home">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link About" onclick="toggle()" id="About">About</a>
                        <!-- <a href="{{route('service')}}" class="nav-item nav-link Service" onclick="toggle()" id="Service">Service</a> -->
                        <a href="{{route('product')}}" class="nav-item nav-link Product" onclick="toggle()" id="Product">Product</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link Contact" onclick="toggle()" id="Blog">Contact Us</a>
                        @if(Auth::check())
                        <a href="{{route('login')}}" class="nav-item nav-link ">{{auth()->user()->name}}</a>
                        <a href="{{route('logout')}}" class="nav-item nav-link nav-contact bg-danger text-white px-5 ms-lg-5" >Logout</a>
                        @endif

                        @guest
                        <a href="{{route('login')}}" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Login <i class="bi bi-arrow-right"></i></a>
                        @endguest
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @yield('content')

            <!-- Footer Start -->
            <div class="container-fluid bg-light mt-5 py-5">
                <div class="container pt-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                            <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Kamalpokhari, KTM, Nepal</p>
                            <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>ram@gmail.com</p>
                            <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+977 9845720158</p>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6">
                            <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-body mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-body" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div> -->
                        <div class="col-lg-3 col-md-6">
                            <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Popular Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-body mb-2" href="{{route('home')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-body mb-2" href="{{route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-body mb-2" href="{{route('product')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Products</a>
                                <a class="text-body" href="{{route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form> -->
                            <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                            <div class="d-flex">
                                <a class="btn btn-outline-primary btn-square me-2" href="https://twitter.com/"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square me-2" href="https://www.facebook.com"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-outline-primary btn-square me-2" href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-12 text-center text-body">
                            <a class="text-body" href="">Terms & Conditions</a>
                            <span class="mx-1">|</span>
                            <a class="text-body" href="">Privacy Policy</a>
                            <span class="mx-1">|</span>
                            <a class="text-body" href="{{route('contact')}}">Customer Support</a>
                            <span class="mx-1">|</span>
                            <a class="text-body" href="">Payments</a>
                            <span class="mx-1">|</span>
                            <a class="text-body" href="">Help</a>
                            <span class="mx-1">|</span>
                            <a class="text-body" href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark text-white-50 py-4">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-md-6 text-center text-md-start">
                            <p class="mb-md-0">&copy; <a class="text-white" href="{{route('home')}}">SSR Petshop</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>

            <script>
                function toggle(){
                const sections = document.querySelectorAll(".nav-item");
                let current = "";
                sections.forEach((e)=>{
                     current = e.getAttribute("id");
                   
                });
                current.onclick=function(){
                    alert(current);
                }
            }
            </script>
        </body>

        </html>