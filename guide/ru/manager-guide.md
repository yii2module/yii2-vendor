Руководство
===

## Генератор

Генератор пакетов запускается так:

```
php yii vendor/generator
```

Генерирует:

* конфигурация пакета
* README
* Руководство
* Лицензия
* Тесты
* Домен
* Модули

## Инсталлятор

Шаги установки пакета:

* Добавляет алиасы пакета из `composer.json` (если пакет еще не установлен через composer)
* Конфигурирует домен
* Конфигурирует модули (backend, frontend, console, api)
* Добавляет необходимые полномочия в RBAC

Для установки можно использовать команду:

```
php yii vendor/install
```