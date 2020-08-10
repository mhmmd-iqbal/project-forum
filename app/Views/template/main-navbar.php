 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top header-transparent">
     <div class="container">

         <div class="logo float-left">
             <h1 class="text-light"><a href="/"><span>Forum IT</span></a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="<?= base_url() ?>/assets/main/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav class="nav-menu float-right d-none d-lg-block">
             <ul>
                 <li class="<?= $active == 'home' ? 'active' : '' ?>"><a href="/">Home</a></li>
                 <li class="<?= $active == 'blog' ? 'active' : '' ?>"><a href="/blog">Blog</a></li>
                 <li class="<?= $active == 'tutorial' ? 'active' : '' ?>"><a href="/tutorial">Tutorial</a></li>
                 <li class="<?= $active == 'discussion' ? 'active' : '' ?>"><a href="/discussion">Discussion Channel</a></li>
                 <li class="<?= $active == 'ebook' ? 'active' : '' ?>"><a href="/ebook">E-Book</a></li>
                 <li class="<?= $active == 'about' ? 'active' : '' ?>"><a href="/about">About Us</a></li>
                 <li class="<?= $active == 'login' ? 'active' : '' ?>"><a href="/login">Login</a></li>
             </ul>
         </nav><!-- .nav-menu -->

     </div>
 </header><!-- End Header -->