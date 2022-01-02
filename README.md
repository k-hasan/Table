## Ans One
# Create a file named “ main.php" in your directory.
### Run this command in your root directory terminal CMD: composer require khayrulhasan/table
``` php

<?php 
# file name : main.php
use Khayrulhasan\Table\View;
use Khayrulhasan\Table\ViewList;

require_once "vendor/autoload.php";

/*
 *  data(s)
 */
$data = new ViewList();
$data[] = new View(1, 'Selim Reza', 'me@selimreza.com');
$data[] = new View(2, 'Half Way', 'selimppc@gmail.com');

/*
 * final output
 */
print $data;
