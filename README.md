# Задание на разработку серверного приложения

Требуется разработать приложение.  
Разбитая по шагам задача выглядит так:

1. Изучение задачи и технологий;
2. Создание таблиц БД;                        СОЗДАТЬ ТАБЛИЦУ С 3 ПОЛЯМИ: ID, NAME, СОСТОЯНИЕ ACTIVE И CLOSE(1, 0);
3. Инициализация приложения;
4. Разработка функционала вывода списка todo:
  - в модели создать ORM-обертка для таблиц БД;
  - в контроллере необходимо оживить только отображение списка todo;
  - в отображении необходимо разработать только вывод списка todo.
5. Разработка функционала добавления todo;
6. Разработка функционала завершения todo;
7. Разработка функционала удаления todo;
8. Разработка функционала фильтрации списка todo;
9. Разработка функционала массовой очистки/заверщшения списка todo.

В самом низу указаны ссылки на используемые в приложении библиотеки.


## 1. Изучение задачи и технологий

Приложение разрабатывается на `PHP`.  
Работа с внешними библиотеками осуществляется через `Composer`.

В приложении будет использоваться микрофреймворк - `Slim`.  
Для работы с БД будет использоваться ORM `Idiorm` + `Paris`.  
Требуется изучить эти библиотеки перед тем как идти дальше.

Итого необходимо:
 - Познакомится с `PHP` и научится запускать тестовый сервер;
 - Познакомится с `Composer` (менеджер пакетов).
 - Познакомится с фреймворком `Slim`;
 - Познакомится с ORM-библиотеками `Idiorm` + `Paris`;


## 2. Создание таблиц БД
	
В приложении будет использоваться БД `sqlite`.  
Работа с ней осуществляется через web-интерфейс - `http://127.0.0.1/application/db/phpliteadmin.php`.  
Необходимо спроектировать структуру таблиц БД, и используя web-интерфейс создать ее в БД.

После этого нужно заполнить таблицы 2-3 тестовыми записями.


## 3. Инициализация приложения

Требуется инициализировать и настроить `Slim`-приложение.  
В рамках настройки требуется прописать пути к view-шаблонам.

Приложение уже содержит настроенную структуру.  
В рамках нее нужно вести дальнейшую разработку.

*По сути нужно просто создать `Slim`-объект и настроить его.*  
*Это все легко берется из стандартных примерах в документации.*


## 4. Разработка функционала вывода списка todo

Шаг, в котором будут видны первые результаты.
Необходимо "оживить" приложение и вывести список todo.

Этапы работы:

1. Сначала необходимо создать ORM обертки для таблиц БД. Это делается элементарно - глядя в мануал.

2. Далее нужно создать контроллер отвечающий за вывод списка todo, он будет закреплен за корневым url'ом. В нем мы достаем данные из БД (используя ORM) и пробрасываем их в шаблон.

3. В конце, мы оживляем шаблон. Сначала мы его создаем на основе готовой верстки (`markup.html` в корне), а далее выводим в нем список todo из БД. Примеры того как пробросить данные в шаблон тоже есть в мануале.

Это в общем все.


## Шаги 5-9

Шаги однотипны:

1. Создаем контроллер. Разрабатываем в нем требуемый функционал.
2. При необходимости правим шаблон.


# Дополнительно

## Разработка

Вся разработка ведется на локальном php-сервере.  


## Материалы
 - `PHP` - [ссылка](http://php.net/manual/ru/);
 - `Composer` - [ссылка](https://getcomposer.org/);
 - `Slim` - [ссылка](http://www.slimframework.com/);
 - `Idiorm` + `Paris` (ORM) - [ссылка](http://j4mie.github.io/idiormandparis/).


## Результат работы
Результат работы требуется запушить в репозиторий в отдельной ветке.  
Ветка должна называться так же, как логин пользователя в системе.

**Изменять `master` ветку - запрещено!**  


Модель > контролер > вид > браузер
Нужно вызвать готовые классы CRUD
разобраться какие функции нужно вызывать, для функционирования приложения

