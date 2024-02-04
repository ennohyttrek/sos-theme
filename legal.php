<!--Version: 2.6 -->
<?php 
/* Template Name: Legal Page */
?>

<!--Version: 2.6 -->
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <div class="wrapper top-wrapper">

        <nav class="burger-icon">
            <i id="menu-toggle" class="fas fa-bars"></i>
        </nav>

        <nav class="nav-bar main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu-legal' ) ); ?>
        </nav>

        <main>

            <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
endif;
?>

        </main>
    </div>
    <!--.top-wrapper-->

 <footer class="main-footer">
        <div class="container">
            <nav class="nav-bar footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>

            <div class="credentials">
                <p>© 2024 John Jones</p>
                <p>Version: 2.6</p>
                <p>Design & Programming: Enno Hyttrek, <a href="https://ennohyttrek.de">ennohyttrek.de</a></p>
            </div>

        </div>
    </footer>
    <nav  id="overlay-menu" class="nav-overlay mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu-legal' ) ); ?>
    </nav>
    <?php wp_footer() ?>
    
    <script>
        // Funktion zum Öffnen und Schließen des Overlay-Menüs
        // Sollte beizeiten in ein scripts.js Dokument ausgelagert werden.
        function toggleMenu() {
            var menu = document.getElementById('overlay-menu');
            menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
        }

        // Menü-Toggle-Button auswählen
        var menuToggle = document.getElementById('menu-toggle');

        // Klick-Ereignis auf den Menü-Toggle-Button hinzufügen
        menuToggle.addEventListener('click', toggleMenu);

        // Klick-Ereignis auf Menüpunkte hinzufügen, um das Overlay-Menü zu schließen
        var menuItems = document.querySelectorAll('#overlay-menu ul li a');
        menuItems.forEach(function(item) {
            item.addEventListener('click', toggleMenu);
        });

    </script>
    </body>

</html>

