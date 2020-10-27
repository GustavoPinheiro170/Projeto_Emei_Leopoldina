<?php
/*
Template Name: Home Page
*/
get_header();
?>
<style>
    html{
        margin-top: 0px !important;
    }
</style>

<main>
    <!-- Inicio apresentação -->
    <div class='main_init js-animated'>
        <div class='row' style='margin-top: 20px'>
            <div class='col-sm-6'>
                <div class='container-box'>
                    <img src='https://i.pinimg.com/originals/b8/d8/a1/b8d8a1d69bbbf88da632ed6626bcd5af.png' />
                </div>
            </div>


            <div class='col-sm-6'>
                <div class='container-text'>
                    <h2>TITULO</h2>
                    <p>Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim apresentação -->

    <!-- Inicio quem somos -->
    <div class='quem_somos js-animated' id='quem-somos'>
        <h2>Quem Somos</h2>
        <div class='row'>
            <?php
            $args = array(
                'post_type' => 'quemsomos',
                'post_per_page' => '9'
            );
            $newArgs = new WP_Query($args);
            ?>
            <?php while ($newArgs->have_posts()) : $newArgs->the_post();    ?>
                <div class='col-sm-4'>
                    <img src='<?php the_post_thumbnail_url() ?>' />
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content() ?></p>
                </div>
            <?php wp_reset_query();
            endwhile ?>
        </div>
    </div>
    <!-- Fim quem somos -->

    <div class='container-turmas js-animated' id='turmas'>
        <h2 style='margin-bottom:50px'>Turmas</h2>
        <div class='row'>
            <?php
            $args = array(
                'post_type' => 'turmas',
                'post_per_page' => '8'
            );
            $newArgs = new WP_Query($args);
            ?>
            <?php while ($newArgs->have_posts()) : $newArgs->the_post();    ?>
                <div class='col-sm-3 columm-turmas' style='padding:10px'>
                    <img src='<?php the_post_thumbnail_url() ?>' />
                    <h2><?php the_title(); ?></h2>
                    <a href='<?php the_permalink() ?>'>Acessar</a>
                </div>
            <?php wp_reset_query();
            endwhile ?>
        </div>
    </div>


    <div class='container-projetos js-animated' id='projetos'>
        <h2>Projetos</h2>
        <div class='row internal'>
            <?php
            $argsProjeto = array(
                'post_type' => 'projetos',
                'post_per_page' => '6'
            );
            $newArgsProjeto = new WP_Query($argsProjeto);
            ?>
            <?php while ($newArgsProjeto->have_posts()) : $newArgsProjeto->the_post();    ?>
                <div class='col-sm-4 column-person'>
                    <a href='<?php the_permalink() ?>'>
                        <img src='<?php the_post_thumbnail_url() ?>' />
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </a>
                </div>
            <?php wp_reset_query();
            endwhile ?>
        </div>
    </div>

    <!-- Slide Inicial -->
    <?php include("components/slider.php") ?>
    <!-- Fim slide inicial -->
</main>



<?php get_footer(); ?>