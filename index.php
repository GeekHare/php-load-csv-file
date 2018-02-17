<?php
/**
 * Author: GeekHare
 * Email: inbox@geekhare.me
 * Website: https://geekhare.me
 * GitHub: https://github.com/GeekHare/php-load-csv-file
 */

    require_once 'functions.php';
    $csv_data = load_csv_to_array('data-from-excel.csv', ',');

?>
<html>
    <head>
        <title>PHP - load csv file</title>
        <meta charset="utf8">
    </head>
    <body>
    <table border="1px" cellspacing="0" cellpadding="5px">
        <tr>
            <td>Col1</td>
            <td>Col2</td>
        </tr>
        <?php
            // Display data
            foreach ($csv_data AS $value)
            {
                echo '<tr>';
                echo '    <td>' . $value["Col1"] . '</td>';
                echo '    <td>' . $value["Col2"] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
    </body>
</html>
