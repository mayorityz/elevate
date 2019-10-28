<?php
require "app/config/config.php";
function my_autoload($class)
{
    require "app/libs/$class.php";
}

spl_autoload_register('my_autoload');

$app = new Bootstrap;