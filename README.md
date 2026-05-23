# ДЗ №3 — Роутинг: экшн `sayBye`

Блог на самописном MVC-фреймворке (по лекции к теме 3).

## Что сделано по заданию

В контроллер `MainController` добавлен новый экшн **`sayBye(string $name)`**, который выводит «Пока, $name». Для него добавлен роут **`/bye/$name`**.

- Контроллер: `src/MyProject/Controllers/MainController.php` → метод `sayBye()`
- Роут: `src/routes.php` → `'~^bye/(.+)$~' => [MainController::class, 'sayBye']`

Рядом для сравнения уже есть `sayHello(string $name)` («Привет, $name») и роут `/hello/$name`.

Проверка: открыть `/bye/Иван` — на странице будет «Пока, Иван».

## Структура проекта

```
www/            — публичная папка (корень сайта)
  index.php     — фронт-контроллер (роутинг)
  .htaccess     — правила перенаправления для Apache
  router.php    — роутер для встроенного PHP-сервера
  styles/       — стили
src/
  routes.php    — таблица маршрутов
  settings.php  — настройки БД
  MyProject/    — классы фреймворка (Controllers, Models, Services, View, Exceptions)
templates/      — шаблоны (header, footer, страницы)
database.sql    — дамп БД (таблицы users и articles)
```

## Как запустить

**Вариант 1 — XAMPP / OpenServer / хостинг (Apache + PHP + MySQL):**
1. Импортировать `database.sql` в phpMyAdmin (создаст БД `blog`).
2. При необходимости поправить логин/пароль БД в `src/settings.php`.
3. Корнем сайта (DocumentRoot) указать папку `www`.
4. Открыть сайт в браузере.

**Вариант 2 — встроенный сервер PHP (быстрая локальная проверка):**
```bash
php -S localhost:8000 -t www www/router.php
```
Затем открыть http://localhost:8000

## Адреса для проверки
- `/` — список статей
- `/articles/1` — одна статья
- `/hello/Имя` — «Привет, Имя»
- `/bye/Имя` — «Пока, Имя»  ← задание ДЗ3
