<?php function Alert(string $id, string $title, string $message, bool $is_logout_alert = false): void { ?>
<div class="modal" tabindex="-1" id="<?= $id ?>">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger"><?= $title ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?= $message ?></p>
            </div>
            <div class="modal-footer">
                <?php if ($is_logout_alert): ?>
                <form action="/logout" method="post" class="modal-footer">
                    <button type="submit" class="px-4">Iya</button>
                </form>
                <?php endif; ?>
                <button type="button" class="text-white" style="background-color: var(--color-navy-blue);"
                    data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
