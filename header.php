<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name')?><?php wp_title('|');?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <!-- BLOCO DE CODIGO QUE BUSCA UMA CUSTOM LOGO 
  SE NÃO ENCONTRA ELE COLOCA O NOME DO PRODUTO EM UMA VARIAVEL -->
  <?php
  $custom_logo = get_theme_mod('custom_logo');

  $logo = wp_get_attachment_image_src($custom_logo, 'full');

  if (has_custom_logo()) {
      $logo_image ='<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
  } else {
      $logo_image ='<h1>' . get_bloginfo('name') . '</h1>';
  }
  ?>
  <?php 
    `<form action='`bloginfo('url')`/loja/' method='get'>
    </form>` 
  ?>


  <header class="header">
    <a href="/">
      <?php echo $logo_image; ?>
    </a>
    <div class="search">
      <?php get_product_search_form();?>
    </div>
  </header>