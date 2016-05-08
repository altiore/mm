## PHP ООП.
## Урок 15. Обработка ошибок (error hendler), исключения (exceptions)

#### Необходимо:
1. Ознакомиться с предыдущими уроками

#### Ход урока:
1. Перейдите на ветку пятнадцатого урока командой ```git checkout lesson15 --force```
2. Изучите файл **index.php**. Найдите строчку, в которой регистрируется обработчик ошибок.
3. Изучите файл **vendor/liw/core/ErrorHandler.php**. Найдите метод, который выполняется при регистрации обработчика.
4. Обратите внимание, что самым последним в **index.php** подключается файл, который может сгенерировать любые виды ошибок.
5. Найдите этот файл, и попробуйте по очереди раскомментировать несколько ошибок. Проверьте, что выдаст браузер.
6. Поэкспериментируйте с выводом ошибок.
7. Измените класс ErrorHandler так, чтобы вернуть управление ошибками встроенному обработчику.
8. Где удобнее всего произвести логирование ошибки?
9. Переходите к [следующему уроку](https://github.com/altiore/mm/tree/lesson16)


## Список уроков:
1. [Введение. Тестируем локальный сервер](https://github.com/altiore/mm/tree/lesson1)
2. [Класс (class). Свойства и методы класса](https://github.com/altiore/mm/tree/lesson2)
3. [Область видимости свойств и методов класса (private, public, protected)](https://github.com/altiore/mm/tree/lesson3)
4. [Статические (static) свойства и методы](https://github.com/altiore/mm/tree/lesson4)
5. [Ключевые слова $this, self, static](https://github.com/altiore/mm/tree/lesson5)
6. [Магические методы (__construct(), __invoke()... )](https://github.com/altiore/mm/tree/lesson6)
7. [Типичная структура рабочих папок](https://github.com/altiore/mm/tree/lesson7)
8. [Пространства имен (namespace)](https://github.com/altiore/mm/tree/lesson8)
9. [Наследование (extends), ключевое слово "parent::"](https://github.com/altiore/mm/tree/lesson9)
10. [Полиморфизм и инкапсуляция - сложные названия простых вещей](https://github.com/altiore/mm/tree/lesson10)
11. [Абстрактные (abstract) и финальные (final) классы и методы](https://github.com/altiore/mm/tree/lesson11)
12. [Автоматическая загрузка (autoload) классов](https://github.com/altiore/mm/tree/lesson12)
13. [Интерфейс (interface). Сходства с абстрактным классом, различия](https://github.com/altiore/mm/tree/lesson13)
14. [Трэйт (trait)](https://github.com/altiore/mm/tree/lesson14)
15. [Обработка ошибок (error hendler), исключения (exceptions)](https://github.com/altiore/mm/tree/lesson15)
16. [Замыкания (closure)](https://github.com/altiore/mm/tree/lesson16)

