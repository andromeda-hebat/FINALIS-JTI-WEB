<?php require_once __DIR__ . '/../../components/bs_modal/alert.php' ?>



<?php function ConfirmDeleteData(string $title, string $url, string $user): void { ?>
<div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Apakah anda yakin ingin menghapus data ini ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button"
                    style="color: var(--color-navy-blue); border-color: var(--color-navy-blue); background-color: white"
                    data-bs-dismiss="modal">Batal</button>
                <button id="btn-delete" type="button" class="text-white" style="background-color: var(--color-navy-blue);" data-target-id-delete="">Hapus</button>
            </div>
        </div>
    </div>
</div>





<?php /////////////////////// ?>
<?php //-EXTERNAL COMPONENT-/ ?>
<?php /////////////////////// ?>

<?php Alert("info-success-bs-modal", "Berhasil!", "Sukses hapus data " . $user) ?>
<?php Alert("info-error-bs-modal", "Gagal!", "Gagal menghapus data " . $user) ?>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btn-delete').on('click', function(e) {
            const targetId = $(this).data('target-id-delete');

            $.ajax({
                url: '<?= $url ?>/' + targetId,
                type: 'DELETE',
                data: null,
                processData: false,
                contentType: 'application/json',
                success: function (response) {
                    $('#deleteModal').modal('hide');
                    $('#info-success-bs-modal').modal('show');
                    $('#info-success-bs-modal').on('hidden.bs.modal', function () {
                        location.reload();
                    });
                },
                error: (xhr, status, error) => {
                    $('#deleteModal').modal('hide');
                    $('#info-error-bs-modal').modal('show');
                }
            })
        });

        $('#deleteModal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const userId = button.data('user-id');

            $('#btn-delete').attr('data-target-id-delete', userId);
        });

        $('#deleteModal').on('hidden.bs.modal', function () {
            $('#btn-delete').attr('data-target-id-delete', '');
        });
    });
</script>

<?php } ?>
