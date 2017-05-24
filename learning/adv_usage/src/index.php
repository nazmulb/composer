<?php
require '/Users/nazmulbasher/.composer/vendor/autoload.php';

use Jenssegers\Date\Date;

Date::setLocale('bd');

echo Date::now()->format('l j F Y H:i:s'); // zondag 28 april 2013 21:58:16

echo Date::parse('-1 day')->diffForHumans(); // 1 dag geleden