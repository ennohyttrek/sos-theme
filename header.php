<!--Version: 2.1 -->
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
        <i class="fas fa-bars"></i>
        </nav>

        <nav class="nav-bar main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>