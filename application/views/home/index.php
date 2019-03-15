<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $judul; ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/') ?>dist/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link href="<?= base_url('bootstrap/') ?>fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?= base_url('bootstrap/') ?>fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?= base_url('bootstrap/') ?>fontawesome/css/solid.css" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="<?= base_url(); ?>">SMAN 4 MACIPO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#about">Tentang Sekolah</a>
                    <a class="nav-item nav-link" href="#ekstra">Ekstrakurikuler</a>
                    <a class="nav-item nav-link" href="#prestasi">Prestasi</a>
                    <a class="nav-item nav-link" href="#pengumuman">Pengumuman</a>
                    <a class="nav-item nav-link" href="<?= base_url('login'); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->

    <!-- jumbotron -->
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <!-- ABOUT SEKOLAH -->
    <section id="about">
        <div class="container">

            <h1 class="text-center">Tentang Sekolah</h1>
            <div class="row">
                <div class="col">
                    <div class="card mb-3 mt-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('template_home/img/work1.jpg') ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 mt-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('template_home/img/work1.jpg') ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-3 mt-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('template_home/img/work4.jpg') ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 mt-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('template_home/img/work5.jpg') ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION EKSTRAKURIKULER -->
    <div class="container mt-5 mb-5">
        <section id="ekstra">
            <h1 class="text-center">Ekstrakurikuler</h1>
            <div class="row mt-3">
                <div class="col-sm">
                    <div class="card-deck">
                        <div class="card">
                            <img src="<?= base_url('template_home/img/work1.jpg'); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <img src="<?= base_url('template_home/img/work2.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <img src="<?= base_url('template_home/img/work3.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm">
                    <div class="card-deck">
                        <div class="card">
                            <img src="<?= base_url('template_home/img/work1.jpg'); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <img src="<?= base_url('template_home/img/work4.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <img src="<?= base_url('template_home/img/work6.jpg'); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SECTION PRESTASI -->
    <div class="container">
        <section id="prestasi">
            <h1 class="text-center">Prestasi</h1>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?= base_url('template_home/img/work3.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?= base_url('template_home/img/work1.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?= base_url('template_home/img/work3.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="<?= base_url('template_home/img/work1.jpg') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SECTION PENGUMUMAN -->
    <div class="container mt-5 mb-5">
        <section id="pengumuman">
            <h1 class="text-center mb-3">Pengumuman</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Pengumuman Penting !
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Pengumuman Penting !
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-header">
                            Pengumuman Penting !
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Javascript dan JQuery -->
    <script src="<?= base_url('bootstrap/') ?>>dist/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url('bootstrap/') ?>dist/js/popper.min.js"></script>
    <script src="<?= base_url('bootstrap/') ?>dist/js/bootstrap.min.js"></script>
</body>

</html> 