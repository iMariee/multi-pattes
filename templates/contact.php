<?php
/**
    * Template Name: Contact
*/
?>
Contact html
<?php the_field(selector:"email"); ?>
<h2>Coordonées GPS</h2>
<?php 
    $coordinates = get_field( selector: '$coordinates');
?>
<p>Lalitutude : <?php echo ($coordinates['latitude'])?></p>
<p>Longitude : <?php echo ($coordinates['longitude'])?></p>

<?php var_dump($coordinates); ?>