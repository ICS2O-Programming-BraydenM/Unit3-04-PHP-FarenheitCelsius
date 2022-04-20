<?php
// get the degrees in Fahrenheit
$fahrenheit = floatval($_POST['degrees']);

// calculate the degrees in Celsius
$celsius = 5 / 9 * ($fahrenheit - 32);
$celsius_rounded = number_format($celsius, 2);

?>

The degrees in Celsius would be <?php echo "$celsius_rounded"; ?> <sup>°</sup>.