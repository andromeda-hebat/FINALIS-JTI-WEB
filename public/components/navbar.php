<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">SIBT-TA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-nav d-flex justify-content-between" id="navbarNav">
            <div class="d-flex">
                <a class="nav-item nav-link active" href="#tentang">Tentang</a>
                <a class="nav-item nav-link" href="#panduan">Panduan</a>
                <a class="nav-item nav-link" href="pages/kontak.php">Kontak</a>
            </div>
            <a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/pages/masuk.php'?>" type="button" class="btn btn-primary">Masuk</a>
        </div>
    </div>
</nav>