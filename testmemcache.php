<?php

$mem = new Memcache;
$mem->addServer('localhost',11211);
$mem->set('key','I am Memcache');
$mem->get('key');
echo $mem->get('key');

?>