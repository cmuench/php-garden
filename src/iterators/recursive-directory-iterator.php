<?php

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator('/etc/php5')
);

foreach ($files as $file) {
    /* @var $file \SplFileInfo */
    echo $file->getRealPath() . PHP_EOL;
}