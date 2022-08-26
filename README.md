# Brain Games

### Статус тестов и линтера:
[![Actions Status](https://github.com/elisad5791/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/elisad5791/php-project-lvl1/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/d687510cbd3ec8ffb4b3/maintainability)](https://codeclimate.com/github/elisad5791/php-project-lvl1/maintainability)

### Описание 
Набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново. 

Игры:

- Калькулятор. Арифметические выражения, которые необходимо вычислить.
- Прогрессия. Поиск пропущенных чисел в последовательности чисел.
- Определение четного числа.
- Определение наибольшего общего делителя.
- Определение простого числа.

### Системные требования
- php
- composer

### Установка
```
git clone git@github.com:elisad5791/php-project-lvl1.git
cd php-project-lvl1
composer install
```

### Запуск на выполнение
```
make brain-calc           # калькулятор
make brain-progression    # прогрессия
make brain-even           # четность
make brain-gcd            # наибольший общий делитель
make brain-prime          # простое число
```

### Демонстрация
[Видео игры](https://asciinema.org/a/517367)
