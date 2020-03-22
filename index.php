<?php
require dirname(__FILE__).'/src/Toolkit.php';

use Tools\Toolkit as Tool;

// Prints all the numbers from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    echo (new Tool())->replaceMeIf($i)."\n";
}