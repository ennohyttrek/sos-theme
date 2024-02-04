    <footer class="main-footer">
        <div class="container">
            <nav class="nav-bar footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>

            <div class="credentials">
                <p>© 2024 John Jones</p>
                <p>Version: 2.2</p>
                <p>Design & Programming: Enno Hyttrek, <a href="https://ennohyttrek.de">ennohyttrek.de</a></p>
            </div>

        </div>
    </footer>
    <nav class="nav-overlay mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>
    <?php wp_footer() ?>
    </body>

    </html>
