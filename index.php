<html>
    <head>
        <title>PHP - load csv file</title>
        <meta charset="utf8">
    </head>
    <body>
        <?php
            require_once 'functions.php';

            /**
             * Data in csv file
             *
             * |---------------------------------|
             * |    Col1         |   Col2        |
             * |-----------------|---------------|
             * |    value 1-1    |   value 2-1   |
             * |-----------------|---------------|
             * |    value 1-2    |   value 2-2   |
             * |---------------------------------|
             */
            $csv_data = load_csv_to_array('data-from-excel.csv', ',');

            echo '<table border="1px" cellspacing="0" cellpadding="5px">';
            echo '<tr>';
            echo '    <td>Col1</td>';
            echo '    <td>Col2</td>';
            echo '</tr>';

            echo "<pre>";
            var_dump($csv_data);
            echo "</pre>";

            // Display data
            foreach ($csv_data AS $value)
            {
                echo '<tr>';
                echo '    <td>' . $value["Col1"] . '</td>';
                echo '    <td>' . $value["Col2"] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        ?>
    </body>
</html>
