<?php function FileViewer(bool $is_fullscreen): void { ?>
<div class="modal fade" id="file-preview-modal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
    <div class="modal-dialog <?= $is_fullscreen == true ? 'modal-fullscreen' : 'modal-xl' ?> modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">Pratinjau file</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="pdfViewer" src="" style="width: 100%; height: 500px;" frameborder="0"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>





<?php ////////////////////// ?>
<?php ////--JAVASCRIPT--//// ?>
<?php ////////////////////// ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script>
    $('#filePreviewModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const pdfFile = button.data('pdf');

        $('#pdfViewer').attr('src', 'data:application/pdf;base64,' + pdfFile);
    });

    $('#filePreviewModal').on('hidden.bs.modal', function () {
        $('#pdfViewer').attr('src', '');
    });
</script>
<?php } ?>
