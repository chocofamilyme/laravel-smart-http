# HTTP клиент Laravel для общения между сервисами
На основе библиотеки [Smart-Http](https://github.com/chocofamilyme/smart-http)

### Требования
- PHP 7.4+
- chocofamilyme/smart-http ^1.0
- laravel ^8.2

### Установка
```bash
composer require chocofamilyme/laravel-smart-http
```

### Публикация настроек
```bash
php artisan vendor:publish --provider="Chocofamily\Laravel\SmartHttp\Providers\SmartHttpServiceProvider"
```

### Настройка
Файл конфигурации находится config/smarthttp.php

Подробная документация по настройкам [Smart-Http](https://github.com/chocofamilyme/smart-http#%D0%BF%D0%B0%D1%80%D0%BC%D0%B5%D1%82%D1%80%D1%8B-%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D1%8B%D0%B5-%D1%81%D0%BE%D0%B4%D0%B5%D1%80%D0%B6%D0%B8%D1%82-%D0%BE%D0%B1%D1%8A%D0%B5%D0%BA%D1%82-config)

### Использование

```php
app('SmartRequest')->send('POST', '/resource', [
    'json' => [
        'name' => 'test'
    ]   
]);
```

Или используя фасады:

```php
SmartRequest::send('POST', '/resource', [
    'json' => [
        'name' => 'test'
    ]   
]);
```


