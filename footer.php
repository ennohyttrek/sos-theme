    <footer class="main-footer">
        <div class="container">
            <nav class="nav-bar footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>

            <div class="credentials">
                <p>© 2024 John Jones</p>
                <p>Version: 2.4</p>
                <p>Design & Programming: Enno Hyttrek, <a href="https://ennohyttrek.de">ennohyttrek.de</a></p>
            </div>

        </div>
    </footer>
    <nav  id="overlay-menu" class="nav-overlay mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
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
