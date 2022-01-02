# Go to your directory and create a file as main.php
### Run on your terminal ## composer require khayrulhasan/table
``` php
# file name : main.php
<?php 

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
