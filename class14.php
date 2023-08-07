<?php

//** User define function */
function first($num1, $num2) {
    echo $num1 * $num2;
}
first(40, 10);

echo '<br/>';
function second($num1, $num2) {
    return $num1 * $num2;
}
echo second(40, 15) + 600;

echo '<br/>';
function third($num1, $num2) {
    return $num1 * $num2;
}

echo third(20, 15) + 800;
echo '<br/>';
echo third(60, 15);
echo '<br/>';
echo third(50, 15);
echo '<br/>';
echo third(70, 15);

