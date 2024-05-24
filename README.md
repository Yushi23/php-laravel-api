### Тестовое API на фреймворке Laravel

### Основное

### Использование
Выполните следующие команды:
1. Склонируйте репозиторий из git: "git clone https://github.com/Yushi23/php-laravel-api.git";
2. Перейдите в директорию php-laravel-api: "cd php-laravel-api";
3. Установите зависимости: "composer install";
4. Создайте файл .env на основе файла .env.example: "cp .env.example .env";
5. Внесите изменения в файл .env;
6. Сгенерируйте ключ приложения: "php artisan key:generate";
7. Внесите изменения в файл .env.testing;
8. Накатите миграции: "php artisan migrate";
9. Запустите веб-сервер: "php artisan serve";
10. Запустите тесты: "php artisan test".

### Реализованы следующие сущности
- Сотрудники
- Транзакции

#### Создание сотрудника

Параметры:

- email
- password

`Путь: POST /api/users`

#### Принятие транзакции

Параметры:

- employee_id
- hours

`Путь: POST /api/transactions`

#### Вывод суммы

`Путь: GET /api/transactions`

#### Выплаты всей накопившейся суммы

`Путь: DELETE /api/transactions`
