<div id="body-content" class="mt-4" style="min-height: 75vh; max-height: 75vh;">
    <div class="px-4 card card-body" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25); ">
        <p class="text-center">
            Formulir yang anda ajukan belum dapat diverifikasi periksa kembali berkas yang<br>anda
            upload,
            baca keterangan dari admin!
        </p>
        <p class="mt-4 text-start fw-bold">Keterangan : </p>

        <textarea name="description" id="keterangan" cols="105" rows="10" style="resize: none;"
            disabled>
            <?= $data['info_berkas']->getKeteranganVerifikasi() ?>
        </textarea>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <button id="btn-resend-form" class="px-4 text-white"
            style="background-color: var(--color-navy-blue); border-color: var(--color-navy-blue);">Kirim Ulang Formulir</button>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $('#btn-resend-form').on('click', function () {
        $('#body-content').hide();
        $('#empty-form-content').show();
    })
</script>