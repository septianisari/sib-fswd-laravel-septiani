<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>LATIHAN LARAVEL SEPTIANI SARI</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('vendor/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/assets/css/templatemo-finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/assets/css/owl.css')}}">


<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body class="bg-dark">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>SEPTI STORE</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{url('lending')}}">HOME</a>
              </li>  
            @auth
            <li class="nav-item active">
              <div class="dropdown">
                <button class="btn btn-transparent dropdown-toggle nav-link" style="color: white;outline:none; background-color: transparent" type="button" data-toggle="dropdown">Dashboard
                <span class=" caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a style="color:greenyellow" href="{{url('category')}}">SHOP</a></li>
                  <li><a style="color:greenyellow" href="{{url('dproduk')}}">SHOP DETAIL</a></li>
                  <li><a style="color:greenyellow" href="{{url('grup')}}"> PAGES</a></li>
                  <li><a style="color:greenyellow" href="{{url('pengguna')}}">CONTACT</a></li>
                </ul>
              </div>
              </li>
              @endauth

              <li class="nav-item">
                <a class="nav-link" href="about.html">CONTACT</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="services.html">FAQ</a>
              </li>                          
              <li class="nav-item">
                <a role = "button" href="{{url('login')}}" class="nav-link text-dark" style="background-color: greenyellow; border-radius:1em" href="{{url('\login')}}">Login</a>
              </li>
           
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>WELCOME</h6>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="{{url('category')}}" class="filled-button">OPEN</a>
                </div>
            </div>
          </div>
          <!-- // Item -->

          <!-- Item -->
                    <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>WELCOME</h6>
                  <h4>SEPTIANI SARI<br> SEPTI STORE</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="{{url('category')}}" class="filled-button">OPEN</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
      
        </div>
    </div>
    
    <!-- Item -->
    <div class="container p-5 bg-dark">
                    
                      <h4 class="text-center text-light m-4 p-2">CATEGORY</h4>
                      <div class="d-flex mx-auto">
                            
                            @forelse($dproduk as $d)
                           
                              <div class="card mb-4 mx-4 " style="width: 18rem;">
                                <img src="https://preview.webpixels.io/quick-website-ui-kit/assets/img/theme/light/placeholder.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$d->nama_produk}}</h5>
                                    <p class="card-text">{{$d->kategori}}<br>Rp. {{$d->harga}}</p>
                                    <a href="#" class="btn btn-primary">Beli</a>
                                </div>
                                </div>
                              @empty
                              <p>Data Tidak Ada</p>

                              @endforelse
                          
                          </div>
                    
                
        </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>SEPTI STORE</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://fb.com/templatemo" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="#">HOME</a></li>
              <li><a href="#">SHOP</a></li>
              <li><a href="#">SHOP DETAIL</a></li>
              <li><a href="#">PAGES</a></li>
              <li><a href="#">CONTACT</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="#">CATEGORIES</a></li>
              <li><a href="#">GROUP</a></li>
              <li><a href="#">MERCHANDISE</a></li>
              <li><a href="#">ALBUM</a></li>
              <li><a href="#">LIGHT STICK</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 Financial Business Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a><br>
            Distributed By: <a rel="nofollow noopener" href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('vendor/assets/js/custom.js')}}"></script>
    <script src="{{asset('vendor/assets/js/owl.js')}}"></script>
    <script src="{{asset('vendor/assets/js/slick.js')}}"></script>
    <script src="{{asset('vendor/assets/js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>