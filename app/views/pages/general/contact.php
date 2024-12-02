<?php include __DIR__ . '/../../components/general/navbar.php' ?>
<main class="d-flex flex-column justify-content-center align-items-center min-vh-100"
    style="background-color: rgba(196, 217, 255, 0.18);">
    <h2 class="text-center mt-5 mb-5 fw-bold" style="color: #052C65;">Hubungi kami melalui formulir berikut</h2>
    <form class="w-50">
        <div class="mb-3 d-flex">
            <div class="w-50 px-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama">
            </div>
            <div class="w-50 px-4">
                <label for="nomor_hp" class="form-label">Nomor HP</label>
                <input type="tel" class="form-control" id="nomor_hp">
            </div>
        </div>
        <div class="mb-3 d-flex">
            <div class="w-50 px-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="w-50 px-4">
                <label for="subjek" class="form-label">Subjek</label>
                <input type="text" class="form-control" id="subjek">
            </div>
        </div>
        <div class="px-4">
            <label for="input-pesan" class="mt-4 mb-2">Pesan</label>
            <textarea class="form-control" style="resize: none; height: 100px;" id="input-pesan"></textarea>
            <button type="submit" class="btn text-white mt-3" style="background-color: #052C65;">Kirim</button>
        </div>
    </form>
</main>