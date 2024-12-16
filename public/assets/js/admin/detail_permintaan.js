$(document).ready(function () {
    $('#form-verify').on('submit', function (e) {
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
        });
    });

    $('#filePreviewModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const pdfFile = button.data('pdf');

        $('#pdfViewer').attr('src', 'data:application/pdf;base64,' + pdfFile);
    });

    $('#filePreviewModal').on('hidden.bs.modal', function () {
        $('#pdfViewer').attr('src', '');
    });
});