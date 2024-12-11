<div class="d-flex flex-column align-items-center border-end justify-content-center"
    style="background-color: var(--color-navy-blue); width: 250px; height: 100vh; padding-top: 20px;">
    <!-- Bagian Profil -->
    <div class="d-flex text-center py-4 mb-4">
        <img src="assets/img/finalis-jti-logo.png" alt="Logo" class="me-3" style="width: 50px; height: 50px;">
        <h3 class="d-flex align-items-center justify-content-center fw-bold text-center"
            style="color: var(--color-golden-yellow); font-weight: 800; line-height: normal !important;">FINALIS JTI</h3>
    </div>

    <!-- Tautan Navigasi -->
    <nav class="nav w-100 d-flex flex-column text-start">
        <div class="sidebar-nav nav-link text-white w-100 ps-5 fw-bold kelola-data">
            <div class="d-flex align-items-center">
                Kelola Data
                <svg width="20" height="20" class="ms-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.46888 6.96888C2.53854 6.89903 2.62131 6.84362 2.71243 6.80581C2.80354 6.768 2.90122 6.74854 2.99988 6.74854C3.09853 6.74854 3.19621 6.768 3.28733 6.80581C3.37844 6.84362 3.46121 6.89903 3.53088 6.96888L11.9999 15.4394L20.4689 6.96888C20.5386 6.89914 20.6214 6.84383 20.7125 6.80609C20.8036 6.76835 20.9013 6.74893 20.9999 6.74893C21.0985 6.74893 21.1961 6.76835 21.2873 6.80609C21.3784 6.84383 21.4611 6.89914 21.5309 6.96888C21.6006 7.03861 21.6559 7.12139 21.6937 7.2125C21.7314 7.30361 21.7508 7.40126 21.7508 7.49988C21.7508 7.59849 21.7314 7.69614 21.6937 7.78725C21.6559 7.87836 21.6006 7.96114 21.5309 8.03088L12.5309 17.0309C12.4612 17.1007 12.3784 17.1561 12.2873 17.1939C12.1962 17.2318 12.0985 17.2512 11.9999 17.2512C11.9012 17.2512 11.8035 17.2318 11.7124 17.1939C11.6213 17.1561 11.5385 17.1007 11.4689 17.0309L2.46888 8.03088C2.39903 7.96121 2.34362 7.87844 2.30581 7.78733C2.268 7.69621 2.24854 7.59853 2.24854 7.49988C2.24854 7.40122 2.268 7.30354 2.30581 7.21243C2.34362 7.12131 2.39903 7.03854 2.46888 6.96888Z"
                        fill="white" />
                </svg>
            </div>
        </div>
        <div class="submenu ms-5 " style="display: none;">
            <a href="/kelola-admin" class="sidebar-nav nav-link text-white w-100 ps-5">
                Admin
            </a>
            <a href="/kelola-mahasiswa" class="sidebar-nav nav-link text-white w-100 ps-5">
                Mahasiswa
            </a>
            <a href="/kelola-surat" class="sidebar-nav nav-link text-white w-100 ps-5">
                Template Surat
            </a>
        </div>

        <a href="log-aktivity" class="sidebar-nav nav-link text-white w-100 ps-5 fw-bold">
            Log Aktivitas
        </a>
    </nav>

    <!-- Tombol Keluar -->
    <div class="mt-auto w-100 mb-4 d-flex justify-content-center" style="">
        <button type="button" class="sidebar-nav nav-link w-100 ps-5 p-3 d-flex text-white text-start"
            data-bs-toggle="modal" data-bs-target="#modalConfirmationLogout">
            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.36828 6.65552C6.91888 7.45808 5.77602 8.71798 5.11811 10.2385C4.46021 11.759 4.32429 13.4546 4.73158 15.0605C5.13886 16.6665 6.06643 18.0923 7.36947 19.1155C8.67251 20.1387 10.2777 20.7017 11.9344 20.7165C13.5911 20.7313 15.206 20.1971 16.5272 19.1974C17.8483 18.1976 18.8012 16.7886 19.2371 15.1902C19.6731 13.5918 19.5675 11.8941 18.9369 10.362C18.3062 8.82999 17.1861 7.54987 15.7513 6.72152L16.5013 5.42252C18.2228 6.4168 19.5666 7.95307 20.323 9.79154C21.0795 11.63 21.2059 13.6672 20.6826 15.5851C20.1593 17.5029 19.0157 19.1936 17.4304 20.3931C15.8451 21.5926 13.9072 22.2335 11.9193 22.2157C9.93136 22.1978 8.00528 21.5223 6.44172 20.2945C4.87816 19.0668 3.7651 17.3559 3.2763 15.4289C2.78749 13.5019 2.95046 11.4674 3.73974 9.64277C4.52903 7.81817 5.90022 6.30625 7.63928 5.34302L8.36828 6.65552Z"
                    fill="#E4EEFF" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 12V1.5H12.75V12H11.25Z" fill="#E4EEFF" />
            </svg>
            Keluar
        </button>
    </div>
</div>





<!-- Bootstrap Modal -->
<?php include __DIR__ . '/../general/ask_logout_modal.php' ?>





<!-- JavaScript for this component -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        const $submenu = $(".submenu");
        const $submenuItems = $(".submenu a");

        $(".kelola-data").click(function (e) {
            e.preventDefault();
            $submenu.slideToggle();
            $(this).toggleClass('active');
        });

    });
</script>
