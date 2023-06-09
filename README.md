# PHP + PDO примеры

- [Пример подключения к базе MySQL](connection.php)
- [Оператор SELECT](select.php)
- [Оператор INSERT](insert.php)
- [Оператор UPDATE](update.php)
- [Оператор DELETE](delete.php)

Готовая таблица с пользователями [тут](users.sql)

## Функция `dump()`

Если вы хотите воспользоваться функцией `dump()`, установите зависимости composer
с помощью команды:

```shell
composer install
```

А также раскомментируйте строчку:

```php
// require_once __DIR__ . '/vendor/autoload.php';
```