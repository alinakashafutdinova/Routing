# Блог — Домашнее задание №3

Курсовая работа по дисциплине «Серверная веб-разработка», блок 3 — собственный
backend-фреймворк на PHP с маршрутизацией.

## Что нового в ДЗ3

**Добавлен новый экшн `sayBye($name)` по аналогии с `sayHello($name)`.** В таблицу
маршрутов добавлен путь `/bye/<имя>`, который вызывает этот экшн и отдаёт
красиво оформленную страницу прощания.

Изменения относительно базового кода лекции:

- `src/routes.php` — добавлена строка с маршрутом `/bye/(.+)`;
- `src/MyProject/Controllers/MainController.php` — добавлен метод `sayBye()`;
- `templates/main/bye.php` — шаблон страницы прощания.

## Структура проекта

```
blog-dz3/
├── index.php             # фронт-контроллер
├── .htaccess             # mod_rewrite → index.php?route=...
├── router.php            # для встроенного PHP-сервера
├── styles/styles.css
├── database.sql
├── src/
│   ├── .htaccess         # запрет прямого доступа к коду
│   ├── routes.php        # таблица маршрутов
│   ├── settings.php      # настройки БД
│   └── MyProject/
│       ├── Controllers/  # MainController, ArticlesController
│       ├── Models/       # ActiveRecordEntity, Article, User
│       ├── Services/Db.php
│       ├── View/View.php
│       └── Exceptions/
└── templates/
    ├── .htaccess         # запрет прямого доступа
    ├── header.php, footer.php
    ├── main/             # main.php (список), hello.php, bye.php
    ├── articles/view.php
    └── errors/           # 404.php, 500.php
```

## Запуск

**Apache (XAMPP / OpenServer / хостинг):**
1. Импортируйте `database.sql` в phpMyAdmin (создаст БД `blog`).
2. При необходимости поправьте логин/пароль БД в `src/settings.php`.
3. Положите содержимое проекта в корневую папку сайта.
4. Откройте сайт в браузере.

**Встроенный PHP-сервер:**
```bash
php -S localhost:8000 router.php
```

## Проверка работы

- `/` — главная: список статей.
- `/hello/Иван` — приветственная страница.
- `/bye/Иван` — **новая** страница прощания (ДЗ3).
- `/articles/1` — страница одной статьи.
- `/несуществующий` — страница 404.
