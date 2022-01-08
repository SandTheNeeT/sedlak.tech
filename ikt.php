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

        <title>IKT | PETR SEDLÁK</title>
    </head>

    <body>
        <video autoplay muted loop id="bgVideo">
        <source src="lib/img/bg.mp4" type="video/mp4">
        </video>

        <div class="textbody">


            <div class="text" data-fade="true">
            <div class="ikt">
                <div style="text-align: center;">
                    <p class="obsah"><i class="fa-solid fa-triangle-exclamation"></i> Tato stránka slouží jako dočasná pro účely projektu do IKT. Bude později smazána. <i class="fa-solid fa-triangle-exclamation"></i></a></p>
                    <img src="https://pbs.twimg.com/media/DylbMZpU0AATRgZ?format=jpg&name=large" height="250px" style="margin: 30px;"><br>
                    <p class="obsah"><i class="fa-solid fa-arrow-up"></i> Obrázek a externí soubor zároveň <i class="fa-solid fa-arrow-up"></i></p><br>
                </div>

                <div class="wrapper">
                <div class="sloupec">
                    <h2 class="ikttext">Odrážky:</h2>
                    <ul>
                        <li>Mléko</li>
                        <li>Sýr
                            <ul>
                            <li>Eidam</li>
                            <li>Niva</li>
                            <li>Feta</li>
                            </ul>
                        </li>
                    </ul><br>

                    <h2 class="ikttext">Číslování:</h2>
                    <ol>
                        <li>Mléko</li>
                        <li>Sýr
                            <ol>
                            <li>Eidam</li>
                            <li>Niva</li>
                            <li>Feta</li>
                            </ol>
                        </li>
                    </ol><br>
                </div>

                <div class="sloupec">
                    <h2 class="ikttext">Tabulka:</h2>
                    <table>
                        <thead>
                            <tr>
                                <th colspan="3">Seznam lidí</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Číslo</td>
                                <td>Jméno</td>
                                <td>Město</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Pepa</td>
                                <td>Olomouc</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Franta</td>
                                <td>Vyškov</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Marta</td>
                                <td>Plzeň</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sloupec">
                    <h2 class="ikttext">Formulář:</h2>
                        <form class="formular">
                        <div class="formular">
                            <label for="name">Vaše jméno: </label>
                           <input type="text" name="name" id="name" required>
                        </div>
                        <div class="formular">
                            <label for="email">Váš email: </label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="formular">
                            <input type="checkbox" id="scales" name="agreement" required>
                            <label for="agreement">Souhlasím s pravidly</label>
                        </div>
                        <div class="formular">
                            <input type="submit" value="Odeslat">
                        </div>
                        </form>
                    
                </div>
                <div class="sloupec">
                    <h2 class="ikttext">Přepínač:</h2>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                </div>
                </div>

                <p class="obsah"><a href="/"><i class="fa-solid fa-house"></i> Zpět domů</a></p>
            </div>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p class="footertext">Copyright &copy; <?php echo date("Y"); ?> &nbsp;|&nbsp; Coded with &hearts; by SandTheNeeT_ &nbsp;|&nbsp; Source code is available on <a class="link" href="https://github.com/SandTheNeeT/sedlak.tech" target="_blank">GitHub</a></p>
        </div>
    </body>

</html>
