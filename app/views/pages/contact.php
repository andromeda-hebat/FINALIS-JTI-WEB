<?php include __DIR__ . '/../components/navbar.php' ?>
<main class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <h1 class="text-center">Hubungi Kami Melalui Formulir Berikut</h1>
    <form class="w-50">
        <div class="mb-3 d-flex">
            <div class="w-50">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama">
            </div>
            <div class="w-50">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="tel" class="form-control" id="nomor_hp">
            </div>
        </div>
        <div class="mb-3 d-flex">
            <div class="w-50">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="w-50">
                <label for="subjek" class="form-label">Subjek</label>
                <input type="text" class="form-control" id="subjek">
            </div>
        </div>
        <label for="input-pesan">Pesan</label>
        <textarea class="form-control" style="resize: none" id="input-pesan"></textarea>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</main>