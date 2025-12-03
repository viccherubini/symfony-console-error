# Symfony Console Error With Profiling Enabled
This repository demonstrates the error outlined in [symfony/symfony#62626](https://github.com/symfony/symfony/issues/62626).

The repository was created with the following command:

```bash
symfony new --webapp --version="7.4.x" symfony-console-error
```

From there, `src/Command/HelloWorldCommand.php` was created. Running it without the `--profile` option operates as you would expect:

```bash
php bin/console app:hello:world Vic

Hello World
===========

Hello, Vic!
```

Running it with the `--profile` option causes a `TypeError` to be thrown:

<img src="https://raw.githubusercontent.com/viccherubini/symfony-console-error/refs/heads/master/assets/images/console-error.png">

## Environment Details
- Apple M4 Max
- macOS 15.7.2 (24G325)
- PHP 8.4.15
- Symfony 7.4.0
- symfony-cli 5.16.1

## PHP Version
```
PHP 8.4.15 (cli) (built: Nov 18 2025 17:26:05) (NTS)
Copyright (c) The PHP Group
Built by Homebrew
Zend Engine v4.4.15, Copyright (c) Zend Technologies
    with Zend OPcache v8.4.15, Copyright (c), by Zend Technologies
```

## PHP Extensions
```
[PHP Modules]
bcmath
bz2
calendar
Core
ctype
curl
date
dba
dom
exif
FFI
fileinfo
filter
ftp
gd
gettext
gmp
hash
iconv
imagick
intl
json
ldap
libxml
mbstring
mysqli
mysqlnd
odbc
openssl
pcntl
pcre
PDO
pdo_dblib
pdo_mysql
PDO_ODBC
pdo_pgsql
pdo_sqlite
pgsql
Phar
posix
random
readline
redis
Reflection
session
shmop
SimpleXML
snmp
soap
sockets
sodium
SPL
sqlite3
standard
sysvmsg
sysvsem
sysvshm
tidy
tokenizer
xml
xmlreader
xmlwriter
xsl
Zend OPcache
zip
zlib

[Zend Modules]
Zend OPcache
```
