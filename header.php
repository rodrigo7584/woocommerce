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
    $cart_count =  WC()->cart->get_cart_contents_count();
    if($cart_count){
      $cart_items_count = $cart_count;
    }else{
      $cart_items_count = 0;
    };
  ?>
  <section class="header-top">
    <div class="container">
      <div class="row">
          <a href="#" class="header-top-link">ofertas no whatsapp</a>
          <a href="#" class="header-top-link">atendimento</a>
      </div>
    </div>       
  </section>
  <header class="header">
    <div class="container">
      <div class="row">
        <a class="header-logo" href="/">
          <?php echo $logo_image; ?>
        </a>
        <div class="search">
          <form action="<?php bloginfo('url')?>/loja/" method="get">
            <input type="text" name="s" id="s" placeholder="Buscar produtos" value="<?php the_search_query();?>">
            <input type="text" name="post_type" value="product" class="hidden"/>
            <button type="submit" id="searchbutton" >
              <img src="<?php echo get_template_directory_uri()?>/img/magnifying-glass-solid.svg" alt="Buscar">
            </button>
          </form>
        </div>
        <nav class="conta">
          <a href="/minha-conta" class="minha-conta">
            Minha Conta
          </a>
          <a href="/carrinho" class="carrinho">
            Carrinho
            <span>
              <?php echo $cart_items_count;?>
            </span>
          </a>
        </nav>
      </div>
    </div>

 
  </header>