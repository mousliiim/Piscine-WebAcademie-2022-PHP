<?php
function is_major($age){
    $legal = $age >= 18 ? "Majeur" : "Mineur";
    echo $legal;
}
