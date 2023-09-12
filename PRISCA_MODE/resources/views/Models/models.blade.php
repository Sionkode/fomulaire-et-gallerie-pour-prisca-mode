@include('layouts.head')

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">PRISCA COUTURE</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <!-- Navbar-->
        @include('layouts.nav_bar')
        <div id="layoutSidenav_content">

            @include('layouts.state')


            <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_5terre.jpg">
                    <img src="img_5terre.jpg" alt="Cinque Terre">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>

              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_forest.jpg">
                    <img src="img_forest.jpg" alt="Forest">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>

              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_lights.jpg">
                    <img src="img_lights.jpg" alt="Northern Lights">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>

              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_mountains.jpg">
                    <img src="img_mountains.jpg" alt="Mountains">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>

              <div class="clearfix"></div>

            @include('layouts.js')

            <footer class=" bg-light text-center text-lg-start">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2020 Copyright:
                  <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
              </footer>

</body>
