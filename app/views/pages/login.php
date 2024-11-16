<?php include __DIR__ . '/../components/navbar.php' ?>
<main class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="mt-5 p-5 w-50 shadow" style="background-color: rgba(196, 217, 255, 0.18);">
        <h1 class="text-center mt-4 mb-5 fw-bold" style="color: #052C65;">FINALIS JTI</h1>
        <form class="d-flex flex-column align-items-center rounded-4" method="post" action="/auth">
            <div class="w-75 mt-5">
                <label for="no_induk" class="form-label">ID Pengguna</label>
                <input type="text" id="no_induk" class="form-control" name="user_id">
            </div>

            <div class="w-75 mt-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-flex justify-content-end w-75">
                <a href="" class="mt-1 text-black">Lupa kata sandi</a>
            </div>
            <button type="submit" class="w-25 mt-5 btn text-white" style="background-color: #052C65;">Masuk</button>
        </form>
    </div>
</main>