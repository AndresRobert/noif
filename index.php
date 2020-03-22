<?php
require dirname(__FILE__).'/src/Toolkit.php';

use Tools\Toolkit as Tool;

for ($i = 1; $i <= 100; $i++) {
    echo (new Tool())->replaceMeIf($i)."\n";
}