<?php

/**
 * Displays the index section of the theme.
 *
 * @package Theme Emei Leopoldina
 * @subpackage Emei Leopoldina
 * @since Emei Leopoldina 1.0
 */
?>
<style>
    html {
   margin-top: 0px !important; 
    }
    .image_internal {
        position: relative;
        width: 100%;
    }
    .image_internal img {
        width: 100%;
        height: 500px;
        object-fit: cover;
    }
    .image_internal::before{
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: #0000006b;
    }

    .image_internal h2 {
        position: absolute;
        top: 30%;
        left: 10%;
        right: 0;
        bottom: 0;
        color: yellow;
        font-weight: bold;
        font-size: 45px
    }
</style>
<?php include('header_internal.php') ?>

<div class='image_internal'>
    <img src="<?php the_post_thumbnail_url(); ?>" />
    <h2><?php the_title(); ?></h2>
</div>
<main>
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>