<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet" />

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                <a class="dropdown-item" href="faq.html">FAQ</a>
                <a class="dropdown-item" href="404.html">404</a>
                <a class="dropdown-item" href="pricing.html">Pricing Table</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('{{ asset('/img/sekolah.jpg') }}');">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('{{ asset('/img/sekolah2.jpg') }}');">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4 text-center">Profil SIT Daarul 'Ilmi</h1>

      <div class="row">
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <div class="card h-100">
            
            <div class="card-body">
              <h4 class="card-title">
                <a>SMPIT Daarul 'Ilmi</a>
              </h4>
              <h4>Visi</h4>
              <p class="card-text">Mewujudkan Lulusan SMIPIT Daarul 'Ilmi Bandar Lampung yang Takwa, Cerdas, Berprestasi, dan Berakhlak Mulia.</p>
              <h4>Misi</h4>
              <p class="card-text"> 
                <ul>
              <li>Membangun pribadi yang cinta kepada Allah, Rasul-Nya, dan gemar beribadah. </li>
              <li>Membangun pribadi cerdas, terampil, berwawasan, kreatif, dam inovatif. </li>
              <li>Membangun pribadi kuat, tangguh, dan tahan uji. </li>
              <li>Menumbuhkan pribadi berprestasi dan siap bersaing di zamannya. </li>
              <li>Membangun pribadi matang, mandiri, bijaksana, bertanggung jawab terhadap diri sendiri dan ummat.</li></ul>
                </ul>
              </p>
            </div>
          </div>
        </div>
       
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <div class="card h-100">
            
            <div class="card-body">
              <h4 class="card-title">
                <a>SMAIT Daarul 'Ilmi</a>
              </h4>
              <h4>Visi</h4>
              <p class="card-text">Menyiapkan Calon Pemimpin di Segala Bidang Menyongsong Indonesia Emas 2045.</p>
              <h4>Misi</h4>
              <p class="card-text"><ul>
              <li>Mengembangkan kompetensi spiritual, moral, sosial, pengetahuan, keterampilan, dan kesehatan. </li>
              <li>Menerapkan proses pembelajaran yang efektif, inovatif, kreatif, dan produktif. </li>
              <li>Memantapkan pembiasaan hidup yang berpegang teguh pada prinsip-prinsip Islam. </li>
              <li>Menerapkan budaya belajar sepanjang masa dengan daya dukung teknologi informasi dan komunikasi. </li>
              <li>Mengembangkan minat, bakat, dan jiwa kewirausahaan.</li>
              <li>Memupuk rasa tanggung jawab terhadap pribadi, keluarga, agama, bangsa dan negara, serta ummat di seluruh dunia.</li></ul>
                </ul></p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <div class="row py-4 px-4">
        <div class="col main-content py-4 px-4">
          <h1 class="text-center mb-5"> Welcome to Lorem Ipsum </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>

      <!-- Features Section -->
      
      <!-- /.row -->

      <hr>

      
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Eria Ayu Ningtias 2017</p>
      </div>
      <!-- /.container -->
    </footer>

<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

  </body>

</html>
