<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Mon site internet</title>
</head>
<body>
  <header>
    <img src="./logo.png" alt="Mon logo">
    <ul>
      <li><a href="">Accueil</a></li>
      <li><a href="">Actualités</a></li>
      <li><a href="">À propos</a></li>
      <li><a href="">Contact</a></li>
    </ul>
  </header>
</body>
</html>

<?php echo esc_html( get_the_title() ); ?>
<?php echo esc_html( get_the_content() ); ?>