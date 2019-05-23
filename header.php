
<?php
/**
*Jehaann Theme - Header

*@package wordpress
*@subpackage jehaann
*@since 1.0.0

*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|',true,'right') ?> <?php bloginfo(); ?></title>
    <link rel="icon" type="image/png" href="<?php echo RutaImagenes?>/Perfil-jehaann-manzanares.png" sizes="16x16">
    <!-- FUNCION PARA NOTIFICAR ENLACES DE BLOGS -->
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <!-- FUNCION PARA MOVER LA CAjA DE COMENTARIOS-->
    <?php if (is_single() && comments_open()) {
        wp_enqueue_script('comment-reply');
    }?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <i class="icon-menu burger-button" id="burger-menu"></i>
    <header class="menu" id="navbar">
        <a href="<?php echo home_url(); ?>"><h1 class="logo"></h1></a>
        <nav class="container-menu fadeIn">
             <ul>
                 <li><a href="#about-me">Sobre mi</a></li>
                 <li><a href="#portfolio">Portfolio</a></li>
                 <li><a href="https://jehaann-manzanares.com/blog/">Blog</a></li>
                 <li><a href="#contact"><button class="btn">Contactar</button></a></li>
                
             </ul>
        </nav>
    </header>
