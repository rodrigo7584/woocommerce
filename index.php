<?php get_header(); ?>
<pre>
  <?php
  $categories = get_categories(['taxonomy' => 'product_cat','parent'=>0]) ;

  function filter_child_category($category){
    $childs = get_categories(['taxonomy' => 'product_cat','parent'=>$category]);
    $formatted_child = [];
    foreach($childs as $child){
      $formatted_child[]=[
        'child_name' => $child->cat_name,
        'child_link' => esc_url(get_term_link($child->cat_ID, 'product_cat'))
      ];
    }
    return $formatted_child;
  }

  function format_categories($categories){
    $formatted_categories = [];
    foreach($categories as $category){
      $formatted_categories[] =[
        'id' => $category->cat_ID,
        'name' => $category->cat_name,
        'link' => esc_url(get_term_link($category->cat_ID, 'product_cat')),
        'filha' => filter_child_category($category->cat_ID),
      ];
    }
    return $formatted_categories;
  }  
  
  print_r($categories);
  print_r(format_categories($categories));
  ?>
  
  
</pre>
<?php 
  $categorias = format_categories($categories);
  foreach($categorias as $categoria){
?>  
  <ul>
    <li>
      <a href="<?php echo $categoria['link']?>">  
        <?php echo $categoria['name']?>
      </a>
      <ul>
      <?php
      foreach($categoria['filha'] as $filha){
      ?>
        <li>
          <a href="<?php echo $filha['child_link']?>">
            <?php echo $filha['child_name']?>
          </a>
        </li>  
      <?php
      }
      ?>  
      </ul>
    </li>
  </ul>
<?php 
  }
?>

<?php if(have_posts( )){ while(have_posts( )){ the_post(); ?>
<h1><?php the_title();?></h1>
<main>
  <?php the_content();?>
</main>
<?php }} else { ?>
<p>Página não encontrada</p>
<?php }; ?>
<?php get_footer(); ?>