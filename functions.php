<?php
/*FUNÇÃO QUE DIZ AO WORDPRESS QUE O TEMA OFERECE SUPORTE AO WOOCOMMERCE */
function cojiba_add_woocommerce_support(){
  add_theme_support('woocommerce');
};
add_action('after_setup_theme', 'cojiba_add_woocommerce_support');

/*FUNÇÃO QUE ADICIONA O ARQUIVO CSS AO TEMA*/
function cojiba_css(){
  wp_register_style('cojiba-style', get_template_directory_uri() . '/style.css', [] ,'1.0.0', false);
  wp_enqueue_style('cojiba-style');

  wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap',[],'1.0.0',false);
  wp_enqueue_style('google-fonts');
};
add_action('wp_enqueue_scripts', 'cojiba_css');

/*FUNÇÃO PARA HABILITAR SUPORTE A LOGO CUSTOMIZADA*/
function cojiba_theme_suports() {
  add_theme_support('custom-logo', array(
      'height'      => 45, // Altura máxima do logotipo
      'width'       => 185, // Largura máxima do logotipo
      'flex-height' => true,
      'flex-width'  => true,
      'unlink-homepage-logo' => false, 
  ));
}
add_action('after_setup_theme', 'cojiba_theme_suports');

register_nav_menus(
  array(
    'cojiba_categorias'=> 'Menu de categorias'
  )
);


// function lokal_seguros_config(){
//   register_nav_menus(
//   array(
//     'lokal_seguros_main_menu' => 'Menu Topo'
//     )
//   );
//   add_theme_support('post-thumbnails');
// }
// add_action('after_setup_theme','lokal_seguros_config',0);