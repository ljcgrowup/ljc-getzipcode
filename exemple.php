<?php

require 'vendor/autoload.php';

use Ljcgrowup\SearchZipcode\SearchZipcode;

$sz = new SearchZipcode();
$sz->setBaseUrl('https://viacep.com.br/ws/');
$sz->setFormatData('json');

$zipcode = $sz->getAddressFromZipcode('63908185');

print_r($zipcode);