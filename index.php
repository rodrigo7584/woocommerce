<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cojiba</title>
</head>

<body>
  <?php if(have_posts( )){ while(have_posts( )){ the_post(); ?>
  <p>tem pagina</p>
  <?php }} else { ?>
  <p>Página não encontrada</p>
  <?php }; ?>
</body>

</html>