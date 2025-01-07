<?php
/**
    * Template Name: Contact
*/
?>
Contact html
<?php the_field(selector:"email"); ?>
<h2>Coordonées GPS</h2>
<?php 
    $coordinates = get_field( selector: 'coordinates');
?>
<p>Lalitutude : <?php echo ($coordinates['latitude'])?></p>
<p>Longitude : <?php echo ($coordinates['longitude'])?></p>

<hr>
<h2>Logo</h2>
<?php $image = get_field( selector: 'image'); ?>
<?php var_dump($image); ?>