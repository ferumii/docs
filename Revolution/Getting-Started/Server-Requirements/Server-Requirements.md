# Требования к серверу

### Содержание
* [Проблемы с MySQL 5.0.51](./MySQL-5.0.51-Issues.md)

### Поддерживаемые операционные системы

* Linux x86, x86-64
* Mac OS X
* Windows XP, Server

### Поддерживаемые Web-серверы

* Apache 1.3.x - 2.2.x (по умолчанию используется htaccess для дружественных URL)
* IIS 6.0
* lighttpd (Установка и инструкция по использованию дружественных URL)
* Zeus

### PHP совместимость
* 5.1.2 и выше (исключая 5.1.6 and 5.2.0)
* Требуются расширения:
    * zlib
    * JSON (или PECL библиотека)
    * mod_rewrite (для дружественных URL/.htaccess)
    * GD lib (нужно для captcha и менеджера файлов)
    * PDO, конкретно pdo_mysql (для xPDO)
    * ImageMagick (для фотоминиатюр/thumbnails)
    * SimpleXML
    * cURL (для Package Management)
* safe_mode off (выключен)
* register_globals off (выключены)
* magic_quotes_gpc off (выключены)
* PHP memory_limit 24MB или больше, в зависимости от вашего сервера

### Параметры конфигурации PHP при сборке

```bash
./configure --with-apxs2=/usr/local/bin/apxs --with-mysql --prefix=/usr/local --with-pdo-mysql --with-zlib
```

### Требования к MySQL базе данных

* 4.1.20 или новее, со следующими привилегиями:
    *SELECT, INSERT, UPDATE, DELETE необходимы для нормальной работы
    * CREATE, ALTER, INDEX, DROP необхожимы для установки/обновлений и потенциально для других плагинов и модулей
    * CREATE TEMPORARY TABLES может использоваться сторонними дополнениями
* __не работает с версией 5.0.51 (Почему не работает с 5.0.51?)__
* механизм хранения данных InnoDB
* механизм хранения данных MyISAM

### Поддерживаемые браузеры (для работы интерфейса админки)

* Mozilla Firefox 3.0 и выше
* Apple Safari 3.1.2 и выше
* Microsoft Internet Explorer 8 и выше

> #### Attention
> IE7 не поддерживается полностью на текущий момент, но возможно будет в следующих версиях. Вы можете свободно пользоваться, но местами могут возникать ошибки. Безупречная работа в IE7 не гарантируется.
