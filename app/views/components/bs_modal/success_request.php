<?php function SuccessRequest(string $title, string $message): void { ?>
<div class="modal" tabindex="-1" id="info-success-bs-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?= $message ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="text-white" style="background-color: var(--color-navy-blue);"
                    data-bs-dismiss="modal">Selesai</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>