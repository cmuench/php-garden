<?php

if (!extension_loaded('pcntl')) {
    die('You need pcntl extension to run this');
}

echo 'Start';

$pid = pcntl_fork();
if ($pid) {
    echo 'Parent: ' . posix_getpid() . PHP_EOL;
    for ($i = 0; $i < 10000; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Finished:' . posix_getpid() . PHP_EOL;
} else {
    echo 'Child: ' . posix_getpid() . PHP_EOL;
    for ($i = 10000; $i > 0; $i--) {
        echo $i . PHP_EOL;
    }
    echo 'Finished:' . posix_getpid() . PHP_EOL;
}