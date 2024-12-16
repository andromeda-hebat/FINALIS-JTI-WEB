<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Data Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Apakah anda yakin ingin menghapus data ini ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button"
                    style="color: var(--color-navy-blue); border-color: var(--color-navy-blue); background-color: white"
                    data-bs-dismiss="modal">Batal</button>
                <form action="/kelola-admin" method="delete" id="form-delete-data">
                    <button type="button" class="text-white"
                        style="background-color: var(--color-navy-blue);">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#form-delete-data').on('submit', function (e) {
            e.preventDefault();

            const data = new FormData($(this)[0]);

            const formObject = {};
            data.forEach((value, key) => {
                formObject[key] = value;
            });

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: JSON.stringify(formObject),
                processData: false,
                contentType: 'application/json',
                success: function (response) {
                    $('#info-success-update-modal').modal('show');
                },
                error: (xhr, status, error) => {
                    $('#server-error-bs-modal').modal('show');
                }
            })
        });
    });
</script>