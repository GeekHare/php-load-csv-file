### [ RUS ] Как пользоваться

##### 1. Подключите файл **functions.php** или скопируйте из него функцию **load_csv_to_array()** для работы с CSV файлами
<code>
    require_once 'functions.php';
</code>

##### 2. Загрузите файл CSV с мобощью функции **load_csv_to_array()**. 2-м параметром нужно указать разделитель данных.
<code>
    $csv_data = load_csv_to_array('data-from-excel.csv', ',');
</code>

Функция вернет многомерный массив. Названия столбцов будут использоваться в качестве ключей.

Данные в CSV файле

<code>
|---------------------------------|
|    Col1         |   Col2        |
|-----------------|---------------|
|    value 1-1    |   value 2-1   |
|-----------------|---------------|
|    value 1-2    |   value 2-2   |
|---------------------------------|
</code>

Получаемый массив
<code>
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
</code>

##### 3. Выведите данные с помощью foreach

<code>
    foreach ($csv_data AS $value)
    {
        echo '<tr>';
        echo '    <td>' . $value["Col1"] . '</td>';
        echo '    <td>' . $value["Col2"] . '</td>';
        echo '</tr>';
    }
</code>