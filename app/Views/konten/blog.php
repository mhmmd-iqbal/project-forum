<?= $this->extend('template/main-template') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url() ?>/assets/main/blog.css">
<?= $this->endSection('css') ?>

<?= $this->section('konten') ?>

<!-- ======= Blog Section ======= -->
<section class="service">
    <div class="container">
        <div class="section-title">
            <h2>Blog Konten</h2>
            <p>Konten-konten menarik yang dibagikan oleh pemateri-pemateri hebat. Pastinya bermanfaat dan menambah ilmu kita seputar dunia IT. Yuk kepoin !</p>
        </div>
    </div>
</section>
<section class="blog section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <?php for ($i = 1; $i < 5; $i++) : ?>
                            <div class="card my-blog mb-3" data-aos="fade-right">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <div class="gambar">
                                            <img src="<?= base_url() ?>/assets/main/img/blog-post-1.jpg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between">
                                                <p class="p-2"><i class="fa fa-user"></i> User Created</p>
                                                <p class="p-2"><i class="fa fa-clock-o"></i> Date Created</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Tag Kategori Name</p>
                                            <h5 class="pt-1" style="text-align: justify;">
                                                <a href="">Judul Postingan Yang Panjang Sehingga Tidak Terkendali</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                            <div class="card-header">
                                <p>Pencarian</p>
                            </div>
                            <div class="card-body">
                                <form class="form-inline" action="">
                                    <div class="form-group mr-1 mb-2">
                                        <input type="password" class="form-control" id="" placeholder="Cari Konten Blog...">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> Cari</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mb-3" data-aos="fade-right" data-aos-delay="300">
                            <div class="card-header">
                                <p>Kategori</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Blog Section -->
<?= $this->endSection('konten') ?>