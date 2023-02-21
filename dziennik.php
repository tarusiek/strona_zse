<?php include("path.php") ?>
<?php session_start()?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dziennik - Zespół Szkół Elektronicznych im. Stanisława Staszica w Zduńskiej Woli</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media_query.css">
        <link rel="stylesheet" href="assets/css/mobile.css">
        <script src="https://kit.fontawesome.com/c42d1cc7c1.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="assets/scripts/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#000000">
    </head>
    <body>
        <?php //include(ROOT_PATH . "/app/includes/preloader.php"); ?>
        <?php include(ROOT_PATH . "/app/includes/navbar.php"); ?>
        <?php include(ROOT_PATH . "/app/includes/under_navbar.php"); ?>
        <?php include(ROOT_PATH . "/app/includes/menu_hamburger.php"); ?>

        <div class="content_box_post">
            <h1>DZIENNIK</h1>
            <p>
                Witryna została przygotowana specjalnie dla uczniów i ich rodziców. Umożliwia wzajemne przesyłanie komunikatów między nauczycielami a rodzicami oraz przeglądanie informacji o ocenach, frekwencji, uwagach i osiągnięciach, tematach lekcji oraz zadaniach czekających uczniów w przyszłości.
            </p>

            <span class="dziennik_logowanie_p_under">Aby przejść do dziennika należy kliknąć w poniższy przycisk:</span>

            <div class="custom_button button_5">
                <span>
                    <a href="https://uonetplus.vulcan.net.pl/powiatzdunskowolski/" target="_blank">Przejdź do dziennika</a>
                </span>
    
            </div>


        </div>

        <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    </body>
</html>
