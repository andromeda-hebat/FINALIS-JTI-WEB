<?php include __DIR__ . '/../components/navbar.php' ?>
<main class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="border p-5 w-50 border-black">
        <h3 class="text-center">SIBT TA<br>POLINEMA</h3>
        <form class="d-flex flex-column align-items-center" method="post" action="/auth">
            <div class="w-75">
                <label for="no_induk" class="form-label">NIP/NIDN/No. Pegawai</label>
                <input type="text" id="no_induk" class="form-control" name="user_id">
            </div>
            <div class="w-75">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-flex justify-content-end w-75">
                <a href="" class="text-black">Lupa kata sandi</a>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </div>
</main>