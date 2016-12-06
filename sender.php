<?php

require( __DIR__ . '/Elephant/Client.php');

use ElephantIO\Client as ElephantIOClient;

$elephant = new ElephantIOClient('http://localhost:8080', 'socket.io', 1, false, true, true);

$elephant->init();
$elephant->emit('message', 'foo');
$elephant->close();