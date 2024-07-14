<?php

require_once __DIR__ . "/data/Class.php";

use Data\{Location, City, District, Province};

# $location = new Location(); Error, tidak bisa membuat object dari abstract class.
$city = new City();
$city->name = "Kabupaten Bandung";
var_dump($city);

$district = new District();
$district->name = "Cileunyi";
var_dump($district);

$province = new Province();
$province->name = "Jawa Barat";
var_dump($province);