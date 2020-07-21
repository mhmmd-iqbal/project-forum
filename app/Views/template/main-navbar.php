<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar light site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <div class="col-3">
                <div class="site-logo">
                    <a href="Home"><strong>FORUM IT</strong></a>
                </div>
            </div>

            <div class="col-9  text-right">

                <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li class="<?= $active == 'home' ? 'active' : '' ?>"><a href="/home" class="nav-link">Home</a></li>
                        <li class="<?= $active == 'blog' ? 'active' : '' ?>"><a href="/blog" class="nav-link">Blog</a></li>
                        <li class="<?= $active == 'tutorial' ? 'active' : '' ?>"><a href="/tutorial" class="nav-link">Tutorial</a></li>
                        <li class="<?= $active == 'discusion' ? 'active' : '' ?>"><a href="/discussion" class="nav-link">Discussion Channel</a></li>
                        <li class="<?= $active == 'ebook' ? 'active' : '' ?>"><a href="/ebook" class="nav-link">E-Book</a></li>
                        <li class="<?= $active == 'about' ? 'active' : '' ?>"><a href="/about" class="nav-link">About Us</a></li>
                        <li><a href="/login" class="nav-link">Login</a></li>
                        <!-- <li><a href="testimonials.html" class="nav-link">Testimonials</a></li> -->
                        <!-- <li><a href="contact.html" class="nav-link">Contact</a></li> -->
                    </ul>
                </nav>
            </div>


        </div>
    </div>

</header>


<div class="site-section-cover overlay" style="background-image: url('<?= base_url() ?>/assets/template/images/hero_bg.jpg');">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10 text-center">
                <?= $judulkonten ?>
            </div>
        </div>
    </div>
</div>