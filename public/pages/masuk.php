<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include __DIR__ . '/../components/navbar.php'?>
    <main class="container d-flex flex-column justify-content-center align-items-center min-vh-100" >
        <div class="border p-5 w-50 border-black">
            <h3 class="text-center">SIBT TA<br>POLINEMA</h3>
            <form class="d-flex flex-column align-items-center">
                <div class="w-75">
                    <label for="no_induk" class="form-label">NIP/NIDN/No. Pegawai</label>
                    <input type="text" class="form-control" id="no_induk">
                </div>
                <div class="w-75">
                    <label for="kata_sandi" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="kata_sandi">
                </div>
                <div class="d-flex justify-content-end w-75">
                    <a href="" class="text-black">Lupa kata sandi</a>
                </div>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
        </div>
        <a href="dasbor.php">Masuk ke admin</a>
    </main>
</body>
</html>