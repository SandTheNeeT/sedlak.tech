<?php

?>

<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="SandTheNeeT_">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="lib/css/fonts.css">
        <link rel="stylesheet" href="lib/css/style.css">
        <link rel="stylesheet" href="lib/css/style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/png" href="lib/img/favicon.png">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="lib/js/wakenbake.js"></script>

        <title>GALERIE | PETR SEDLÁK</title>
    </head>

    <body>
        <video autoplay muted loop id="bgVideo">
        <source src="lib/img/bg.mp4" type="video/mp4">
        </video>

        <div class="textbody">
            <div class="text" data-fade="true">
                <p class="nazev">Galerie</p>
                <img src="https://www.fakaheda.eu/logo/wide_green_white_transparent.png" height="100px">
                <p class="obsah">
                    <a href="/"><i class="fa-solid fa-house"></i> Zpět domů</a>
                </p>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p class="footertext">Copyright &copy; <?php echo date("Y"); ?> &nbsp;|&nbsp; Coded with &hearts; by SandTheNeeT_ &nbsp;|&nbsp; Source code is available on <a class="link" href="https://github.com/SandTheNeeT/sedlak.tech" target="_blank">GitHub</a></p>
        </div>
    </body>

</html>
