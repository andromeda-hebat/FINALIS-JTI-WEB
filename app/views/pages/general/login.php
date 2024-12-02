<?php include __DIR__ . '/../../components/general/navbar.php' ?>
<main class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="mt-5 p-5 w-50 shadow" style="background-color: rgba(196, 217, 255, 0.18);">
        <h1 class="text-center mt-4 mb-5 fw-bold" style="color: #052C65;">FINALIS JTI</h1>
        <form method="post" action="/login" id="login-form" class="d-flex flex-column align-items-center rounded-4">
            <div class="w-75 mt-5">
                <label for="no_induk" class="form-label">NIM/NIDN</label>
                <input type="text" id="no_induk" class="form-control" name="user_id"
                    placeholder="Masukkan ID pengguna anda">
            </div>

            <div class="w-75 mt-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukkan password anda">
            </div>
            <button type="submit" class="w-25vh mt-5 btn text-white" style="background-color: #052C65;">Masuk</button>
        </form>
    </div>
</main>




<!-- Bootstrap modal -->
<div class="modal fade" id="auth-fail-bs-modal" tabindex="-1" aria-labelledby="authFailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authFailModalLabel">Gagal login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    width="70" height="70" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <path
                            d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 24.813 0 45 20.187 45 45 C 90 69.813 69.813 90 45 90 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 28.902 66.098 c -1.28 0 -2.559 -0.488 -3.536 -1.465 c -1.953 -1.952 -1.953 -5.118 0 -7.07 l 32.196 -32.196 c 1.951 -1.952 5.119 -1.952 7.07 0 c 1.953 1.953 1.953 5.119 0 7.071 L 32.438 64.633 C 31.461 65.609 30.182 66.098 28.902 66.098 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 61.098 66.098 c -1.279 0 -2.56 -0.488 -3.535 -1.465 L 25.367 32.438 c -1.953 -1.953 -1.953 -5.119 0 -7.071 c 1.953 -1.952 5.118 -1.952 7.071 0 l 32.195 32.196 c 1.953 1.952 1.953 5.118 0 7.07 C 63.657 65.609 62.377 66.098 61.098 66.098 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
                <p class="mt-3">ID pengguna dan password salah. Mohon coba lagi!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $('#login-form').on('submit', function (e) {
            e.preventDefault();

            const data = new FormData($(this)[0]);

            $.ajax({
                url: '/login',
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;
                    }
                },
                error: (xhr, status, error) => {
                    $('#auth-fail-bs-modal').modal('show');
                }
            });
        })
    });
</script>