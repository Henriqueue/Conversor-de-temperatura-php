<?php
    $celsius = $_POST["celsius"] ;
    $fahrenheit = ($celsius * 1.8) + 32;
    echo ($celsius) ? "<p>$celsius °C é igual a $fahrenheit °F</p>" : "";
