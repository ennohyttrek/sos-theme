<!--Version: 2.6 -->
<?php get_header(); ?>


<header class="main-header has-hero" style="background-image: url(<?php the_field( 'header_image', 7 ); ?>)">
    <div class="container">
        <h1><?php the_field( 'my_site_title', 7 ); ?></h1>

        <div class="teaser">
            <div>
                <p><?php the_field( 'teaser_line_1', 7 ); ?></p>
            </div>
            <div>
                <p><?php the_field( 'teaser_line_2', 7 ); ?></p>
            </div>
            <div>
                <a href="#videos">
                    <p><?php the_field( 'cta_1', 7 ); ?></p>
                </a>
            </div>
            <div>
                <a href="#current">
                    <p><?php the_field( 'cta_2', 7 ); ?></p>
                </a>
            </div>
        </div>

        <div class="header-icons">

            <div class="social">
                <i class="fab fa-facebook-f"></i>
            </div>
            
                        <div class="social">
                <a href="https://vimeo.com/sameoldsong" target="_blank"><i class="fab fa-vimeo-v"></i></a>
            </div>

            <div class="icon-gefoerdert">
                <img src="<?php the_field( 'logo_1', 7 ); ?>">

            </div>
        </div>
    </div>
</header>



<main>

    <!-- *************
    SECTION 1 CURRENT EVENT 
    ************* -->
    <section id="current" class="section-01">

        <div class="container">
            <h2><?php the_field( 'section_01_heading', 7 ); ?></h2>


            <!--Custom loop to display current event -->

            <?php
$args = array(
    'post_type' => 'event',
    'posts_per_page' => 1
);
$the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <article class="upcoming-event">
                <div class="event-label">
                    <img src="<?php the_field( 'event_label' ); ?>" />
                </div>
                <div class="event-meta">
                    <p><span>Episode <?php the_title(); ?></span> <?php the_field( 'event_date' ); ?></p>
                    <p><?php the_field( 'song' ); ?></p>
                    <p><?php the_field( 'event_venue' ); ?></p>
                </div>
            </article>
            <?php endwhile;
            wp_reset_postdata();
           endif; ?>


        </div>
    </section>


    <!-- *************
    SECTION 2 SHOW 
    ************* -->

    <section id="show" class="section-02a has-hero" style="background-image: url(<?php the_field( 'section_02_hero_image', 7 ); ?>)">
        <div class="container">
            <h2><?php the_field( 'section_02_heading', 7 ); ?></h2>
        </div>
    </section>

    <section class="section-02b body-text">
        <div class="container">
            <?php the_field( 'section_02_text', 7 ); ?>
        </div>
    </section>


    <!-- *************
    SECTION 3 ABOUT 
    ************* -->

    <section id="about" class="section-03a has-hero" style="background-image: url(<?php the_field( 'section_03_hero_image', 7 ); ?>)">
        <div class="container">
            <h2><?php the_field( 'section_03_heading', 7 ); ?></h2>
        </div>
    </section>

    <section class="section-03b body-text">
        <div class="container">
            <?php the_field( 'section_03_text', 7 ); ?>
        </div>
    </section>


    <!-- *************
    SECTION 4 VIDEOS 
    ************* -->

    <section id="videos" class="section-04">
        <div class="container body-text">

            <h2><?php the_field( 'section_04_heading', 7 ); ?></h2>

            <?php the_field( 'section_04_text', 7 ); ?>
            <div class="embed-container">
                <?php the_field( 'section_04_video', 7 ); ?>
            </div>
        </div>
    </section>


    <!-- *************
    SECTION 5 ARCIVE (PAST EVENTS) 
    ************* -->

    <section id="archive" class="section-05a has-hero" style="background-image: url(<?php the_field( 'section_05_hero_image', 7 ); ?>)">
        <div class="container">
            <h2><?php the_field( 'section_05_heading', 7 ); ?></h2>
        </div>
    </section>

    <section class="section-05b">
        <div class="container body-text">
            <?php the_field( 'section_05_text', 7 ); ?>
        </div>
        <div class="container flex-box-3">

            <!--Custom loop to display past events -->
            <?php
$args = array(
    'post_type' => 'event',
    'posts_per_page' => 0,
    'offset' => 1
);
$the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <article class="past-event">
                <p>Episode <?php the_title(); ?></p>
                <p><?php the_field( 'event_date' ); ?></p>
                <p><?php the_field( 'song' ); ?></p>
                <p><?php the_field( 'event_venue' ); ?></p>
            </article>
            <?php endwhile;
            wp_reset_postdata();
           endif; ?>
        </div>
    </section>


    <!-- *************
    SECTION 6 ARTISTS 
    ************* -->

    <section id="artists" class="section-06a has-hero" style="background-image: url(<?php the_field( 'section_06_hero_image', 7 ); ?>)">
        <div class="container">
            <h2><?php the_field( 'section_06_heading', 7 ); ?></h2>
        </div>
    </section>

    <section class="section-06b body-text">
        <div class="container">
            <?php the_field( 'section_06_text', 7 ); ?>
        </div>
        <div class="container artists">
            <?php the_field( 'section_06_artists', 7 ); ?>
        </div>
    </section>


    <!-- *************
    SECTION 7 SONGS 
    ************* -->

    <section id="songs" class="section-07a has-hero" style="background-image: url(<?php the_field( 'section_07_hero_image', 7 ); ?>)">
        <div class="container">
            <h2><?php the_field( 'section_07_heading', 7 ); ?></h2>
        </div>
    </section>

    <section class="section-07b body-text">
        <div class="container">
            <?php the_field( 'section_07_text', 7 ); ?>
        </div>
    </section>



</main>
</div>
<!--.top-wrapper-->

<?php get_footer(); ?>
