<?php

include('MemcacheSASL.php');

$m = new MemcacheSASL;
$m->addServer('127.0.0.1', '11211');
$m->setOption(MemcacheSASL::OPT_RECV_TIMEOUT, 1000000);
$m->setSaslAuthData('username', 'password');
var_dump($m->add('test', '123'));
$m->delete('test');

