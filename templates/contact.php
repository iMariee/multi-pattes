<?php
/**
 * Template Name: Contact
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

<h1>Contact</h1>

<?php the_field('email'); ?>

<h2>Coordonnées GPS</h2>
<?php 
    $coordinates = get_field('coordinates');
    if ($coordinates) {
        echo '<p>Latitude : ' . esc_html($coordinates['latitude']) . '</p>';
        echo '<p>Longitude : ' . esc_html($coordinates['longitude']) . '</p>';
    } else {
        echo '<p>Les coordonnées GPS ne sont pas disponibles.</p>';
    }
?>

<hr>
<h2>Logo</h2>
<?php 
$image = get_field('image'); 
?>
<img src="<?php echo ($image ['sizes']['custom_size']);?>" height="<?php echo ($image ['sizes']['custom_size-height']);?>" width="<?php echo ($image ['sizes']['custom_size-width']);?>" alt='<?php echo ($image ['alt']);?>'>
    <pre><?php var_dump($image); ?></pre>

</body>
</html>
