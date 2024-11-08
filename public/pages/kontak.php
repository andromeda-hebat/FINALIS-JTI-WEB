<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include __DIR__ . '/../components/navbar.php' ?>
    <main class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="text-center m-2 p-2">Hubungi Kami Melalui Formulir Berikut</h1>
        <form class="w-50 m-2">
            <div class="mb-3 d-flex">
                <div class="w-50 me-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="w-50 ms-2">
                    <label for="nomor_hp" class="form-label">Nomor HP</label>
                    <input type="tel" class="form-control" id="nomor_hp">
                </div>
            </div>
            <div class="mb-3 d-flex">
                <div class="w-50 me-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="w-50 ms-2">
                    <label for="subjek" class="form-label">Subjek</label>
                    <input type="text" class="form-control" id="subjek">
                </div>
            </div>
            <label for="input-pesan">Pesan</label>
            <textarea class="form-control mb-2" style="resize: none" id="input-pesan"></textarea>
            <button type="submit" class="btn btn-primary mt-2">Kirim</button>
        </form>
    </main>
</body>

</html>