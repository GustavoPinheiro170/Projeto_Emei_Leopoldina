<!DOCTYPE html>

<html <?php language_attributes(); ?>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



<header>
<?php wp_head(); ?>
    <div class='content' >
        <div class='row menu-bar'>
            <div class='col-md-12 navbar-fixed' style='padding-left:0px; padding-right:0px; width:100vw; max-width: 100vw; '>
                <nav class="navbar navbar-expand-lg navbar-light bg-gray">
                    <a class="navbar-brand" href="#"></a>
                <img src='<?php bloginfo('template_directory'); ?>/assets/img/Logosite.png'  width='90px'/>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse js-menu" id="navbarNav" style=' overflow:hidden;   justify-content: center;'>
                        <ul class='navbar-nav'>
                        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10"><a  style='color:blue;'      href="#" aria-current="page">Home</a></li>
                        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10"><a  style='color:#17bb1c;'   href="#quem-somos" aria-current="page">Quem Somos</a></li>
                        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10"><a  style='color:#1c5f01;'   href="#turmas" aria-current="page">Turmas</a></li>
                        <li id="menu-item-10"  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10"><a style='color:#ff6a00;'   href="#projetos" aria-current="page">Projetos</a></li>
                        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10"><a  style='color:#c7c20f;'   href="#espacos" aria-current="page">Espaços</a></li>
                        <li id="menu-item-10" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-10"><a  style='color:#ef00ff;'   href="#contato" aria-current="page">Contato</a></li>
                        </ul>
                   </div>    
                </nav>
            </div>
        </div>
    </div>
</header>



