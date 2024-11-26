$(function () {
    $("#jacord").accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
        beforeActivate: function (event, ui) {
            var items = $(this).find('> li');

            if (ui.newHeader.length > 0) {
                items.each(function () {
                    if (this !== ui.newHeader[0].parentElement) {
                        $(this).hide();
                    }
                });
            } else {
                items.show();
            }
        }
    });
});