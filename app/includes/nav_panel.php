<!-------------------------------------------------->
<!---------------------NAV_PAN---------------------->
<!-------------------------------------------------->
<nav class="navbar">
    <div class="center_navbar">
        <a href="#"><img src="assets/img/logoszkoly_white.png" alt="logo szkoły"></a>
        <ul>

        <?php if (isset($_SESSION['id'])): ?>
            <li>Witaj, <?php echo $_SESSION['username']; ?>.</li>
        <?php else: ?>
            <li></li>
        <?php endif; ?>

            <li class="slide_under_text"><a href="#">Panel</a></li>
            <li class="slide_under_text"><a href="https://www.zse-zdwola.pl/">Strona główna ZSE</a></li>
            <!--<li class="slide_under_text"><a href="http://test2.tarusiek.pl/login.php">Wyloguj</a></li>-->
            <!--<li class="slide_under_text"><a href="login.php">Wyloguj</a></li>-->
            <li class="slide_under_text"><a href="<?php echo BASE_URL_SERWER . 'logout.php' ?>">Wyloguj</a></li>

        </ul>
    </div>
</nav>

