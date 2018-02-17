<?php

/**
 * Load csv file to array
 * @param string $file
 * @param string $delimiter
 * @return array|bool
 */
function load_csv_to_array($file = '', $delimiter = ',')
{
    if(file_exists($file))
    {
        if ($csv_data = fopen($file, 'r'))
        {
            $columns_titles = [];   // Header columns (Titles)
            $csv_data_rows = [];    // Rows

            // Parse string
            while ($row = fgetcsv($csv_data, 1000, $delimiter))
            {
                if(!$columns_titles)
                {
                    $columns_titles = $row;
                }
                else
                {
                    array_push($csv_data_rows, array_combine($columns_titles, $row));
                }
            }

            fclose($csv_data);
            return $csv_data_rows;
        }
    }
    else
    {
        return FALSE;
    }
}