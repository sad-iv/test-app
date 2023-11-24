Запуск проекта
```php
docker compose up --build -d
```

Чтобы войти в любой из контейнеров, делаем следующее:
```php
docker exec -it <container_name> bash
docker exec -it test-app-php-fpm bash
```

Посмотреть запущенные контейнеры:
```php
docker ps
```

Остановить контейнеры:
```php
docker compose down
```

### Внутри контейнера
1. Установка Symfony в папку test-app:
```bash
composer create-project symfony/skeleton:"6.3.*" ../test-app   
```

2. Устанавка
- [The Symfony makerBundle](https://symfony.com/bundles/SymfonyMakerBundle/current/index.html)
```bash
composer require --dev symfony/maker-bundle
```
Debugging
- [Xdebug](https://xdebug.org/docs/install#pecl)
- [Configure Xdebug in PhpStorm](https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html)

Testing
- [The PHPUnit Testing Framework](https://symfony.com/doc/current/testing.html)
```bash
composer require --dev symfony/test-pack
```