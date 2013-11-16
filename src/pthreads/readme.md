# pthreads Examples

Needs pecl module "pthreads" which can only compile for thread safe php versions.

## Download

    pecl install pthreads

If you have a non TS php you must install a thread safe php!
You can download the pecl module manually:

    wget http://pecl.php.net/get/pthreads-0.0.45.tgz
    tar xfz pthreads-0.0.45.tgz

    # with your php versions's phpize
    cd pthreads-0.0.45
    phpize
    ./configure --with-php-config=<path-to-php-config>
    make
    make install

## Compile with php-env

    PHP_BUILD_ZTS_ENABLE=on php-build <version> <your-php-build-folder>/<version>