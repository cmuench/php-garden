<?php

if (!extension_loaded('pcntl')) {
    die('You need pcntl extension to run this');
}

echo 'Start';

foreach (range(0, 10) as $fork) {
    $pid = pcntl_fork();
    if ($pid) {
        // do nothing
        echo 'Parent: ' . posix_getpid();
    } else {
        echo 'Child: ' . posix_getpid() . PHP_EOL;
        for ($i = 10; $i > 0; $i--) {
            echo $i . PHP_EOL;
        }
        echo 'Finished:' . posix_getpid() . PHP_EOL;
    }
}
