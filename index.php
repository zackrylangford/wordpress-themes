<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <p><?php bloginfo( 'description' ); ?></p>
</header>

<!-- Main content area -->
<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo 'No content found';
    endif;
    ?>
</main>

<!-- Footer -->
<footer>
    <p>© <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>



