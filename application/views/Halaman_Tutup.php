<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('public/css/styletutup.css'); ?>">

    <style>
        .moving-text {
            position: absolute;
            white-space: nowrap;
        }
    </style>

</head>

<body>
    <div class="container" style="margin-top:300px;">
        <div class="row">
            <div class="col">
                <p id="movingText" class="moving-text" style="font-weight: 600; font-size:50px">Maaf, Toko Saat Ini Sedang Tutup</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        var position = window.innerWidth;

        function moveText() {
            position--;
            document.getElementById('movingText').style.transform = 'translateX(' + position + 'px)';
            requestAnimationFrame(moveText);

            if (position < -200) {
                position = window.innerWidth;
            }
        }

        moveText();
    </script>
</body>

</html>