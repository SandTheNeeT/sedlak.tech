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

        <title>HOME | PETR SEDLÁK</title>
    </head>

    <body>
        <video autoplay muted loop id="bgVideo">
        <source src="lib/img/bg.mp4" type="video/mp4">
        </video>

        <div class="textbody">
            <div class="text" data-fade="true">
                <p class="nazev">Petr Sedlák</p>
                <p class="nadpis">Vítej na mé stránce!</p>&nbsp;<br>
                <p class="obsah">
                    Zdravím tě, moje jméno je Petr Sedlák, ale ve světě her si říkám SandTheNeeT_<br>
                    Pocházím z prdele světa jménem Česká republika. Mám rád hraní počítačových her, rád poslouchám hudbu, a mnohem více.<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    Pokud se o mě chceš dozvědět něco více, navštiv jednu z podstránek níže.<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    | <a href="contact.php"><i class="fa-regular fa-address-card"></i></i> Kontakt</a> |
                    <a href="aboutme.php"><i class="fa-solid fa-user"></i> O mě</a> |
                    <a href="services.php"><i class="fa-solid fa-list-check"></i> Služby</a> |
                    <a href="ikt.php"><i class="fa-solid fa-laptop-code"></i> IKT Stuff</a> |<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    &nbsp;<br>
                    <!--a href="#" target="_blank"--><i class="fa-solid fa-bread-slice"></i> Náboženství chleba<!--/a-->
                </p>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p class="footertext">Copyright &copy; <?php echo date("Y"); ?> &nbsp;|&nbsp; Coded with &hearts; by SandTheNeeT_ &nbsp;|&nbsp; Source code is available on <a class="link" href="https://github.com/SandTheNeeT/sedlak.tech" target="_blank">GitHub</a></p>
        </div>
    </body>

</html>
