<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/reddit-sans@5.1.0/index.min.css">
    <style>
        * {
            font-family: 'Reddit Sans';
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.min.js"></script>
    <script>
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
    </script>


    </head>

    <body>