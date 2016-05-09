<?php

require 'vendor/autoload.php';
require 'Data.php';

$dto = new Data;
$arr = new Appkr\ValueArray(new Data);
var_dump($dto->a);
var_dump($arr['a']);