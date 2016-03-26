## PHP ООП.
## Урок 12. Автоматическая загрузка классов. Пакетный менеджер *composer*

#### Необходимо:
1. Ознакомиться с предыдущими уроками

#### Ход урока:
1. Перейдите на ветку двенадцатого урока командой ```git checkout lesson12 -f```
2. Вы видите, что папка vendor у вас отсутствует. Выполните команду ```composer install```, чтоб **composer** сгенерировал папку vendor/ и файл-автозагрузки. Убедитесь что автозагрузка работает
3. Удалите папку vendor, файлы composer.json и composer.lock и сгенерируйте новый файл composer.json командой ```composer init```
4. Создайте еще несколько классов в папке app, указывая правильное пространство имен и убедитесь, что они автоматически подключаются composer-ом
5. Посмотрите файл .gitignore - это файл, в котором содержится список всех игнорируемых файлов и директорий. Вы видите, что там находится папка vendor. Действительно, зачем хранить эту папку, если в любой момент composer сомандой ```composer install``` может ее восстановить.
6. Если ты читаешь этот пункт, то можешь быть уверен - ты либо уже неплохой разработчик, либо у тебя огромный потенциал ;) Место для улыбки ;)
7. Переходите к [Уроку 13. Интерфейс (interface). Сходства с абстрактным классом, различия](https://github.com/altiore/mm/tree/lesson13)

## Список уроков:
1. [Введение. Тестируем локальный сервер](https://github.com/altiore/mm/tree/lesson1)
2. [Класс (class). Свойства и методы класса](https://github.com/altiore/mm/tree/lesson2)
3. [Область видимости свойств и методов класса (private, public, protected)](https://github.com/altiore/mm/tree/lesson3)
4. [Статические (static) свойства и методы](https://github.com/altiore/mm/tree/lesson4)
5. [Ключевые слова $this, self, static](https://github.com/altiore/mm/tree/lesson5)
6. [Магические методы (__construct(), __invoke()... )](https://github.com/altiore/mm/tree/lesson6)
7. [Типичная структура рабочих папок](https://github.com/altiore/mm/tree/lesson7)
8. [Пространство имен (namespace)](https://github.com/altiore/mm/tree/lesson8)
9. [Наследование (extends), ключевое слово "parent::"](https://github.com/altiore/mm/tree/lesson9)
10. [Полиморфизм и инкапсуляция - сложные названия простых вещей](https://github.com/altiore/mm/tree/lesson10)
11. [Абстрактные (abstract) и финальные (final) классы и методы](https://github.com/altiore/mm/tree/lesson11)
12. [Автоматическая загрузка (autoload) классов](https://github.com/altiore/mm/tree/lesson12)
13. [Интерфейс (interface). Сходства с абстрактным классом, различия](https://github.com/altiore/mm/tree/lesson13)
14. [Трэйт (trait)](https://github.com/altiore/mm/tree/lesson14)
15. [Обработка ошибок (error hendler), исключения (exceptions)](https://github.com/altiore/mm/tree/lesson15)
16. [Замыкания (closure)](https://github.com/altiore/mm/tree/lesson16)

