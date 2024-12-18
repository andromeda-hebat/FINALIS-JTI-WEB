<?php function FileViewer(bool $is_fullscreen, bool $is_file_from_outside_public_dir = false, string $file_category = null): void { ?>
<div class="modal fade" id="file-preview-modal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
    <div class="modal-dialog <?= $is_fullscreen == true ? 'modal-fullscreen' : 'modal-xl' ?> modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">Pratinjau file</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="pdfViewer" style="width: 100%; height: 100%;" frameborder="0"></iframe>
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
    $(document).ready(function () {
        $('#file-preview-modal').on('show.bs.modal', function (event) {
            const button = $(event.relatedTarget);
            const pdfFile = button.data('pdf-name');
            const subCategory = button.data('pdf-sub-category');

            <?php if ($is_file_from_outside_public_dir): ?>
            const fileCategory = <?= json_encode($file_category) ?>;
            $('#pdfViewer').attr('src', '/uploads?file='+pdfFile+'&category='+fileCategory+'&sub_category='+subCategory);
            <?php else: ?>
            $('#pdfViewer').attr('src', pdfFile);
            <?php endif; ?>
        });

        $('#file-preview-modal').on('hidden.bs.modal', function () {
            $('#pdfViewer').attr('src', '');
        });
    });
</script>
<?php } ?>
