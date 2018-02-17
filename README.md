### [ RU ]

#### 1. Подключите файл **functions.php** или скопируйте из него функцию **load_csv_to_array()** для работы с CSV файлами
```php
    require_once 'functions.php';
```

#### 2. Загрузите файл CSV с мобощью функции **load_csv_to_array()**. 2-м параметром нужно указать разделитель данных.
```php
    $csv_data = load_csv_to_array('data-from-excel.csv', ',');
```

Функция вернет многомерный массив. Названия столбцов будут использоваться в качестве ключей.

Данные в CSV файле

| Col1          | Col2          |
| ------------- |:-------------:|
| value 1-1     | value 2-1     |
| value 1-2     | value 2-2     |


Возвращаемый массив
```php
    array(2) {
      [0]=>
      array(2) {
        ["Col1"]=>
        string(9) "value 1-1"
        ["Col2"]=>
        string(9) "value 2-1"
      }
      [1]=>
      array(2) {
        ["Col1"]=>
        string(9) "value 1-2"
        ["Col2"]=>
        string(9) "value 2-2"
      }
    }
```

#### 3. Выведите данные с помощью foreach

```php
    foreach ($csv_data AS $value)
    {
        echo '<tr>';
        echo '    <td>' . $value["Col1"] . '</td>';
        echo '    <td>' . $value["Col2"] . '</td>';
        echo '</tr>';
    }
```