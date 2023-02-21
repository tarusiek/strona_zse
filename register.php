<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Zespół Szkół Elektronicznych im. Stanisława Staszica w Zduńskiej Woli</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://kit.fontawesome.com/c42d1cc7c1.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="assets/scripts/script.js" defer></script>
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

        <h2 id="register_form_h2">Rejestracja</h2>
        <div class="auth_content">
            <form action="register.php" method="post">
                <?php include(ROOT_PATH . "/app/helpers/form_errors.php"); ?>

                <div>
                    <label>Login:</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label>Hasło</label>
                    <input type="password" name="password" value="<?php echo $password; ?>">
                </div>
                <div>
                    <label>Powtórz hasło</label>
                    <input type="password" name="v_password" value="<?php echo $v_password; ?>">
                </div>
                <div>
                    <label>Identyfikator:</label>
                    <input type="text" name="tag" value="<?php echo $tag; ?>">
                </div>
                <button type="submit" name="register_button" class="register_button">Zarejestruj</button>
                <a href="login.php">Albo się zaloguj</a>
            </form>
            

        </div>
    </body>